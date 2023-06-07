@inject('cats', App\Services\CatsService::class)
<div class="card mt-5">
    <div class="card-header">
        <h2>Services</h2>
    </div>
    <div class="card-body">
        <ul class="list-group">
        <div class="cat-line">
                <a href="{{route('front-index')}}">All cervices</a>
            </div>
            @forelse($cats->get() as $cat)
            <div class="cat-line">
                <a href="{{route('front-cat-cars', $cat)}}">{{$cat->title}}</a>
            </div>
            @empty
            <li class="list-group-item">
                <div class="cat-line">No services</div>
            </li>
            @endforelse
        </ul>
    </div>
</div>
