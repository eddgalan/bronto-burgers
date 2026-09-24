<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Menú de Bronto Hamburguesas">

  <title>Bronto Hamburguesas</title>

  @fonts
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-bronto-black text-stone-900 antialiased">
  <header class="sticky top-0 z-50 border-b border-white/10 bg-[#171716]/95 text-white backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-5 py-3 lg:px-8">
      <a href="#inicio" class="flex items-center gap-3">
        <div class="grid size-16 place-items-center rounded-full border-4 border-bronto-orange bg-[#2a201b] text-center shadow-lg">
          <div>
            <div class="text-2xl">🦕</div>
            <div class="display text-[11px] leading-none text-bronto-orange">BRONTO</div>
          </div>
        </div>
      </a>
      <nav class="hidden items-center gap-8 md:flex">
        <a class="nav-link" href="#inicio">Inicio</a>
        <a class="nav-link text-bronto-orange" href="#menu">Menú</a>
        <a class="nav-link" href="#nosotros">Sobre nosotros</a>
        <a class="nav-link" href="#ubicacion">Ubicación</a>
        <a class="nav-link" href="#contacto">Contacto</a>
      </nav>
      <div class="flex items-center gap-3">
        <a href="https://wa.me/525612698325" class="hidden rounded-full border border-white/20 px-4 py-2 text-sm font-black transition hover:border-bronto-orange hover:text-bronto-orange sm:inline-flex">
          WhatsApp · 56 1269 8325
        </a>

        @auth
          <a href="{{ route('dashboard') }}" class="rounded-full bg-bronto-orange px-4 py-2 text-sm font-black text-white transition hover:bg-orange-500">
            Mi cuenta
          </a>
        @else
          <a href="{{ route('login') }}" class="rounded-full bg-bronto-orange px-4 py-2 text-sm font-black text-white transition hover:bg-orange-500">
            Ingresar
          </a>
        @endauth
      </div>
    </div>
  </header>

  <main>
    <section id="inicio" class="relative isolate overflow-hidden bg-[#191a16] text-white">
      <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_70%_40%,#8a542d_0%,#29251d_32%,#111_68%)]"></div>
      <div class="absolute -left-20 top-0 -z-10 h-full w-72 bg-[radial-gradient(ellipse,#31512b_0%,transparent_70%)] opacity-60"></div>
      <div class="mx-auto grid min-h-[560px] max-w-7xl items-center gap-10 px-5 py-16 lg:grid-cols-[.9fr_1.1fr] lg:px-8">
        <div>
          <p class="mb-3 text-sm font-black uppercase tracking-[.4em] text-bronto-orange">Hamburguesas de otro nivel</p>
          <h1 class="display text-7xl uppercase leading-[.8] sm:text-8xl">
            Bronto
            <span class="mt-3 block text-5xl text-bronto-orange sm:text-6xl">Hamburguesas</span>
          </h1>
          <p class="mt-8 max-w-xl text-lg text-stone-300">
            Grandes sabores. Épicas experiencias. Un menú jurásico para conquistar hasta el hambre más prehistórica.
          </p>
          <div class="mt-9 flex flex-wrap gap-8 text-center text-xs font-black uppercase">
            <div><span class="mb-2 block text-3xl">🍔</span>Ingredientes<br>premium</div>
            <div><span class="mb-2 block text-3xl">🥩</span>Sabores<br>únicos</div>
            <div><span class="mb-2 block text-3xl">🦖</span>Un lugar<br>jurásico</div>
          </div>
        </div>

        <div class="relative mx-auto w-full max-w-xl">
          <div class="absolute -right-5 -top-7 rotate-3 rounded-lg bg-[#684328] px-7 py-5 text-center text-xl font-black uppercase shadow-2xl">
            Grandes<br>sabores<br><span class="text-bronto-orange">épicas experiencias</span>
          </div>
          <div class="grid aspect-square place-items-center rounded-full bg-[radial-gradient(circle,#e87529_0%,#6c3c20_35%,#1a1713_70%)] shadow-2xl">
            <div class="text-center">
              <div class="text-[10rem] leading-none drop-shadow-2xl">🍔</div>
              <p class="display mt-2 text-3xl text-bronto-orange">CARNE, QUESO Y AVENTURA</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="menu" class="paper">
      <div class="mx-auto max-w-7xl px-5 py-12 lg:px-8">
        <div class="text-center">
          <div class="mb-2 flex items-center justify-center gap-8"><span class="footprint">▼</span><h2 class="display text-5xl uppercase">Nuestro menú</h2><span class="footprint">▼</span></div>
          <p class="text-xs font-bold uppercase tracking-[.2em]">Descubre nuestros platillos del período delicioso</p>
        </div>

        <div class="mt-8 flex flex-wrap justify-center gap-3">
          <button type="button" class="menu-tab active" data-filter="burgers">Hamburguesas</button>
          <button type="button" class="menu-tab" data-filter="entradas">Entradas</button>
          <button type="button" class="menu-tab" data-filter="alitas">Alitas y Boneless</button>
          <button type="button" class="menu-tab" data-filter="hotdogs">Hot Dogs</button>
          <button type="button" class="menu-tab" data-filter="bebidas">Bebidas</button>
          <button type="button" class="menu-tab" data-filter="extras">Extras</button>
        </div>

        <div class="mt-10 menu-panel" data-panel="burgers">
          <div class="mb-6 flex flex-wrap items-end justify-between gap-3">
            <h3 class="display bg-zinc-900 px-6 py-3 text-3xl uppercase text-white">🍔 Hamburguesas</h3>
            <p class="display text-xl uppercase">Carne, queso y aventura</p>
          </div>

          <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <article class="card p-5">
              <div class="mb-4 grid h-40 place-items-center rounded-lg bg-[#32251b] text-8xl">🍔</div>
              <h4 class="display text-2xl uppercase">Clásica</h4>
              <div class="mt-2"><div class="price-row"><span>Sencilla</span><strong>$60</strong></div><div class="price-row"><span>Con Quesillo</span><strong>$75</strong></div><div class="price-row"><span>Hawaiana</span><strong>$85</strong></div><div class="price-row"><span>Carne extra</span><strong>$35</strong></div></div>
              <p class="mt-3 text-xs">Carne 100 gr, pan brioche 80 gr, queso americano, pepinillos, picante, mostaza, mayonesa, catsup, lechuga, jitomate y cebolla.</p>
            </article>

            <article class="card p-5">
              <div class="mb-4 grid h-40 place-items-center rounded-lg bg-[#32251b] text-8xl">🍔</div>
              <h4 class="display text-2xl uppercase">Bronto</h4>
              <div class="mt-2"><div class="price-row"><span>Sencilla</span><strong>$85</strong></div><div class="price-row"><span>Con Quesillo</span><strong>$100</strong></div><div class="price-row"><span>Hawaiana</span><strong>$110</strong></div><div class="price-row"><span>Carne extra</span><strong>$55</strong></div></div>
              <p class="mt-3 text-xs">Carne 100% de res 125 gr, pan brioche 80 gr, queso americano, pepinillos, picante, mostaza, mayonesa, catsup, lechuga, jitomate y cebolla.</p>
            </article>

            <article class="card p-5">
              <div class="mb-4 grid h-40 place-items-center rounded-lg bg-[#32251b] text-8xl">🍔</div>
              <h4 class="display text-2xl uppercase">Arrachera</h4>
              <div class="mt-2"><div class="price-row"><span>Sencilla</span><strong>$80</strong></div><div class="price-row"><span>Con Quesillo</span><strong>$95</strong></div><div class="price-row"><span>Hawaiana</span><strong>$105</strong></div><div class="price-row"><span>Carne extra</span><strong>$50</strong></div></div>
              <p class="mt-3 text-xs">Carne 150 gr, pan brioche 80 gr, queso americano, pepinillos, picante, mostaza, mayonesa, catsup, lechuga, jitomate y cebolla.</p>
            </article>

            <article class="card p-5">
              <div class="mb-4 grid h-40 place-items-center rounded-lg bg-[#32251b] text-8xl">🍔</div>
              <h4 class="display text-2xl uppercase">Pollo</h4>
              <div class="mt-2"><div class="price-row"><span>Sencilla</span><strong>$70</strong></div><div class="price-row"><span>Con Quesillo</span><strong>$85</strong></div><div class="price-row"><span>Hawaiana</span><strong>$95</strong></div><div class="price-row"><span>Carne extra</span><strong>$40</strong></div></div>
              <p class="mt-3 text-xs">Carne de pollo 125 gr, pan brioche 80 gr, queso americano, pepinillos, picante, mostaza, mayonesa, catsup, lechuga, jitomate y cebolla.</p>
            </article>
          </div>

          <div class="mt-5 grid gap-5 lg:grid-cols-3">
            <article class="card p-5"><h4 class="display text-2xl uppercase">Volcan Flaming</h4><div class="my-4 text-center text-8xl">🌶️🍔</div><div class="text-right text-2xl font-black">$110</div><p class="mt-2 text-sm">Carne 100% de res 125 gr, pan brioche, mostaza, mayonesa, catsup, jitomate, cebolla, tocino, Cheetos Flaming, queso manchego y queso líquido.</p></article>
            <article class="card p-5"><h4 class="display text-2xl uppercase">Western</h4><div class="my-4 text-center text-8xl">🧅🍔</div><div class="text-right text-2xl font-black">$130</div><p class="mt-2 text-sm">Carne 100% de res 125 gr, pan brioche, BBQ, lechuga, jitomate, cebolla caramelizada, tocino, aros de cebolla y queso manchego.</p></article>
            <article class="card p-5"><h4 class="display text-2xl uppercase">Espinosaurio</h4><div class="my-4 text-center text-8xl">🦖🍔</div><div class="text-right text-2xl font-black">$140</div><p class="mt-2 text-sm">Carne 100% de res 125 gr, pan brioche, pepinillos, picante, lechuga, jitomate, cebolla, queso manchego, salchicha, jamón, tocino y piña.</p></article>
          </div>

          <div class="mt-5 grid gap-5 lg:grid-cols-2">
            <article class="card flex flex-col gap-5 p-6 sm:flex-row sm:items-center">
              <div class="text-8xl">🍔🍟</div>
              <div><h4 class="display text-3xl uppercase">Micro-Saurios</h4><p class="my-2 text-2xl font-black">$150</p><p class="text-sm">Orden de 5 mini-hamburguesas de res con tocino, pan brioche y quesillo, acompañadas de papas, dip de queso amarillo, chiles nachos y pepinillos.</p></div>
            </article>
            <article class="rounded-xl bg-zinc-900 p-6 text-white">
              <h4 class="display text-3xl uppercase">Ingredientes extras</h4>
              <div class="mt-4 space-y-2"><div class="price-row"><span>Cebolla caramelizada</span><strong>$10</strong></div><div class="price-row"><span>Queso manchego</span><strong>$15</strong></div><div class="price-row"><span>Jamón</span><strong>$15</strong></div><div class="price-row"><span>Salchicha</span><strong>$20</strong></div><div class="price-row"><span>Tocino</span><strong>$20</strong></div></div>
            </article>
          </div>
        </div>

        <div class="menu-panel" data-panel="entradas" hidden>
          <div class="grid gap-5 md:grid-cols-2">
            <article class="card p-6"><h3 class="display text-3xl">PAPAS</h3><div class="mt-4 space-y-2"><div class="price-row"><span>Individuales · 150 gr</span><strong>$25</strong></div><div class="price-row"><span>Chicas · 330 gr</span><strong>$50</strong></div><div class="price-row"><span>Familiares · 670 gr</span><strong>$95</strong></div></div></article>
            <article class="card p-6"><h3 class="display text-3xl">AROS DE CEBOLLA</h3><div class="mt-4 space-y-2"><div class="price-row"><span>Individuales</span><strong>$35</strong></div><div class="price-row"><span>Chicos</span><strong>$70</strong></div></div></article>
          </div>
        </div>

        <div class="menu-panel" data-panel="alitas" hidden>
          <div class="grid gap-5 md:grid-cols-2">
            <article class="card p-6"><h3 class="display text-3xl">ALITAS <span class="float-right">$90</span></h3><p class="mt-4">6 piezas con 150 gr de papas. Sabores: BBQ, Mango Habanero o Búfalo.</p></article>
            <article class="card p-6"><h3 class="display text-3xl">BONELESS <span class="float-right">$135</span></h3><p class="mt-4">8 piezas con 150 gr de papas. Sabores: BBQ, Mango Habanero o Búfalo.</p></article>
          </div>
        </div>

        <div class="menu-panel" data-panel="hotdogs" hidden>
          <article class="card mx-auto max-w-2xl p-6"><h3 class="display text-3xl">FÓSIL-DOG</h3><div class="mt-4"><div class="price-row"><span>Hot Dog Sencillo</span><strong>$60</strong></div><p class="mb-4 text-sm">Salchicha, pan 15 cm, tocino, pepinillos, picante, mostaza, mayonesa, catsup, jitomate, cebolla y papas.</p><div class="price-row"><span>Hot Dog Hawaiano</span><strong>$70</strong></div><p class="text-sm">Piña, jamón y queso manchego.</p></div></article>
        </div>

        <div class="menu-panel" data-panel="bebidas" hidden>
          <div class="grid gap-5 md:grid-cols-3">
            <article class="card p-6"><h3 class="display text-2xl">MALTEADAS</h3><div class="mt-3 space-y-1"><div class="price-row"><span>Magnum</span><strong>$110</strong></div><div class="price-row"><span>Conejito Turín</span><strong>$100</strong></div><div class="price-row"><span>Oreo / Fresa / Chocolate / Vainilla</span><strong>$65</strong></div></div></article>
            <article class="card p-6"><h3 class="display text-2xl">BEBIDAS CALIENTES</h3><div class="mt-3 space-y-1"><div class="price-row"><span>Té 300 ml</span><strong>$15</strong></div><div class="price-row"><span>Café 300 ml</span><strong>$25</strong></div><div class="price-row"><span>Capuchino 300 ml</span><strong>$40</strong></div><div class="price-row"><span>Chocolate 300 ml</span><strong>$35</strong></div></div></article>
            <article class="card p-6"><h3 class="display text-2xl">REFRESCANTES</h3><div class="mt-3 space-y-1"><div class="price-row"><span>Sangría / Naranjada / Limonada / Piñada</span><strong>$55</strong></div><div class="price-row"><span>Soda italiana</span><strong>$60</strong></div><div class="price-row"><span>Smoothie</span><strong>$65</strong></div><div class="price-row"><span>Refrescos</span><strong>$30</strong></div></div></article>
          </div>
        </div>

        <div class="menu-panel" data-panel="extras" hidden>
          <article class="mx-auto max-w-xl rounded-xl bg-zinc-900 p-7 text-white"><h3 class="display text-3xl">INGREDIENTES EXTRAS</h3><div class="mt-4 space-y-2"><div class="price-row"><span>Cebolla caramelizada</span><strong>$10</strong></div><div class="price-row"><span>Queso manchego</span><strong>$15</strong></div><div class="price-row"><span>Jamón</span><strong>$15</strong></div><div class="price-row"><span>Salchicha</span><strong>$20</strong></div><div class="price-row"><span>Tocino</span><strong>$20</strong></div></div></article>
        </div>
      </div>
    </section>

    <section id="nosotros" class="bg-[#201b17] px-5 py-16 text-center text-white">
      <h2 class="display text-4xl uppercase text-bronto-orange">Haz tu hamburguesa a tu manera</h2>
      <p class="mx-auto mt-4 max-w-2xl text-stone-300">Bronto Hamburguesas combina una identidad jurásica divertida con hamburguesas, entradas, alitas, boneless, hot dogs y bebidas.</p>
    </section>

    <footer id="contacto" class="bg-[#111] text-white">
      <div id="ubicacion" class="mx-auto flex max-w-7xl flex-col justify-between gap-8 px-5 py-10 md:flex-row md:items-center lg:px-8">
        <div><p class="display text-3xl uppercase">Bronto Hamburguesas</p><p class="mt-1 text-sm text-stone-400">Comida prehistórica para gente actual</p></div>
        <div class="flex flex-wrap gap-6 text-sm"><a href="https://wa.me/525612698325" class="font-bold hover:text-bronto-orange">WhatsApp · 56 1269 8325</a><span>Facebook · Bronto hamburguesas</span><span>Instagram · Bronto hamburguesas</span></div>
      </div>
    </footer>
  </main>

</body>
</html>
