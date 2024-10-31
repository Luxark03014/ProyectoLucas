<form class="flex flex-col bg-black" action="{{ route('login.submit') }}" method="POST">
    @csrf 
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required value="{{ old('email') }}">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <button type="submit">Iniciar sesión</button>
</form>
