@extends('layouts.app')

@section('content')
    <div class="container">
    <form method="POST" action="/question">

    	{{ csrf_field() }}
        <div class="form-group">
        <label for="question">Post a Question Here:</label>
        <input type="question" class="form-control" name="question" required>
        </div>

        <button type="submit" class="btn btn-primary">Publish Your Question</button>
        @include('layouts.error')
    </form>
    <div>
@endsection
