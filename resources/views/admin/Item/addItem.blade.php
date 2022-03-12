@extends('layouts.main')
@section('content')
    
    <form action="" method="post">
        <div class="mb-3">
            <label for="menuName" class="form-label">Item Name</label>
            <input type="text" name="itemName" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Item Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuCategory" class="form-label">Menu Category</label>
            <select class="form-select" name="menu" aria-label="Default select example">
                <option selected>--- Select Menu ---</option>
                @foreach ($menus as $menu)
                    <option value="{{ $menu->menuId }}">{{ $menu->menuName }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="mb-3">
            <label for="menuName" class="form-label">Price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <a href="#" class="btn btn-primary">Add &rarr;</a>
    </form>

@endsection