@extends('home')

@section('content')
    <div class="col-12">
        <div>
            <h1>Danh sách khách hàng</h1>
        </div>
        <a class="btn btn-link" href="{{route('customers.create')}}">Create</a>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key => $customer)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$customer->name }}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->phone}}</td>
                <td><a href="{{route('customers.edit', $customer->id)}}" class="btn btn-outline-primary">Edit</a></td>
                <td><a href="{{route('customers.destroy', $customer->id)}}" class="btn btn-outline-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
