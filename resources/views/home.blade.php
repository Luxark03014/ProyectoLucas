<x-home-layout>
    @if (Auth::check())
        <h1>Bienvenido, {{ $user->name }}!</h1>
        <p>Tu email: {{ $user->email }}</p>
        <p>Tu rol es: {{ $user->roles->title }}</p>
    @else
        <p>Datos de usuario no disponibles.</p>
    @endif

    <x-slot:fileLayout>
        <h3>Archivos subidos:</h3>

        @if (session('uploaded_file'))
            <iframe src="{{ asset('storage/uploads/' . session('uploaded_file')) }}" style="width:600px; height:500px;" frameborder="0"></iframe>
        @endif

        <h4>Lista de archivos:</h4>
        @if (isset($files) && count($files) > 0) 
            <ul>
                @foreach ($files as $file)
                    <li>
                        <iframe src="{{ $file }}" >{{ basename($file) }}</iframe>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No hay archivos subidos.</p>
        @endif
    </x-slot:fileLayout>
</x-home-layout>
