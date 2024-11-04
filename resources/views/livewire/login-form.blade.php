<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <form class="flex flex-col bg-white shadow-lg rounded-lg p-8 w-full max-w-md" wire:submit.prevent="login">
        

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email:</label>
            <input type="email" wire:model="email" id="email" placeholder="Escribe tu correo" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Contraseña:</label>
            <input type="password" wire:model="password" placeholder="Escribe tu contraseña" id="password" required
                class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Iniciar sesión
        </button>

        @if (session()->has('error'))
            <div class="mt-4 text-red-600 text-center">{{ session('error') }}</div>
        @endif
    </form>
</div>
