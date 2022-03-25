@extends('layouts.main')
@section('content')
    
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif

    <form action="{{ route('updateItem') }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" name="itemId" value="{{ $item->itemId }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Item Name</label>
            <input type="text" name="itemName" value="{{ $item->itemName }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Item Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuCategory" class="form-label">Menu Category</label>
            <select class="form-select" name="menuId" aria-label="Default select example">
                <option selected>--- Select Menu Name ---</option>
                @foreach ($menus as $menu)
                    <option value="{{ $menu->menuId }}">{{ $menu->menuName }}</option>
                @endforeach
            </select>
        </div> 
        <div class="mb-3">
            <label for="menuName" class="form-label">Description</label>
            <input type="text" name="description" value="{{ $item->description }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Price</label>
            <input type="text" name="price" value="{{ $item->price }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Edit &rarr;</button>
    </form>

@endsection