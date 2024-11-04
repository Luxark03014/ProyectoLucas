@extends('layouts.main')

@section('content')
    <main class="p-5 "> 
        <section class="w-full max-w-md flex flex-col justify-center items-center bg-white p-6 rounded-lg shadow-md">
            @livewire('login-form')
        </section>
    </main>
@endsection
