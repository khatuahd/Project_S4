@extends('layouts.app')

@section('content')
    <h1>Create Quiz</h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Sujet</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="sujet" name="sujet">{{ old('sujet') }}
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                <option value="beginner" @if(old('type') == 'beginner') selected @endif>Beginner</option>
                <option value="intermediate" @if(old('type') == 'intermediate') selected @endif>Intermediate</option>
                <option value="advanced" @if(old('type') == 'advanced') selected @endif>Advanced</option>
            </select>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        

        {{-- <div class="mb-3">
            <label for="duration" class="form-label">Duration (in minutes)</label>
            <input type="number" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration') }}">
            @error('duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div> --}}

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
