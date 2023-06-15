@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Create User</h2>
<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">

            <form style="display: flex; flex-direction: column" action="{{route('admin.users.store')}}" method="post">
                {{csrf_field()}}
                <label style="margin-bottom: 20px">
                    <span>Name</span>
                    <input required type="text" name="name">
                </label>
                <label style="margin-bottom: 20px">
                    <span>Email</span>
                    <input required type="email" name="email">
                </label>
                <label>
                    <span>Password</span>
                    <input required type="password" name="password">
                </label>
                <button class="upgrade-btn" style="margin-top: 20px ;" type="submit">Add</button>
            </form>
        </article>
    </div>
</div>
@endsection