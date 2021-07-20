@extends('layout.master')
@section('content')
<form method="post" action="{{route('customer.store')}}">
    @csrf
    <h2>Thêm mới khách hàng</h2>
    <div class="row g-3">
        <div class="col-6">
            <label for="inputAddress" class="form-label">first_name</label>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">last_name</label>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name">
        </div><br>
        <div class="col-6">
            <label for="inputAddress" class="form-label">email</label>
            <input type="email" class="form-control" placeholder="abc@gmail.com" aria-label="First name" name="email">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">birthdate</label>
            <input type="date" class="form-control" placeholder="birthdate" aria-label="Last name" name="dob">
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-3">add</button>
</form>
@endsection
