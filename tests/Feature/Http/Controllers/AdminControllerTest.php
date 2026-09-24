<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class AdminControllerTest extends TestCase
{
    use LazilyRefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_guest_can_view_admin_login_form(): void
    {
        $response = $this->get(route('admin.login'));

        $response
            ->assertOk()
            ->assertSee('Acceso administrativo');
    }

    public function test_active_administrator_can_log_in(): void
    {
        $administrator = User::factory()->admin()->create([
            'email' => 'admin@brontoburgers.com',
            'password' => 'password',
        ]);

        $response = $this->post(route('admin.login.store'), [
            'email' => 'admin@brontoburgers.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($administrator);
    }

    public function test_non_administrator_cannot_log_in_to_backoffice(): void
    {
        User::factory()->create([
            'email' => 'customer@brontoburgers.com',
            'password' => 'password',
        ]);

        $response = $this->from(route('admin.login'))->post(route('admin.login.store'), [
            'email' => 'customer@brontoburgers.com',
            'password' => 'password',
        ]);

        $response
            ->assertRedirect(route('admin.login'))
            ->assertSessionHasErrors([
                'email' => 'Las credenciales no corresponden a un administrador activo.',
            ]);
        $this->assertGuest();
    }

    public function test_inactive_administrator_cannot_log_in(): void
    {
        User::factory()->admin()->inactive()->create([
            'email' => 'inactive@brontoburgers.com',
            'password' => 'password',
        ]);

        $response = $this->from(route('admin.login'))->post(route('admin.login.store'), [
            'email' => 'inactive@brontoburgers.com',
            'password' => 'password',
        ]);

        $response
            ->assertRedirect(route('admin.login'))
            ->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    public function test_login_requires_email_and_password(): void
    {
        $response = $this->from(route('admin.login'))->post(route('admin.login.store'));

        $response
            ->assertRedirect(route('admin.login'))
            ->assertSessionHasErrors(['email', 'password']);
        $this->assertGuest();
    }

    public function test_guest_is_redirected_to_admin_login_from_dashboard(): void
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertRedirect(route('admin.login'));
    }

    public function test_non_administrator_receives_403_from_dashboard(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('admin.dashboard'));

        $response->assertForbidden();
    }

    public function test_administrator_can_view_dashboard(): void
    {
        $administrator = User::factory()->admin()->create();

        $response = $this->actingAs($administrator)->get(route('admin.dashboard'));

        $response
            ->assertOk()
            ->assertSee('Panel de administración');
    }

    public function test_administrator_can_log_out(): void
    {
        $administrator = User::factory()->admin()->create();

        $response = $this->actingAs($administrator)->post(route('admin.logout'));

        $response->assertRedirect(route('admin.login'));
        $this->assertGuest();
    }
}
