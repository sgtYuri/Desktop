@extends('template')
@section('layout')
@include('components.sidebar')

    <main class="o-page__content" style="padding-bottom: 5%;"> 
        @include('components.navbar')
        
        @yield('content')
    </main>
@endsection