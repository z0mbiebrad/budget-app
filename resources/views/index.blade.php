@extends('layouts.app')
@section('title')
    Create a budget
@endsection
@section('content')
    <form action="" method="POST" class="mt-2 flex border w-1/2 justify-between mx-auto">
        @csrf
        <label for="income">Monthly Income:</label>
        <input type="text" name="income" class="border">
        <input type="submit" value="submit" class="border">
    </form>
@endsection
