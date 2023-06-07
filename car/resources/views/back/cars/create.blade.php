@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Add new master</h3>
                    <form action="{{route('cars-store')}}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <input class="form-control" type="text" name="name" placeholder="Name" value={{old('name')}}>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="surname" placeholder="Surname" value={{old('surname')}}>
                        </div>
                         <div class="card-body">
                            <input class="form-control" type="text" name="spec" placeholder="Spec" value={{old('spec')}}>
                        </div>
                         <div class="card-body">
                            <input class="form-control" type="text" name="city" placeholder="Sity" value={{old('city')}}>
                        </div>

                        <div class="card-body mt-3 col-6">
                            <select class="form-select" name="cat_id">
                                <option value=" 0">Service</option>
                                @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                                @endforeach
                            </select>
                            <div class="form-text">Please select service here</div>
                        </div>

                        

                        <div class="form-button mt-2">
                            <button id="submit" type="submit" class="btn btn-primary">Add master</button>
                            @csrf
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
