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
      <tr>
        <td>1</td>
        <td>Bhat</td>
        <td><img src="{{ url('frontend/image/download.jfif') }}" alt="vayo"></td>
        <td>BF</td>
        <td>Dal Bhat</td>
        <td>Rs. 500</td>
        <td>
            <a href="#" class="btn btn-info">Edit</a>
            <a href="#" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <tr>
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
      </tr>
    </tbody>
  </table>

@endsection