<x-auth-layout
    title="Recuperar contraseña"
    heading="Recupera tu acceso"
    description="Te enviaremos un enlace para elegir una contraseña nueva."
>
    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-stone-200">Correo electrónico</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus autocomplete="email" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition placeholder:text-stone-600 focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15" placeholder="tu@correo.com">
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <button type="submit" class="rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
            Enviar enlace de recuperación
        </button>
    </form>

    <x-slot:footer>
        <a href="{{ route('login') }}" class="font-semibold text-orange-300 transition hover:text-orange-200">Volver a iniciar sesión</a>
    </x-slot:footer>
</x-auth-layout>
