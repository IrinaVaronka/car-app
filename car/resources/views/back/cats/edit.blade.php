@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit cervice</h1>
                </div>
                <div class="card-body">
                    <form action="{{route('cats-update', $cat)}}" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Service title</label>
                            <input type="text" class="form-control" name="title" value="{{old('title', $cat->title)}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Service address</label>
                            <input type="text" class="form-control" name="address" value="{{old('address', $cat->address)}}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Service lead</label>
                            <input type="text" class="form-control" name="lead" value="{{old('lead', $cat->lead)}}">
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