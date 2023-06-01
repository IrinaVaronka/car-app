@extends('layouts.front')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="col-8">
                @include('front.cats')
            </div>
            <form action="" method="get">
                <div class="col-8">
                    <div class="mt-3">
                        <label class="form-label">Filter</label>
                        <select class="form-select" name="filter">
                            <option value="" </option>
                        </select>
                        <div class="form-text">Please select your filter preferences</div>
                    </div>
                </div>
                <div class="sort-filter-buttons col-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="" class="btn btn-danger">clear</a>
                </div>
            </form>
        </div>


        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Cars</h2>
                </div>


                <div class="card-body">
                    <ul class="list-group">
                        @forelse($cars as $car)
                        <div class="car-line">
                            <a href="{{route('front-show-car', $car)}}">
                                <h3>Car: {{$car->title}}</h3>
                            </a>
                            <h5>Driver`s name: {{$car->driver}}</h5>
                            <button type="submit" class="btn btn-primary">Book a car</button>
                        </div>
                        @empty
                        <li class="list-group-item">
                            No cars
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
