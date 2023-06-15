@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Edit Product</h2>
<div class="row">
    <div class="col-12">
        <article  class="stat-cards-item">
            <form style="display: flex; flex-direction: column;" action="{{route('admin.products.update', [$product])}}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                {{csrf_field()}}
                <label style="margin-bottom: 20px">
                    <span>Name</span>
                    <input required value="{{$product->name}}" type="text" name="name">
                </label>
                <label style="margin-bottom: 20px">
                    <span>Price</span>
                    <input required value="{{$product->price}}" type="text" name="price">
                </label>

                <label style="margin-bottom: 20px">
                    <span>Photo</span>
                    <input type="file" name="photo">
                </label>
                <label style="margin-bottom: 20px">
                    <span>Category</span>
                    <select name="category_id" id="">
                    @foreach($categories as $category)
                    <option {{$category->id == $product->category_id ? 'selected' : ''}} value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                    @endforeach
                    </select>
                </label>
                <label>
                    <span>Status</span>
                    <label>
                        Active<input type="radio" name="status" value="active"  {{$product->status == "active" ? 'checked' : ''}}>
                    </label>
                    <label>
                        Inactive<input type="radio" name="status" value="inactive" {{$product->status == "inactive" ? 'checked' : ''}}>
                    </label>
                </label>
                <button class="upgrade-btn" style="margin-top: 20px ;" type="submit">Update</button>
            </form>
        </article>
    </div>
</div>
@endsection