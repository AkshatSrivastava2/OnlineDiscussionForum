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
            {{ $question->question }} Posted by {{$question->user->name}} : {{$question->created_at->diffForHumans()}}  <a href="/question/{{$question->id}}" style="float: right;">Answer It</a>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection
