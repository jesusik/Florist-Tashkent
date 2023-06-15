@extends('layouts.admin.adminLayout')
@section('content')
<h2 class="main-title">Messages</h2>
<div class="row">
    <div class="col-12">
        <div class="users-table table-wrapper">
            <table class="posts-table">
                <thead>
                    <tr class="users-table-info">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                    <tr>
                        <td>{{$message->id}}</td>
                        <td>{{$message->name}}</td>
                        <td>{{$message->phone}}</td>
                        <td>{{$message->message}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </form>

            </table>
            {{$messages->links()}}
        </div>
    </div>
</div>
@endsection