@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">orders</h2>
<a class="upgrade-btn" href="{{route('admin.orders.create')}}">Add</a>
<div class="row">
  <div class="col-12">
    <div class="users-table table-wrapper">
      <table class="posts-table">
        <thead>
          <tr class="users-table-info">
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
          <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->name}}</td>
            <td>{{$order->phone}}</td>
            <td>
              <a class="upgrade-btn" href="{{route('admin.orders.show',[$order])}}">Show</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$orders->links()}}
    </div>
  </div>
</div>
@endsection