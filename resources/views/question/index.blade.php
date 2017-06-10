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
            {{ $question->question }}
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection
