<x-auth-layout
    title="Crear cuenta"
    heading="Únete a Bronto Burgers"
    description="Crea tu cuenta para guardar pedidos y disfrutar más rápido."
>
    <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="name" class="text-sm font-medium text-stone-200">Nombre</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus autocomplete="name" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition placeholder:text-stone-600 focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15" placeholder="Tu nombre">
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-stone-200">Correo electrónico</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition placeholder:text-stone-600 focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15" placeholder="tu@correo.com">
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-medium text-stone-200">Contraseña</label>
            <input id="password" name="password" type="password" required autocomplete="new-password" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15">
            <p class="text-xs text-stone-500">Usa al menos 8 caracteres.</p>
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="flex flex-col gap-2">
            <label for="password_confirmation" class="text-sm font-medium text-stone-200">Confirmar contraseña</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15">
        </div>

        <button type="submit" class="rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
            Crear mi cuenta
        </button>
    </form>

    <x-slot:footer>
        ¿Ya tienes una cuenta?
        <a href="{{ route('login') }}" class="font-semibold text-orange-300 transition hover:text-orange-200">Inicia sesión</a>
    </x-slot:footer>
</x-auth-layout>
