<div>
  @vite('resources/css/app.css')
  <menu>
    <nav class="bg-stone-200">
      <li class="flex p-6 font-mono text-xl font-bold">
        <ul class="invisible ml-auto mr-36 sm:visible">
          <a wire:click="redirectProductos()" class="cursor-pointer">{{__("Productos")}}</a>
        </ul>
        <ul class="invisible mr-36 sm:visible">
          <a wire:click="redirectInformacion()" class="cursor-pointer">{{__("Información")}}</a>
          
        </ul>
        <ul class="invisible mr-36 sm:visible">
          <a wire:click="redirectContacto()" class="cursor-pointer">{{__("Contacto")}}</a>
        </ul>
        <ul class="visible absolute right-0 mr-5 sm:invisible">
          <button class="group pointer-events-auto cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-transform duration-500 group-active:rotate-90">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </ul>
      </li>
    </nav>
  </menu>
  <div class="w-screen min-h-screen">
    <img src="{{ asset('storage/fondomenu1.jpg') }}" alt="Fondo del menú" class="w-full h-full object-cover">
</div>
</div>

