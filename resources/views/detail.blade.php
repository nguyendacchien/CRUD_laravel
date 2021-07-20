@extends('layout.master')
@section('content')
    {{--    {{dd($customer)}}--}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$customers->first_name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$customers->last_name}}</h6>
            <p class="card-text">{{$customers->email}}</p>
            <p class="card-text">{{$customers->birthdate}}</p>
{{--            <a href="#" class="card-link">{{$customer[0]->birthdate}}</a>--}}
{{--            <a href="#" class="card-link">{{$customer[0]->city}}</a>--}}
        </div>
    </div>
@endsection
