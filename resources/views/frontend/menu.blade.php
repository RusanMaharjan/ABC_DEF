@extends('layouts.main')
@section('content')
    
    <div class="container">
        {{-- <div class="row">
            @foreach ($menus as $menu)                
                <div class="col-md-4 mb-3">
                    <h1>{{ $menu->menuName }}</h1>
                </div>
            @endforeach
        </div> --}}

        <label for="menu" class="form-label">Select menu items for order</label>
            <select class="form-select" name="menuId" aria-label="Default select example">
                <option selected>--- Select Menu ---</option>
                @foreach ($menus as $menu)
                    <option value="{{ $menu->menuId }}">{{ $menu->menuName }}</option>
                @endforeach
            </select>
            
                <div class="container">
                    @foreach ($items as $item)
                        name: {{ $item->itemName }} <br>
                    @endforeach
                </div>
    </div>


@endsection