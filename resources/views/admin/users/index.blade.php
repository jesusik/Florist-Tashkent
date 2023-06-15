@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Users</h2>
<a class="upgrade-btn" href="{{route('admin.users.create')}}">Add</a>
<div class="row">
  <div class="col-12">
    <div class="users-table table-wrapper">
      <table class="posts-table">
        <thead>
          <tr class="users-table-info">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              <a class="upgrade-btn" href="{{route('admin.users.show',[$user])}}">Show</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$users->links()}}
    </div>
  </div>
</div>
@endsection