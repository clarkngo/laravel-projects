@extends('layouts.base')

@section('content')
    <h2>This is content</h2>
    <form action="" method="POST">
    @csrf
    <input text="" name="my-name">
     <button type="submit">Go</button>
    </form>
@endsection