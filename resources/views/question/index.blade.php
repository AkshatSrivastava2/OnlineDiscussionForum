@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="panel panel-info">
    <div class="panel-heading">
        Your Posted Questions are :
    </div>
    @foreach($questions as $question)
    <div>
        <div class="panel-body">
            {{ $question->question }} <a href="/question/{{$question->id}}/edit" style="float: right;">View Answers</a>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection
