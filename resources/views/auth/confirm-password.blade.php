<x-auth-layout
    title="Confirmar contraseña"
    heading="Confirma que eres tú"
    description="Esta es una zona segura. Escribe tu contraseña para continuar."
>
    <form method="POST" action="{{ route('password.confirm.store') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-medium text-stone-200">Contraseña</label>
            <input id="password" name="password" type="password" required autofocus autocomplete="current-password" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15">
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <button type="submit" class="rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
            Confirmar contraseña
        </button>
    </form>
</x-auth-layout>
