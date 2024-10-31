


<x-home-layout>
@if (Auth::check())
    <h1>Bienvenido, {{ $user->name }}!</h1>
    <p>Tu email: {{ $user->email }}</p>
    <p>Tu rol es: {{ $user->roles->title}}
@else
    <p>Datos de usuario no disponibles.</p>
@endif
    </x-home-layout>