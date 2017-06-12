	@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="panel panel-info">
    <div class="panel-heading">
        Your Posted Question is :
    </div>
        <div class="panel-body">
            {{ $question->question }}
        </div>
    </div>
    <form method="POST" action="/question/{{$question->id}}/reply">
    	{{ csrf_field() }}
    	<div class="form-group">
        <label for="reply">Post a Reply Here:</label>
        <input type="reply" class="form-control" name="reply" required>
        </div>

        <button type="submit" class="btn btn-primary">Publish Your Reply</button>
        @include('layouts.error')
    </form>
</div>
@endsection
