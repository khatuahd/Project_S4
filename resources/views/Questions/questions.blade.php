@extends('layouts.app')

@section('content')
      <div class="">
        <h4 class="border-bottom pb-2 ">List des questions</h4  >
        <div class="d-flex justify-content-end">
          <a href="{{ route ('create')}}" class="btn btn-primary mb-4">Ajouter un Question</a> 
        </div>
         
        @if(session()->has("success"))
            <div class="alert alert-success">
                <h2>{{session()->get('success')}}</h2>
            </div>
            @endif
 
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td scope="col">id</td>
              <td scope="col">question</td>
              <td scope="col">indication</td>
              <td scope="col">Type</td>
              <td scope="col"> </td>
            </tr>
          </thead>
          @foreach($list_questions as $question)
          <tbody>
            <tr>
              <th scope="row">{{$question->id}}</th>
              <td scope="row">{{$question->question}}</td>
              <td scope="row">{{$question->indication}}</td>
              <td scope="row">{{$question->Type}}</td>
              <td scope="row">
                  <a href="#" class="btn btn-primary">Editer</a>
                  <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer cette question?')){document.getElementById('form-{{$question->id}}').submit()}">Supprimer</a>
                  <form id="form-{{$question->id}}" action="#" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                  </form>
                </td>
            @endforeach
            </tr>
            </tbody>
          </table>
    </div>    
@endsection
