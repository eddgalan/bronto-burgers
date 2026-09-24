<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Acceso administrativo — Bronto Burgers</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-stone-950 font-sans text-stone-100 antialiased">
        <main class="relative isolate flex min-h-screen items-center justify-center overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
            <div class="absolute inset-0 -z-20 bg-[radial-gradient(circle_at_top_left,_#7c2d12_0,_#1c1917_38%,_#0c0a09_75%)]"></div>
            <div class="absolute -top-28 right-0 -z-10 h-80 w-80 rounded-full bg-orange-500/15 blur-3xl"></div>
            <div class="absolute -bottom-32 left-0 -z-10 h-96 w-96 rounded-full bg-red-700/15 blur-3xl"></div>

            <div class="w-full max-w-md">
                <a href="{{ route('home') }}" class="mx-auto mb-8 flex w-fit items-center gap-3 text-stone-100 transition hover:text-orange-300">
                    <span class="flex size-12 items-center justify-center rounded-2xl bg-bronto-orange text-2xl shadow-lg shadow-orange-950/40" aria-hidden="true">🦖</span>
                    <span class="text-lg font-semibold tracking-wide">Bronto Burgers</span>
                </a>

                <section class="rounded-3xl border border-white/10 bg-stone-900/90 p-6 shadow-2xl shadow-black/40 backdrop-blur sm:p-8">
                    <div class="flex flex-col gap-2">
                        <p class="text-xs font-bold uppercase tracking-[0.25em] text-orange-300">Área restringida</p>
                        <h1 class="text-2xl font-semibold tracking-tight text-white">Acceso administrativo</h1>
                        <p class="text-sm leading-6 text-stone-400">Ingresa con una cuenta administradora activa para continuar.</p>
                    </div>

                    <form method="POST" action="{{ route('admin.login.store') }}" class="mt-8 flex flex-col gap-5">
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
                                placeholder="admin@brontoburgers.com"
                            >
                            <x-input-error :messages="$errors->get('email')" />
                        </div>

                        <div class="flex flex-col gap-2">
                            <label for="password" class="text-sm font-medium text-stone-200">Contraseña</label>
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

                        <button type="submit" class="rounded-xl bg-bronto-orange px-4 py-3 font-semibold text-white shadow-lg shadow-orange-950/30 transition hover:bg-orange-500 focus:outline-none focus:ring-3 focus:ring-orange-300/40">
                            Ingresar al panel
                        </button>
                    </form>

                    <div class="mt-8 border-t border-white/10 pt-6 text-center text-sm text-stone-500">
                        Solo el personal autorizado puede acceder.
                    </div>
                </section>
            </div>
        </main>
    </body>
</html>
