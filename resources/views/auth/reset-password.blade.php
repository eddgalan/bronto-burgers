<x-auth-layout
    title="Restablecer contraseña"
    heading="Crea una contraseña nueva"
    description="Elige una contraseña segura que no utilices en otros sitios."
>
    <form method="POST" action="{{ route('password.update') }}" class="flex flex-col gap-5">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-stone-200">Correo electrónico</label>
            <input id="email" name="email" type="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="email" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15">
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-medium text-stone-200">Contraseña nueva</label>
            <input id="password" name="password" type="password" required autocomplete="new-password" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15">
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="flex flex-col gap-2">
            <label for="password_confirmation" class="text-sm font-medium text-stone-200">Confirmar contraseña nueva</label>
            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-white outline-none transition focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15">
        </div>

        <button type="submit" class="rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
            Guardar contraseña
        </button>
    </form>
</x-auth-layout>
