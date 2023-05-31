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
                    <h2>Cars</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="cat-line">No categories</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
