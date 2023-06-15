@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Products</h2>
<a class="upgrade-btn" href="{{route('admin.products.create')}}">Add</a>
<div class="row">
  <div class="col-12">
    <div class="users-table table-wrapper">
      <table class="posts-table">
        <thead>
          <tr class="users-table-info">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->status}}</td>
            <td>
              <a class="upgrade-btn" href="{{route('admin.products.show',[$product])}}">Show</a>
            </td>
            <td></td>
            <td>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="pag" style="text-align:center; width: 100%">
  {{$products->links()}}

  </div>
</div>
@endsection