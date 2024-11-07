@extends('layouts.main')

@section('content')
    <main class="bg-white w-screen h-screen flex flex-wrap bg-gris-claro items-center justify-center mt">
        <section class="w-full h-full flex justify-center bg-gris-claro">
            @livewire('employee')
        </section>
    </main>