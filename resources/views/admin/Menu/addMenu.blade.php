@extends('layouts.main')
@section('content')
    

    <div class="alert alert-success" role="alert">
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
    </div>

    <form action="{{ route('createMenu') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="menuName" class="form-label">Menu Name</label>
            <input type="text" name="menuName" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Add &rarr;</button>
        <a href="#" class="btn btn-primary">Add &rarr;</a>
    </form>

@endsection