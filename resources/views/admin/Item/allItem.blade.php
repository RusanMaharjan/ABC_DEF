@extends('layouts.main')
@section('content')
    
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Item Names</th>
        <th scope="col">Image</th>
        <th scope="col">Menu</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($items as $item)          
        <tr>
          <td>{{ $item->itemId }}</td>
          <td>{{ $item->itemName }}</td>
          <td><img src="{{ url('image') }}/{{ $item->image }}" alt="vayo"></td>
          <td>{{ $item->menu->menuName }}</td>
          <td>{{ $item->price }}</td>
          <td>
              <a href="#" class="btn btn-info">Edit</a>
              <a href="#" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      @endforeach
      {{-- <tr>
        <td>2</td>
        <td>MOMO</td>
        <td><img src="{{ url('frontend/image/download.jfif') }}" alt="vayo"></td>
        <td>L</td>
        <td>MOMO</td>
        <td>Rs. 500</td>
        <td>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bhat</td>
        <td><img src="{{ url('frontend/image/download.jfif') }}" alt="vayo"></td>
        <td>D</td>
        <td>Dal Bhat</td>
        <td>Rs. 500</td>
        <td>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr> --}}
    </tbody>
  </table>

  <a href="{{ route('addItem') }}" class="btn btn-primary">Add item</a>
@endsection