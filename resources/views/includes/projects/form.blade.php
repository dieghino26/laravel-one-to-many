@if ($project->exist)
    <form action="{{ route('admin.projects.edit', $project) }}" method="POST" novalidate>
        @method('PUT')
    @else
        <form action="{{ route('admin.projects.store') }}" method="POST" novalidate>
@endif
@csrf
<div class="row">
    <div class="col-12">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo..."
                value="{{ old('title', $project->title) }}" required>
        </div>
    </div>
    <div class="col-12">
        <div class="mb-3">
            <label for="descritpion" class="form-label">Descrizione del progetto</label>
            <textarea class="form-control" id="description" name="description" rows="10" required>{{ old('description', $project->description) }}"</textarea>
        </div>
    </div>
    <div class="col-11">
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="url" class="form-control" id="image" name="image" placeholder="http:// o https://"
                value="{{ old('image', $project->image) }}">
        </div>
    </div>
    <div class="col-1">
        <div class="mb-3">
            <img src="{{ old('image', $project->image ?? 'https://marcolanci.it/boolean/assets/placeholder.png') }}"
                class="img-fluid" alt="immagine post" id="preview">
        </div>
    </div>
</div>
<hr>
<div class="d-flex align-items-center justify-content-between">
    <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary">Torna alla lista</a>
    <div class="d-flex align-items-center gap-2">
        <button type="reset" class="btn btn-secondary"><i class="fas fa-eraser"></i> Svuota i campi</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-floppy-disk"></i> Salva</button>
    </div>
</div>
</form>
