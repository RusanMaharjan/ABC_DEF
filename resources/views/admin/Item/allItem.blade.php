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
    </tbody>
  </table>

  <a href="{{ route('addItem') }}" class="btn btn-primary">Add item</a>
@endsection