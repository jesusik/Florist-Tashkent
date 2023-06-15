@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Edit User</h2>
<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">
            <form action="{{route('admin.users.update', [$user])}}" method="post">
                @method('PATCH')
                {{csrf_field()}}
                <label style="margin-bottom: 20px">
                    <span>Name</span>
                    <input required value="{{$user->name}}" type="text" name="name">
                </label>
                <label style="margin-bottom: 20px">
                    <span>email</span>
                    <input required value="{{$user->email}}" type="email" name="email">
                </label>
                <label style="margin-bottom: 20px">
                    <span>pass</span>
                    <input value="" type="password" name="password">
                </label>
                <button class="upgrade-btn" style="margin-top: 20px ;" type="submit">Update</button>
            </form>
        </article>
    </div>
</div>
@endsection