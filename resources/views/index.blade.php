@extends('layouts.app')

@section('content')
    <h1>Quiz List</h1>

    <a href="{{ route('create') }}" class="btn btn-primary mb-3">Create Quiz</a>

    <table class="table">
        <thead>
            {{-- <tr>
                <th>ID</th> --}}
                <th>Title</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
           {{-- {{dd($quiz);}} --}}
            @foreach ($quiz as $quiz=>$q)
                <tr>
                    <td>
                        {{ $q->id }}
                    </td>
                    <td>
                        {{ $q->description }}
                    </td>
                    <td>
                        {{ $q->sujet }}
                    </td>
                    <td>
                        {{ $q->type }}
                    </td>
                    <td>
                        {{ $q->duration }}
                    </td>
                    <td>
                        <a href="{{ route('edit', $q->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('destroy', $q->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
