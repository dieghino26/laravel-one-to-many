@extends('layouts.app')
@section('title', 'Modifica Post')

@section('content')
    <header>
        <h1>Modifica Progetto</h1>
    </header>
    <hr>
    @include('includes.projects.form')
@endsection
@section('scripts')
    @vite('resources/js/image_preview.js')
@endsection
