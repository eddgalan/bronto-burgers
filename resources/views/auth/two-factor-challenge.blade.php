<x-auth-layout
    title="Verificación en dos pasos"
    heading="Verifica tu identidad"
    description="Introduce el código de tu aplicación de autenticación o utiliza uno de recuperación."
>
    <form method="POST" action="{{ route('two-factor.login.store') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <label for="code" class="text-sm font-medium text-stone-200">Código de autenticación</label>
            <input id="code" name="code" type="text" inputmode="numeric" autofocus autocomplete="one-time-code" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 text-center font-mono text-lg tracking-[0.35em] text-white outline-none transition placeholder:tracking-normal placeholder:text-stone-600 focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15" placeholder="000000">
            <x-input-error :messages="$errors->get('code')" />
        </div>

        <div class="flex items-center gap-3 text-xs uppercase tracking-widest text-stone-600">
            <span class="h-px grow bg-white/10"></span>
            o
            <span class="h-px grow bg-white/10"></span>
        </div>

        <div class="flex flex-col gap-2">
            <label for="recovery_code" class="text-sm font-medium text-stone-200">Código de recuperación</label>
            <input id="recovery_code" name="recovery_code" type="text" autocomplete="one-time-code" class="rounded-xl border border-white/10 bg-stone-950/70 px-4 py-3 font-mono text-white outline-none transition placeholder:text-stone-600 focus:border-orange-400 focus:ring-3 focus:ring-orange-400/15" placeholder="Código de recuperación">
            <x-input-error :messages="$errors->get('recovery_code')" />
        </div>

        <button type="submit" class="rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
            Verificar y continuar
        </button>
    </form>
</x-auth-layout>
