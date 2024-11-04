@extends('layouts.main')

@section('content')
    <main class="mx-5 min-h-screen bg-black flex justify-center items-center">
        <section class="w-full max-w-md flex flex-col justify-center items-center bg-white p-6 rounded-lg shadow-md">
            @livewire('login-form')
        </section>
    </main>
@endsection
