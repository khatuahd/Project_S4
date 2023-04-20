@extends('layouts.app')

@section('content')
<main class="container">

    <form method="post" action="{{route ('store') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="titlebar">
            <h1>Ajouter un question</h1>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
        <div class="card">
            <div>
                </br>
                <label>Question</label>
                <input type="text" name="question">
                <hr>
                <label>Indication(optional)</label>
                <input type="text" name="indication">
                <!--textarea cols="17" rows="5" name="indication"></textarea-->
                <hr>
                <label>Type</label>
                <input type="text" name="type">
                <hr>
                <label>reponses</label>
                <input type="text" name="reponse">
                <br></br>
                <!--select  name="answer">
                    @foreach(json_decode('{"exist":"exist", "new":"new"}',true) as $optionkey=>$optionvalue)
                        <option value="{{$optionkey}}" >{{$optionvalue}}</option>
                    @endforeach
                </select-->
            </div>
        </div>
        <div class="titlebar">
            <h1></h1>
            <button class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
</main>
@endsection