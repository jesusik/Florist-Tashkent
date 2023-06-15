@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Edit Category</h2>
<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">
            <form action="{{route('admin.categories.update', [$category])}}" method="post">
                @method('PATCH')
                {{csrf_field()}}
                <label>
                    <span>Name</span>
                    <input value="{{$category->name}}" type="text" name="name">
                </label>
                <button class="upgrade-btn" style="margin-top: 20px ;" type="submit">Update</button>
            </form>
        </article>
    </div>
</div>
@endsection