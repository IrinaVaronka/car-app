@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Master list</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($cars as $car)
                        <li class="list-group-item">
                            <div class="cat-line">
                                <div class="card-body">
                                    <h3>Master name: {{$car->name}}</h3>
                                    <h4>Master surname: {{$car->surname}}</h4>
                                    <h4>Master spec: {{$car->spec}}</h4>
                                    <h4>Master city: {{$car->city}}</h4>
                                    <h4>Master service: {{$car->cat_id}}</h4>
                                </div>
                                @if(Auth::user()->role < 5) <div class="buttons">
                                    <a href="{{route('cars-edit', $car)}}" class="btn btn-outline-success">Edit</a>
                                    <form action="{{route('cars-delete', $car)}}" method="post">
                                        <button type="submit" class="btn btn-outline-danger">delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                            </div>
                            @endif
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
