@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Create Category</h2>
<div class="row">
    <div class="col-12">
    <article class="stat-cards-item">

        <form action="{{route('admin.categories.store')}}" method="post">
            {{csrf_field()}}
            <label>
                <span>Name</span>
                <input type="text" name="name">
            </label>
            <button class="upgrade-btn" style="margin-top: 20px ;" type="submit">Add</button>
        </form>
    </article>
    </div>
</div>
@endsection