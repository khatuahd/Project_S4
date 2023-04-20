@extends('layouts.app')

@section('content')        
    <h4 class="border-bottom pb-2 ">List des quizzes</h4  >
    <div class="d-flex justify-content-end">
      <a href="{{ route('qcreate')}}" class="btn btn-primary mb-4">Ajouter un Quiz</a> 
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            {{-- <tr>
                <th>ID</th> --}}
                <th>Title</th>
                <th>Description</th>
                <th>sujet</th>
                {{-- <th>Duration</th> --}}
                <th>Type</th>
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
                    {{-- <td>
                        <a href="{{ route('quiz.show', $q->id) }}">{{ $q->description }}</a>
                    </td>                     --}}
                    <td>
                        {{ $q->sujet }}
                    </td>
                    <td>
                        {{ $q->type }}
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
