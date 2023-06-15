@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Show products</h2>
<a class="upgrade-btn" href="{{route('admin.products.edit',[$product])}}">Edit</a>

<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">
            <div class="products-table table-wrapper">
                <form action="{{route('admin.products.destroy',[$product])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <table class="posts-table">
                        <thead>
                            <tr class="users-table-info">
                                <th>ID</th>
                                <th>Name</th>
                                <th>price</th>
                                <th>photo</th>
                                <th>category</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>
                                    <img style="width: 200px" src="{{$product->getPhotoUrl()}}" alt="">
                                </td>
                                <td>{{$product->category->name}}</td>
                                <td>{{$product->status}}</td>
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