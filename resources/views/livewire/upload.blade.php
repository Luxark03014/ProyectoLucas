
<form wire:submit.prevent="uploadFile">
    <input type="file" wire:model="file" required>
    @error('file') <span class="error">{{ $message }}</span> @enderror

    <button class="text-lg" type="submit">Subir Archivo</button>
</form>