<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class AuthenticationPagesTest extends TestCase
{
    use LazilyRefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_guest_authentication_pages_render(): void
    {
        $this->get(route('login'))
            ->assertOk()
            ->assertSee('Bienvenido de vuelta');

        $this->get(route('register'))
            ->assertOk()
            ->assertSee('Únete a Bronto Burgers');

        $this->get(route('password.request'))
            ->assertOk()
            ->assertSee('Recupera tu acceso');

        $this->get(route('password.reset', ['token' => 'test-token', 'email' => 'bronto@example.com']))
            ->assertOk()
            ->assertSee('Crea una contraseña nueva');
    }

    public function test_valid_registration_creates_and_authenticates_user(): void
    {
        $response = $this->post(route('register.store'), [
            'name' => 'Bronto Cliente',
            'email' => 'bronto@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertRedirect('/dashboard');
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'name' => 'Bronto Cliente',
            'email' => 'bronto@example.com',
        ]);
    }

    public function test_unauthenticated_user_is_redirected_from_dashboard(): void
    {
        $response = $this->get(route('dashboard'));

        $response->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_view_dashboard(): void
    {
        $user = User::factory()->create([
            'name' => 'Bronto Cliente',
        ]);

        $response = $this->actingAs($user)->get(route('dashboard'));

        $response
            ->assertOk()
            ->assertSee('¡Hola, Bronto Cliente!');
    }

    public function test_authenticated_user_can_log_out(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('logout'));

        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
