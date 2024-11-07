<header class="bg-white shadow-md">
  <nav class="flex justify-between items-center p-6">
    <div class="text-3xl font-bold text-gray-800">
      <a href="{{ url('/') }}" class="hover:text-custom-red transition duration-300">Portal de Archivos</a>
    </div>

    <div class="space-x-6 flex">
      <a href="{{ url('/') }}" class="text-lg text-gray-800 hover:text-custom-red transition duration-300">Home</a>
      <a href="{{ url('/upload') }}" class="text-lg text-gray-800 hover:text-custom-red transition duration-300">Subir Archivo</a>
      @livewire('logout-button')
    </div>
  </nav>
</header>
