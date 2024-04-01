@extends('layouts.app')

@section('title', 'Projects')

@section('content')

    <header>
        <h1 class="my-5">{{ $project->title }}</h1>
    </header>
    <hr>
    <main>
        <div class="clearfix">
            @if ($project->image)
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="me-2 float-start">
            @endif
            <p>{{ $project->description }}</p>
            <div>
                <strong>Creato il: </strong>{{ $project->getFormattedDate('created_at', 'd-m-Y H:i:s') }}
                <strong>Ultima modifica: </strong>{{ $project->getFormattedDate('updated_at') }}
            </div>
        </div>
    </main>

    <footer class="d-flex justify-content-between align-items-center my-3">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Torna indietro</a>

        <div class="d-flex justify-content-between gap-2">
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">
                <i class="fas fa-pencil me-2"></i> Modifica
            </a>

            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="delete-form">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">
                    <i class="fas fa-trash me-2"></i> Elimina
                </button>
            </form>
        </div>


    </footer>

@endsection
@section('scripts')
    @vite('resources/js/delete_confirmation.js')
@endsection
