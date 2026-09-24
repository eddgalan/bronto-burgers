<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Administración — Bronto Burgers</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-stone-950 font-sans text-stone-100 antialiased">
        <header class="border-b border-white/10 bg-stone-900/90 backdrop-blur">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-4 py-4 sm:px-6 lg:px-8">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 font-semibold text-white">
                    <span class="flex size-10 items-center justify-center rounded-xl bg-bronto-orange text-xl" aria-hidden="true">🦖</span>
                    Administración Bronto
                </a>

                <div class="flex items-center gap-4">
                    <span class="hidden text-sm text-stone-400 sm:inline">{{ auth()->user()->name }} {{ auth()->user()->lastname }}</span>

                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf

                        <button type="submit" class="rounded-xl border border-white/10 px-4 py-2 text-sm font-medium text-stone-300 transition hover:border-white/20 hover:bg-white/5 hover:text-white">
                            Cerrar sesión
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="mx-auto flex max-w-7xl flex-col gap-8 px-4 py-12 sm:px-6 lg:px-8">
            <section class="rounded-3xl border border-white/10 bg-stone-900 p-6 shadow-2xl shadow-black/20 sm:p-8">
                <span class="inline-flex rounded-full bg-bronto-orange/10 px-3 py-1 text-sm font-semibold text-orange-300">Administrador</span>
                <h1 class="mt-4 text-3xl font-semibold tracking-tight text-white">Panel de administración</h1>
                <p class="mt-2 max-w-2xl text-stone-400">Bienvenido al backoffice de Bronto Burgers. Desde aquí podrás administrar el contenido y la operación de la plataforma.</p>
            </section>
        </main>
    </body>
</html>
