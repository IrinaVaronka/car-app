@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            @include('front.cats')
        </div>
        <div class="col-9">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>{{$car->title}}</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <h5>Master`s name: {{$car->name}}</h5>
                        <h5>Driver`s surname: {{$car->surname}}</h5>
                        <h5>Driver`s spec: {{$car->spec}}</h5>
                        <h5>Driver`s city: {{$car->city}}</h5>
                        <h5>Driver`s service: {{$car->cat_id}}</h5>
                        <button type="submit" class="btn btn-primary">Book a master</button>
                </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
