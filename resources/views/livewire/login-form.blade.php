<div>
    <form wire:submit.prevent="login">
        <div>
            <label for="email">Email:</label>
            <input type="email" wire:model="email" id="email" placeholder="Escribe tu correo" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" wire:model="password" placeholder="Escribe tu contraseña" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">
            Iniciar sesión
        </button>

        @if (session()->has('error'))
            <div>{{ session('error') }}</div>
        @endif
    </form>
</div>