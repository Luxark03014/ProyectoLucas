<div class="flex flex-col items-center justify-center min-h-screen bg-gray-50">
    <form class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md" wire:submit.prevent="login">
        <h1 class="text-2xl font-bold text-gray-800 mb-5 text-center">Inicio de Sesión</h1>
        
        <div class="mb-4">
            <label for="email" class="block text-gray-600 font-semibold mb-2">Correo Electrónico:</label>
            <input type="email" wire:model="email" id="email" placeholder="Escribe tu correo" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-600 font-semibold mb-2">Contraseña:</label>
            <input type="password" wire:model="password" placeholder="Escribe tu contraseña" id="password" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg font-semibold hover:bg-white hover:text-red-500 hover:border hover:border-red-500 transition duration-200">
            Iniciar sesión
        </button>

        @if (session()->has('error'))
            <div class="mt-4 text-red-600 text-center">{{ session('error') }}</div>
        @endif
    </form>
</div>
