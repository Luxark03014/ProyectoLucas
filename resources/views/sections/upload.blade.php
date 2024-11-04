@extends('layouts.main')

@section('content')
    <main class="w-1/3 flex flex-col justify-center items-center">
        <h1 class="text-lg font-bold mb-4">Subir archivo</h1> <!-- Encabezado más estilizado -->
        <section class="flex justify-center items-center w-full h-full text-sm p-4 bg-black text-white"> <!-- Estilos adicionales -->
            @livewire('upload')
        </section>
    </main>
@endsection
