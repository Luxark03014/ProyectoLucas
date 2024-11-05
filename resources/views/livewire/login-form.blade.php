<div class="flex flex-col gap-5 items-center justify-center ">
    <form class="flex flex-col bg-blanco shadow-lg rounded-lg p-8 w-full max-w-md" wire:submit.prevent="login">
        <h1 class="text-[30px] font-bold mb-5" >Inicio de Sesión</h1>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Correo Electrónico:</label>
            <input type="email" wire:model="email" id="email" placeholder="Escribe tu correo" required
                class="mt-1 block w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-rojo-avannubo focus:border-none">
           
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Contraseña:</label>
            <input type="password" wire:model="password" placeholder="Escribe tu contraseña" id="password" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-rojo-avannubo focus:border-none">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-rojo-avannubo text-white py-2 rounded-lg hover:bg-white hover:text-gray-700 hover:border hover:border-rojo-avannubo hover:bg-white transition duration-200">
            Iniciar sesión
        </button>

        @if (session()->has('error'))
            <div class="mt-4 text-red-600 text-center">{{ session('error') }}</div>
        @endif
    </form>
</div>