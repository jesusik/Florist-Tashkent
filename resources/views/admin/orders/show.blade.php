@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Show order</h2>
<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">
            <div class="users-table table-wrapper">
                <form action="{{route('admin.orders.destroy',[$order])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <table class="posts-table">
                        <thead>
                            <tr class="users-table-info">
                                <th>ID</th>
                                <th>Name</th>
                                <th>phone</th>
                                <th>product name</th>
                                <th>product price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                @foreach($order->products as $product){
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>

                                }
                                @endforeach

                                <td>
                                    <button class="upgrade-btn">
                                        Delete
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