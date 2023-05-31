@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Car list</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($cars as $car)
                        <li class="list-group-item">
                            <div class="cat-line">
                                <div class="card-body">
                                    <h2>Car: {{$car->title}}</h2>
                                     <h2>Driver`s name: {{$car->driver}}</h2>
                                </div>
                                <div class="buttons">
                                    <a href="{{route('cars-edit', $car)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('cars-delete', $car)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                            <div class="cat-line">No cars yet</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection