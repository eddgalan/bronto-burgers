<x-auth-layout
    title="Iniciar sesión"
    heading="Bienvenido de vuelta"
    description="Ingresa a tu cuenta para continuar con tu pedido."
>
    <form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-stone-200">Correo electrónico</label>
            <input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="email"
                class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition placeholder:text-stone-600 focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15"
                placeholder="tu@correo.com"
            >
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col gap-2">
            <div class="flex items-center justify-between gap-4">
                <label for="password" class="text-sm font-medium text-stone-200">Contraseña</label>
                <a href="{{ route('password.request') }}" class="text-sm font-medium text-orange-300 transition hover:text-orange-200">¿La olvidaste?</a>
            </div>
            <input
                id="password"
                name="password"
                type="password"
                required
                autocomplete="current-password"
                class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15"
            >
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <label class="flex cursor-pointer items-center gap-3 text-sm text-stone-300">
            <input name="remember" type="checkbox" class="size-4 rounded border-white/20 bg-stone-950 text-orange-500 focus:ring-orange-400/30">
            Mantener mi sesión iniciada
        </label>

        <button type="submit" class="rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
            Iniciar sesión
        </button>
    </form>

    <x-slot:footer>
        ¿Aún no tienes cuenta?
        <a href="{{ route('register') }}" class="font-semibold text-orange-300 transition hover:text-orange-200">Crear una cuenta</a>
    </x-slot:footer>
</x-auth-layout>
