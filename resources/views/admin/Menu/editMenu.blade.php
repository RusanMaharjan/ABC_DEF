@extends('layouts.main')
@section('content')
<div class="alert alert-success" role="alert">
    @if (Session::has('message'))
        {{ Session::get('message') }}
    @endif
</div>
    <form action="{{ route('updateMenu') }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" name="menuiId" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Menu Name</label>
            <input type="text" name="menuName" value="{{ $menu->menuName }}" class="form-control">
        </div>
        <button class="btn btn-primary" type="submit">Edit</button>
    </form>

@endsection