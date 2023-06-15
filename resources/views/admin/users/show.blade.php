@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Show Users</h2>
<a class="upgrade-btn" href="{{route('admin.users.edit',[$user])}}">Edit</a>
<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">
            <div class="users-table table-wrapper">
                <form action="{{route('admin.users.destroy',[$user])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <table class="posts-table">
                        <thead>
                            <tr class="users-table-info">
                                <th>ID</th>
                                <th>Name</th>
                                <th>email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <button class="upgrade-btn">
                                        delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </article>
    </div>
</div>
@endsection