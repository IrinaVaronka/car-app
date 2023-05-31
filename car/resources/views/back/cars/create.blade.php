@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Add new car</h3>
                    <form action="{{route('cars-store')}}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <input class="form-control" type="text" name="title" placeholder="Title" value={{old('title')}}>
                        </div>

                        <div class="card-body mt-3 col-6">
                            <select class="form-select" name="cat_id"">
                                <option value=" 0">Car Category</option>
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <div class="form-text">Please select car category here</div>
                        </div>

                        <div class="card-body col-9">
                            <label class="form-label">Driver name</label>
                            <input type="text" class="form-control" name="driver" value={{old('driver')}}>
                            <div class="form-text">Please add driver name</div>
                        </div>

                        <div class="form-button mt-2">
                            <button id="submit" type="submit" class="btn btn-primary">Add car</button>
                            @csrf
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
