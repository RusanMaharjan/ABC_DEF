@extends('layouts.main')
@section('content')
    
    <div class="container">
        <div class="row">
            @foreach ($menus as $menu)                
                <div class="col-md-4 mb-3">
                    <h1>{{ $menu->menuName }}</h1>
                </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col-md-4">
                name: Dal Bhaat
                desc: jfldsa
                price: Rs. 500
            </div>
            <div class="col-md-4">
                name: Dal Bhaat
                desc: jfldsa
                price: Rs. 500
            </div>
            <div class="col-md-4">
                name: Dal Bhaat
                desc: jfldsa
                price: Rs. 500
            </div>
        </div>
    </div>


@endsection