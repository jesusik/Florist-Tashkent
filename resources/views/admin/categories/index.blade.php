@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Categories</h2>
<a class="upgrade-btn" href="{{route('admin.categories.create')}}">Add</a>
<div class="row">
  <div class="col-12">
    <div class="users-table table-wrapper">
      <table class="posts-table">
        <thead>
          <tr class="users-table-info">
            <th>ID</th>
            <th>Name</th>
          </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>
              <a class="upgrade-btn" href="{{route('admin.categories.show',[$category])}}">Show</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$categories->links()}}
    </div>
  </div>
</div>
@endsection