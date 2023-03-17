
@extends('layouts.app')

@section('content')
    <h1>Edit Quiz</h1>
    {{-- {{dd($q);}} --}}
    <form action="{{ route('update', $quiz->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{ old('description', $quiz->description) }}" required>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sujet" class="form-label">Sujet</label>
            <textarea class="form-control @error('sujet') is-invalid @enderror" id="sujet" name="sujet">{{ old('sujet', $quiz->sujet) }}</textarea>
            @error('sujet')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <textarea class="form-control @error('type') is-invalid @enderror" id="type" name="type">{{ old('type', $quiz->type) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (in minutes)</label>
            <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration', $quiz->duration) }}">
            @error('duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
