<div class="min-h-screen bg-gray-100 font-sans">
 

    <header class="bg-white shadow-sm py-4 px-8 mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Portal de Archivos de Empresa</h1>
        <p class="text-gray-600">Accede a tus archivos y perfil personal</p>
    </header>

    <div class="flex p-8 space-x-8">
        
        <div class="w-1/3 bg-white h-fit p-6 rounded-lg shadow-lg">
            
            <div class="flex items-center mb-6">
                <div class="bg-red-500 text-white rounded-full p-3 mr-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2a7 7 0 00-7 7h14a7 7 0 00-7-7z" clip-rule="evenodd" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-gray-800">Perfil Personal</h2>
            </div>

            
            <div class="space-y-2 text-gray-700">
                @if (Auth::check())
                    <p><span class="font-semibold">Nombre:</span> {{ $user->name }}</p>
                    <p><span class="font-semibold">Correo:</span> {{ $user->email }}</p>
                    <p><span class="font-semibold">Rol:</span> {{ $user->roles->title }}</p>
                @else
                    <p class="text-red-600">Datos de usuario no disponibles.</p>
                @endif
            </div>

            
          
        </div>

        
        <div class="w-2/3 bg-white p-6 rounded-lg shadow-lg">
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Archivos subidos</h3>
                <p class="text-gray-600">Accede a la lista de archivos compartidos</p>
            </div>
           
           
            @if (isset($files) && count($files) > 0)
                <ul class="space-y-4">
                    @foreach ($files as $file)
                        <li class="flex items-center p-4 bg-gray-50 border border-gray-200 rounded-lg shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 mr-3" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a2 2 0 012-2h10a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V3zm8 2a1 1 0 00-1-1H7a1 1 0 100 2h3a1 1 0 001-1zm1 4a1 1 0 01-1 1H7a1 1 0 010-2h3a1 1 0 011 1zm-1 4a1 1 0 01-1 1H7a1 1 0 010-2h3a1 1 0 011 1z" clip-rule="evenodd" />
                            </svg>
                            <iframe src="{{ $file }}" class="w-full h-28 rounded border" title="Archivo subido">{{ basename($file) }}</iframe>
                            

                        </li>
                        <div class="flex justify-between">
                        <div>
                        <p><strong>Usuario: </strong>{{ $uploadedFile->user->name }}</p>
                            <p><strong>Departamento: </strong>{{ $uploadedFile->user->roles->title}}</p>
                        </div>
                        <div>
                           
                            <a href={{ $uploadedFile->filepath }} download="{{ $uploadedFile->filename }}" class="text-blue-500 hover:text-blue-700">Descargar</a>
                        </div>
                        </div>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-600">No hay archivos subidos.</p>
            @endif
        </div>
    </div>
</div>
