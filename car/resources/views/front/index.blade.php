@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="col-8">
                @include('front.cats')
            </div>
           
        </div>


        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Masters</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($cars as $car)
                        <div class="car-line">
                            <a href="{{route('front-show-car', $car)}}">
                                <h3>Master name: {{$car->name}}</h3>
                            </a>
                            <h5>Master surname: {{$car->surname}}</h5>
                            <h5>Master spec: {{$car->spec}}</h5>
                            <h5>Master city: {{$car->city}}</h5>
                            <h5>Master service: {{$car->cat_id}}</h5>
                            <button type="submit" class="btn btn-primary">Book a master</button>
                        </div>
                        @empty
                        <li class="list-group-item">
                            No master
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
