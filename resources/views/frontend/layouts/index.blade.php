@php
use App\Enums\PageEnum;
use App\Enums\SectionEnum;
$cms_banner = $cms->where('section', SectionEnum::HOME_BANNER)->first();
$cms_banners = $cms->where('section', SectionEnum::HOME_BANNER);
$cms_hero = $cms->where('section', SectionEnum::HERO)->first();
@endphp

@extends('frontend.app', ['title' => 'home'])
@section('content')
<div class="row">
    <div class="col-md-6" style="background-image: url('{{ $cms_banner->image ?? 'default/bg.jpg' }}'); background-size: cover;">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">{{ $cms_banner->title ?? 'Album example' }}</h1>
                    <p class="lead text-muted">{{ $cms_banner->description ?? 'Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.' }}</p>
                    <p><a href="{{ $cms_banner->btn_link ?? '#' }}" class="btn btn-primary my-2">{{ $cms_banner->btn_text ?? 'Main call to action' }}</a></p>
                </div>
            </div>
        </section>
    </div>

    <div class="col-md-6">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($cms_banners as $index => $item)
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @if ($cms_banners->count() > 0)
                @foreach ($cms_banners as $item)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ $item->image ?? 'default/post.jpg' }}" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>{{ $item->title ?? 'Example headline.' }}</h1>
                            <p>{{ $item->description ?? 'Some representative placeholder content for the first slide of the carousel.' }}</p>
                            <p><a class="btn btn-lg btn-primary" href="{{ $item->btn_link ?? '#' }}">{{ $item->btn_text ?? 'Sign up today' }}</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                @for ($i = 1; $i <= 3; $i++)
                    <div class="carousel-item {{ $i === 1 ? 'active' : '' }}">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="{{ asset('default') }}/post.jpg">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline {{ $i }}.</h1>
                            <p>Some representative placeholder content for slide {{ $i }} of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
            </div>
            @endfor
            @endif
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
</div>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @forelse ($posts as $post)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ $post->image ?? 'default/post.jpg' }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="...">
                    <div class="card-body">
                        <p class="card-text">{{ $post->title ?? 'Title' }}</p>
                        <p>{{ $post->category->name ?? 'category' }}</p>
                        <p>{{ $post->content ?? 'content' }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            @foreach (range(1, 9) as $i)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                    </svg>
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endforelse
        </div>
    </div>
</div>

<div class="bg-dark text-secondary px-4 py-5 text-center">
    <div class="py-5">
        @if (isset(json_decode($cms_hero->metadata)->rating))
            <h2>{{ json_decode($cms_hero->metadata)->rating }}</h2>
        @endif
        <h1 class="display-5 fw-bold text-white">{{ $cms_hero->title ?? 'Dark mode hero' }}</h1>
        <div class="col-lg-6 mx-auto">
            <p class="fs-5 mb-4">{{ $cms_hero->description ?? 'Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.' }}</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">{{ $cms_hero->btn_text ?? 'Custom button' }}</button>
            </div>
        </div>
    </div>
</div>
@endsection
