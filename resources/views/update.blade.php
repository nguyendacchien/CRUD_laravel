@extends('layout.master')
@section('content')
    <form method="post" action="{{route('customer.update',$customer->id)}}">
        @csrf
        <h2>Update</h2>
        <div class="row g-3">
{{--            <input type="hidden" value="{{$customer->id}}">--}}
            <div class="col-6">
                <label for="inputAddress" class="form-label">first_name</label>
                <input type="text" class="form-control" placeholder="First name" value="{{$customer->first_name}}" name="first_name">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">last_name</label>
                <input type="text" class="form-control" placeholder="Last name" value="{{$customer->last_name}}" name="last_name">
            </div><br>
            <div class="col-6">
                <label for="inputAddress" class="form-label">email</label>
                <input type="email" class="form-control" placeholder="abc@gmail.com" value="{{$customer->email}}" name="email">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">birthdate</label>
                <input type="date" class="form-control" placeholder="birthdate" value="{{$customer->birthdate}}" name="dob">
            </div>
        </div>
        <button type="submit" class="btn btn-success mt-3">add</button>
    </form>
@endsection

