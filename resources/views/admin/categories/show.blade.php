@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Show Category</h2>
<a class="upgrade-btn" href="{{route('admin.categories.edit',[$category])}}">Edit</a>

<div class="row">
    <div class="col-12">
        <article class="stat-cards-item">
            <div class="users-table table-wrapper">
                <form action="{{route('admin.categories.destroy',[$category])}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE')}}
                    <table class="posts-table">
                        <thead>
                            <tr class="users-table-info">
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
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