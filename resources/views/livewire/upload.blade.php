<div class="min-h-screen bg-gray-50 flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-3xl">
        
        <h1 class="text-3xl font-semibold text-gray-800 mb-6">Subir un Archivo</h1>
        <p class="text-gray-600 mb-6">Selecciona un archivo para subir a tu cuenta. Asegúrate de que el archivo sea del tipo adecuado.</p>
        
        
        <form wire:submit.prevent="uploadFile" class="p-4 max-w-lg mx-auto">
            <input type="file" wire:model="file" required class="file-input file-input-bordered w-full max-w-xs border-custom-red-light focus:outline-none focus:ring-2 focus:ring-custom-red" />
            @error('file') 
              <span class="text-custom-red-dark text-sm">{{ $message }}</span> 
            @enderror
          
            <button type="submit" class="mt-4 py-2 px-6 bg-custom-red text-white rounded-lg hover:bg-custom-red-dark transition-all">
              Subir Archivo
            </button>
          </form>
          

        
        <div class="mt-6">
            @if (session()->has('message'))
                <div class="bg-green-100 text-green-800 border border-green-400 p-4 rounded-lg">
                    <p>{{ session('message') }}</p>
                </div>
            @endif
        </div>
    </div>
</div>
