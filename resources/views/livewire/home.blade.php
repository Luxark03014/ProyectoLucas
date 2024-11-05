<div class="w-full bg-blanco h-full flex flex-col items-center justify-center">
    <div class="">
    <a href="/upload">Logout</a>
    </div>
<div class="bg-gris-claro rounded-lg flex flex-row m-auto mx-0 w-[70%] h-[60%] bg-white shadow-lg p-5">
    <div class="w-[40%]">
        <h1 class="font-bold bg-gris-claro text-[30px]">Perfil Personal</h1>
        <div class="mt-7">
            @if (Auth::check())
                <h1>Nombre y Apellidos, {{ $user->name }}!</h1>
                <p>Tu email: {{ $user->email }}</p>
                <p>Tu rol es: {{ $user->roles->title }}</p>
            @else
                <p>Datos de usuario no disponibles.</p>
            @endif
        </div>
    </div>
    <div class="w-full overflow-y-auto max-h-auto">
        <h3 class="text-[30px] font-bold">Archivos subidos:</h3>

        
        <h4>Lista de archivos:</h4>
        <div class="flex flex-col">
            @if (isset($files) && count($files) > 0)
                <ul class="h-auto w-full">
                    @foreach ($files as $file)
                        <li class="w-full h-full">
                            <iframe class="w-[700px] h-[1200px]" src="{{ $file }}">{{ basename($file) }}</iframe>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No hay archivos subidos.</p>
            @endif
        </div>
    </div>
</div>
</div>