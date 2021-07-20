@extends('layout.master')
@section('content')
    <a href="{{route('customer.create')}}" class="btn btn-success">add</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First_Name</th>
            <th scope="col">Last_Name</th>
            <th scope="col">Email</th>
            <th scope="col">birthdate</th>
            <th scope="col">show</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{$customer->id}}</th>
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->birthdate}}</td>
                <td><a href="{{route('customer.detail',$customer->id)}}" class="btn btn-success">Show</a></td>
                <td><a href="{{route('customer.edit', $customer->id)}}">sửa</a></td>
                <td><a href="{{route('customer.delete',$customer->id)}}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
