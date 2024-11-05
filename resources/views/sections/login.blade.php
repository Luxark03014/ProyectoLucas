@extends('layouts.main')

@section('content')
    <main class="h-screen w-full flex items-center justify-center bg-gray-200"> 
        <section class="flex flex-col gap-3 p-6 bg-white rounded-lg shadow-md">
            @livewire('login-form')
        </section>
    </main>
@endsection
