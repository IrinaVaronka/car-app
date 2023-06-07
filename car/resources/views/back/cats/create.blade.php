@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card mt-4">
                <div class="card-header">
                    <h3>Add new category</h3>
                    <form action="{{route('cats-store')}}" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <input class="form-control" type="text" name="title" placeholder="Title" value={{old('title')}}>
                        </div>
                         <div class="card-body">
                            <input class="form-control" type="text" name="address" placeholder="Address" value={{old('address')}}>
                        </div>
                        <div class="card-body">
                            <input class="form-control" type="text" name="lead" placeholder="lead" value={{old('lead')}}>
                        </div>
                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-primary">Add service</button>
                            @csrf
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
