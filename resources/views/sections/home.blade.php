@extends('layouts.main')

@section('content')
    <main class="w-screen h-screen flex flex-wrap items-center justify-center mt-10">
        <section class="w-full flex justify-center">
            @livewire('home')
        </section>
    </main>
@endsection

