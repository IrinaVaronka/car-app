@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Car</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('cars-update', $car)}}" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Car brand</label>
                            <input type="text" class="form-control mb-3" name="title" value="{{old('title', $car->title)}}">
                             <label class="form-label">Car`s driver</label>
                            <input type="text" class="form-control" name="driver" value="{{old('driver', $car->driver)}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        @csrf
                        @method('put')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
