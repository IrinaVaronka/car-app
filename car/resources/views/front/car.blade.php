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
                        <h5>Driver`s name: {{$car->driver}}</h5>
                        <button type="submit" class="btn btn-primary">Book a car</button>
                </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
