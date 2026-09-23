<x-auth-layout
    title="Verificar correo"
    heading="Revisa tu correo"
    description="Antes de continuar, confirma tu dirección mediante el enlace que acabamos de enviarte."
>
    <div class="flex flex-col gap-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <button type="submit" class="w-full rounded-xl bg-orange-500 px-4 py-3 font-semibold text-stone-950 shadow-lg shadow-orange-950/30 transition hover:bg-orange-400 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
                Reenviar correo de verificación
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="w-full rounded-xl border border-white/10 px-4 py-3 font-medium text-stone-300 transition hover:border-white/20 hover:bg-white/5 hover:text-white">
                Cerrar sesión
            </button>
        </form>
    </div>
</x-auth-layout>
