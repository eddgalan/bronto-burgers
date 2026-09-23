@props([
    'title',
    'heading',
    'description',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }} — {{ config('app.name', 'Bronto Burgers') }}</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-stone-950 font-sans text-stone-100 antialiased">
        <div class="relative isolate flex min-h-screen items-center justify-center overflow-hidden px-4 py-12 sm:px-6 lg:px-8">
            <div class="absolute inset-0 -z-20 bg-[radial-gradient(circle_at_top_left,_#7f1d1d_0,_#1c1917_38%,_#0c0a09_75%)]"></div>
            <div class="absolute -top-28 right-0 -z-10 h-80 w-80 rounded-full bg-orange-500/15 blur-3xl"></div>
            <div class="absolute -bottom-32 left-0 -z-10 h-96 w-96 rounded-full bg-red-700/15 blur-3xl"></div>

            <div class="w-full max-w-md">
                <a href="{{ route('home') }}" class="mx-auto mb-8 flex w-fit items-center gap-3 text-stone-100 transition hover:text-orange-300">
                    <span class="flex size-12 items-center justify-center rounded-2xl bg-orange-500 text-2xl shadow-lg shadow-orange-950/40" aria-hidden="true">🍔</span>
                    <span class="text-lg font-semibold tracking-wide">Bronto Burgers</span>
                </a>

                <div class="rounded-3xl border border-white/10 bg-stone-900/90 p-6 shadow-2xl shadow-black/40 backdrop-blur sm:p-8">
                    <div class="flex flex-col gap-2">
                        <h1 class="text-2xl font-semibold tracking-tight text-white">{{ $heading }}</h1>
                        <p class="text-sm leading-6 text-stone-400">{{ $description }}</p>
                    </div>

                    @if (session('status'))
                        <div class="mt-6 rounded-xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200" role="status">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="mt-8">
                        {{ $slot }}
                    </div>

                    @isset($footer)
                        <div class="mt-8 border-t border-white/10 pt-6 text-center text-sm text-stone-400">
                            {{ $footer }}
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </body>
</html>
