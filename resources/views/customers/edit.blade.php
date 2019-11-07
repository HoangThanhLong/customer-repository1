@extends('home')

@section('content')
<div class="col-12">
    <div>
        <h2>Chỉnh sửa khách hàng</h2>
    </div>
    <form action="{{ route('customers.update', $customer->id ) }}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$customer->name}}">
            </div>
            <div class="form-group col-md-6">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{$customer->email}}">
            </div>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" value="{{$customer->address}}">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control" name="phone" value="{{$customer->phone}}">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
    </form>
</div>
@endsection
