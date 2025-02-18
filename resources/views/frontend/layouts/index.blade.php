@php
use App\Enums\PageEnum;
use App\Enums\SectionEnum;
$cms_banner = $cms->firstWhere('section', SectionEnum::HOME_BANNER);
$cms_banners = $cms->where('section', SectionEnum::HOME_BANNERS)->values();
$cms_hero = $cms->firstWhere('section', SectionEnum::HERO);
@endphp

@extends('frontend.app', ['title' => 'landing page'])
@section('content')

<!--heeder-->
<div class="demo-screen-headline main-demo main-demo-1 overflow-hidden pb-0 mb-2" id="home">
    <div class="container px-5 px-md-0">
        <div class="overflow-hidden">
            <div class="row">
                <div class="col-lg-6 text-left pos-relative overflow-hidden p-3">
                    <h1 class="text-shadow text-dark">{{ $cms_banner->title ?? 'Album example' }}</h1>
                    <h6 class="mt-3">{!! $cms_banner->description ?? 'Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.' !!}</h6>
                    <a href="{{ $cms_banner->btn_link ?? '#' }}" class="btn btn-pill btn-primary btn-w-md py-2 me-2 mb-1">{{ $cms_banner->btn_text ?? 'Main call to action' }}<i class="fe fe-activity ms-2"></i></a>
                    <a href="#" class="btn btn-pill btn-secondary btn-w-md py-2 mb-1">Demo<i
                            class="fe fe-file-text mx-2"></i></a>
                </div>
                <div class="col-lg-6 text-left pos-relative overflow-hidden market-image">
                    <img alt="" class="logo-2" src="{{ asset($cms_banner->image ?? 'frontend/images/landing/market.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container px-2 px-md-0 mb-5">
    <div class="row gy-2">
        @if ($cms_banners->count() > 0)
        @foreach ($cms_banners as $item)
        <div class="col-lg-3 col-sm-6 d-flex align-items-center">
            <div class="card shadow-sm border-0 overflow-hidden w-100">
                <div class="card-body d-flex align-items-center p-3">
                    <a href="#" class="d-block w-100 h-100">
                        <img class="img-fluid mx-auto d-block" src="{{ $item->image ?? 'default/logo.png' }}" alt="">
                    </a>
                    <div class="text-center">
                        <h5 class="mt-3">{{ $item->title ?? 'Example headline.' }}</h5>
                        <p class="fs-13">{!! $item->description ?? 'Some representative placeholder content for the first slide of the carousel.' !!}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @else
        @for ($i = 1; $i <= 4; $i++)
        <div class="col-lg-3 col-sm-6 d-flex align-items-center">
            <div class="card shadow-sm border-0 overflow-hidden w-100">
                <div class="card-body d-flex align-items-center p-3">
                    <a href="#" class="d-block w-100 h-100">
                        <img class="img-fluid mx-auto d-block" src="{{ asset('default') }}/logo.png" alt="">
                    </a>
                    <div class="text-center">
                        <h5 class="mt-3">{{ $i }}. Example headline</h5>
                        <p class="fs-13">Some representative placeholder content for slide {{ $i }} of the carousel.</p>
                    </div>
                </div>
            </div>
        </div>
        @endfor
        @endif
    </div>
</div>
<!--heeder end-->

<div class="hor-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container">

            <!-- Our motto section-->
            <!-- <div class="section pb-5">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <h3 class="header-family">Our Motto</h3>
                            <p class="text-default sub-text">Our goal is to educate young professionals on the product
                                management and also providing users path to easy customization.</p>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-3 col-sm-6 why-image">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/landing/Why/web-designing.png" alt="">
                                    </div>
                                    <p class="why-head mb-2">Design Quality</p>
                                    <p class="fs-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                                        labore </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 why-image">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/landing/Why/documentation.png" alt="">
                                    </div>
                                    <p class="why-head mb-2">Documentation</p>
                                    <p class="fs-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                                        labore </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 why-image">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/landing/Why/web-settings.png" alt="">
                                    </div>
                                    <p class="why-head mb-2">Customization</p>
                                    <p class="fs-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                                        labore </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 why-image">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-2">
                                        <img class="img-fluid" src="{{ asset('frontend') }}/images/landing/Why/update.png" alt="">
                                    </div>
                                    <p class="why-head mb-2">Life Time Updates</p>
                                    <p class="fs-13">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                                        labore </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Our motto section end-->

            <!-- Testimonials section-->
            <!-- <div class="section pb-5 bg-white" id="About">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 ps-4 mb-lg-0- mb-4">
                            <h3 class="header-family">About</h3>
                            <p class="text-default sub-text mb-0">This template is responsively made and can suitable for all
                                devices the design is ready to use no need of customization.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="responsive-screens">
                                <div class="slide">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12 px-0">
                                            <h4 class="fs-25">New pages </h4>
                                            <p class="text-muted mb-4">More advanced pages are included in this template some of
                                                them are mentioned below.</p>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Can Switch Easily From Vertical to HorizontalMenu.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Change Easily SideMenu Styles.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From FullWidth to Boxed Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From Fixed to Scrollable Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From LTR to RTL Version</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From One Color to Another Color style</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-pill btn-secondary btn-w-md py-2 me-2">Buy Now<i class="fe fe-activity ms-2"></i></a>
                                        </div>
                                        <div class="col-md-5 col-12">
                                            <img class="img-fluid float-md-end" src="{{ asset('frontend') }}/images/landing/desktop.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12  px-0">
                                            <h4 class="fs-25">Present your awesome product</h4>
                                            <p class="text-muted mb-5">Lorem ipsum dolor sit amet. Reprehenderit, qui
                                                blanditiis quidem rerum <br>
                                                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Can Switch Easily From Vertical to HorizontalMenu.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Change Easily SideMenu Styles.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From FullWidth to Boxed Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From Fixed to Scrollable Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From LTR to RTL Version</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From One Color to Another Color style</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-pill btn-primary btn-w-md py-2 me-2">Demo<i class="fe fe-file-text ms-2"></i></a>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <img class="img-fluid float-md-end" src="{{ asset('frontend') }}/images/landing/laptop.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12  px-0">
                                            <h4 class="fs-25">Present your awesome product</h4>
                                            <p class="text-muted mb-5">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis
                                                quidem rerum <br>
                                                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Can Switch Easily From Vertical to HorizontalMenu.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Change Easily SideMenu Styles.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From FullWidth to Boxed Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From Fixed to Scrollable Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From LTR to RTL Version</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From One Color to Another Color style</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-pill btn-secondary btn-w-md py-2 me-2">Licenses<i class="fe fe-file-text ms-2"></i></a>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <img class="img-fluid float-md-end" src="{{ asset('frontend') }}/images/landing/tablet.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 col-12 px-0">
                                            <h4 class="fs-25">Present your awesome product</h4>
                                            <p class="text-muted mb-5">Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis
                                                quidem rerum <br>
                                                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Can Switch Easily From Vertical to HorizontalMenu.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Change Easily SideMenu Styles.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From FullWidth to Boxed Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From Fixed to Scrollable Layout.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From LTR to RTL Version</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="d-flex">
                                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                                viewBox="0 0 24 24">
                                                                <path fill="#8fbd56"
                                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                                    opacity=".99" />
                                                                <path fill="#8fbd56" opacity=".2"
                                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                                            </svg></span>
                                                        <div class="ms-3">
                                                            <p>Switch Easily From One Color to Another Color style</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-pill btn-primary btn-w-md py-2 me-2">Buy Now<i class="fe fe-activity ms-2"></i></a>
                                        </div>
                                        <div class="col-md-5 col-sm-12">
                                            <img class="img-fluid float-md-end" src="{{ asset('frontend') }}/images/landing/mobile.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Testimonials Close-->

            <!-- Customization-->
            <!-- <div class="section customizable pb-6">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 ps-4">
                            <h3 class="header-family">Customization</h3>
                            <p class="text-default sub-text mb-0">Noa comes with multiple customizable options,some of them are
                                shown below.</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-5 customize-image text-center">
                            <img class="img-fluid p-5" src="{{ asset('frontend') }}/images/landing/customize.png" alt="">
                        </div>
                        <div class="col-xl-7 p-5">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Can Switch Easily From Vertical to HorizontalMenu.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Change Easily SideMenu Styles.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Switch Easily From FullWidth to Boxed Layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Switch Easily From Fixed to Scrollable Layout.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Switch Easily From LTR to RTL Version</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Switch Easily From One Color to Another Color style</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>It’s very easy to customize and well-maintained code..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>Multiple color options makes user work simple.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>code is checked and w3c validated..</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="#8fbd56"
                                                    d="M10.3125,16.09375a.99676.99676,0,0,1-.707-.293L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328l-6.1875,6.1875A.99676.99676,0,0,1,10.3125,16.09375Z"
                                                    opacity=".99" />
                                                <path fill="#8fbd56" opacity=".2"
                                                    d="M12,2A10,10,0,1,0,22,12,10.01146,10.01146,0,0,0,12,2Zm5.207,7.61328-6.1875,6.1875a.99963.99963,0,0,1-1.41406,0L6.793,12.98828A.99989.99989,0,0,1,8.207,11.57422l2.10547,2.10547L15.793,8.19922A.99989.99989,0,0,1,17.207,9.61328Z" />
                                            </svg></span>
                                        <div class="ms-3">
                                            <p>followed design standards to compete in the existing market.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Customization close-->

            <!-- Post-->
            <!-- <div class="section customizable pb-6">
                <div class="container">
                    <div class="row">
                        @forelse ($posts as $post)
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <img src="{{ $post->image ?? asset('default/post.jpg') }}" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Post Image">
                                <div class="card-body">
                                    <p class="card-text">{{ $post->title ?? 'Title' }}</p>
                                    <p>{{ optional($post->category)->name ?? 'Category' }}</p>
                                    <p>{{ $post->content ?? 'Content' }}</p>
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
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c"></rect>
                                    <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
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
            </div> -->
            <!-- post close-->

            <!-- Clients section-->
            <div class="bg-primary section bg-white" id="Clients">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 text-center">
                            <h3 class="header-family text-white">Clients are our most important assets.</h3>
                            <p class="sub-text text-white pb-3">We have the best client in the market who thrives us to perform better.
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="customer-logos">
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/apple.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/chrome.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/google.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/edge.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/firefox.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/opera.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/safari.png" alt=""></div>
                                <div class="slide"><img src="{{ asset('frontend') }}/images/landing/companies/bing.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Clients section Close-->

            <!-- Features -->
            <!-- <div class="section bg-white pb-7" id="Features">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 ps-4">
                            <h3 class="header-family">Noa main Features</h3>
                            <p class="text-default sub-text">The Noa admin template comes with ready-to-use features that are
                                completely easy-to-use for any user, even for a beginner.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                    <path fill="#8FBD56"
                                        d="M7.00293 8.05957a3 3 0 1 1 3-3A3.00328 3.00328 0 0 1 7.00293 8.05957zm0-4a1 1 0 1 0 1 1A1.0013 1.0013 0 0 0 7.00293 4.05957zM17.00293 12.05957a3 3 0 1 1 3-3A3.00328 3.00328 0 0 1 17.00293 12.05957zm0-4a1 1 0 1 0 1 1A1.0013 1.0013 0 0 0 17.00293 8.05957zM7.00293 22.05957a3 3 0 1 1 3-3A3.00328 3.00328 0 0 1 7.00293 22.05957zm0-4a1 1 0 1 0 1 1A1.0013 1.0013 0 0 0 7.00293 18.05957z" />
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M17.00293,12.05957a2.98168,2.98168,0,0,1-1.15424-.2323,2.00186,2.00186,0,0,1-1.84576,1.2323h-4a3.95376,3.95376,0,0,0-2,.55646V7.87531a2.80519,2.80519,0,0,1-2-.00007v8.3686a2.89912,2.89912,0,0,1,2.1543.048,2.00179,2.00179,0,0,1,1.8457-1.23224h4a4.00437,4.00437,0,0,0,3.90619-3.15509A2.96013,2.96013,0,0,1,17.00293,12.05957Z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                Quality & Clean Code
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                The Noa admin code is maintained very cleanly and well-structured with proper comments.
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#8FBD56"
                                        d="M12,15.89355c-0.17551-0.00004-0.34792-0.04618-0.5-0.13378l-9-5.19727c-0.47839-0.27632-0.64221-0.88814-0.36589-1.36653C2.22187,9.04403,2.34806,8.91784,2.5,8.83008l9-5.19336c0.30964-0.17774,0.69036-0.17774,1,0l9,5.19336c0.4784,0.27632,0.64221,0.88814,0.36589,1.36653c-0.08776,0.15194-0.21395,0.27813-0.36589,0.36589l-9,5.19727C12.34792,15.84737,12.17551,15.89351,12,15.89355z" />
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M21.5,13.43359l-2.48682-1.435L12.5,15.75977c-0.1521,0.08759-0.32452,0.13373-0.5,0.13379c-0.17548-0.00006-0.3479-0.0462-0.5-0.13379L4.98682,11.9986L2.5,13.43359c-0.15192,0.08771-0.27814,0.21393-0.36591,0.36584C1.85779,14.27783,2.02161,14.88965,2.5,15.16602l9,5.19727c0.1521,0.08759,0.32452,0.13373,0.5,0.13379c0.17554-0.00006,0.3479-0.0462,0.5-0.13379l9-5.19727c0.15192-0.08777,0.27814-0.21399,0.36591-0.36591C22.14221,14.32172,21.97839,13.7099,21.5,13.43359z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                Multiple Demos
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                We included multiple demos to give a quick overview of our Noa admin template..
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#8FBD56"
                                        d="M16,11H8c-0.55197,0.00031-0.99969-0.44689-1-0.99886C7,10.00076,7,10.00038,7,10V6C6.99969,5.44803,7.44689,5.00031,7.99886,5C7.99924,5,7.99962,5,8,5h8c0.55197-0.00031,0.99969,0.44689,1,0.99886C17,5.99924,17,5.99962,17,6v4c0.00031,0.55197-0.44689,0.99969-0.99886,1C16.00076,11,16.00038,11,16,11z" />
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M18,2H6C4.89545,2,4,2.89545,4,4v16c0,1.10455,0.89545,2,2,2h12c1.10455,0,2-0.89545,2-2V4C20,2.89545,19.10455,2,18,2z M17,6v4c0.00031,0.55194-0.4469,0.99969-0.99884,1C16.00073,11,16.00037,11,16,11H8c-0.55194,0.00031-0.99969-0.4469-1-0.99884C7,10.00073,7,10.00037,7,10V6C6.99969,5.44806,7.4469,5.00031,7.99884,5C7.99927,5,7.99963,5,8,5h8c0.55194-0.00031,0.99969,0.4469,1,0.99884C17,5.99927,17,5.99963,17,6z" />
                                    <circle cx="8" cy="14" r="1" fill="#8FBD56" />
                                    <circle cx="8" cy="18" r="1" fill="#8FBD56" />
                                    <circle cx="12" cy="18" r="1" fill="#8FBD56" />
                                    <circle cx="16" cy="18" r="1" fill="#8FBD56" />
                                    <circle cx="16" cy="14" r="1" fill="#8FBD56" />
                                    <circle cx="12" cy="14" r="1" fill="#8FBD56" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                Bootstrap5 Framework
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                Thanks to the Bootstrap 5 framework, because it gives us the ability to create responsive
                                designs.
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M16,10H8c-2.20917,0-4-1.79083-4-4v6c0.0022,2.20825,1.79175,3.9978,4,4h8c2.20825-0.0022,3.9978-1.79175,4-4V6C20,8.20917,18.20917,10,16,10z" />
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M16,16H8c-2.20825-0.0022-3.9978-1.79175-4-4v6c0.0022,2.20825,1.79175,3.9978,4,4h8c2.20825-0.0022,3.9978-1.79175,4-4v-6C19.9978,14.20825,18.20825,15.9978,16,16z" />
                                    <polygon fill="#8FBD56" points="20 5.998 20 6 20 5.999" />
                                    <path fill="#8FBD56"
                                        d="M16,10H8c-2.20914,0-4-1.79086-4-4s1.79086-4,4-4h8c2.20914,0,4,1.79086,4,4S18.20914,10,16,10z" />
                                    <circle cx="8" cy="13" r="1" fill="#8FBD56" />
                                    <circle cx="8" cy="19" r="1" fill="#8FBD56" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                50+ additional plugins
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                We integrated 50+ plugins into the Noa admin template for better development.
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M21,22H14a.99974.99974,0,0,1-1-1V14a.99974.99974,0,0,1,1-1h7a.99974.99974,0,0,1,1,1v7A.99974.99974,0,0,1,21,22Z" />
                                    <path fill="#8FBD56"
                                        d="M7.91406 17.5l2.793-2.793A.99989.99989 0 0 0 9.293 13.293L6.5 16.08594 3.707 13.293A.99989.99989 0 0 0 2.293 14.707l2.793 2.793L2.293 20.293A.99989.99989 0 1 0 3.707 21.707l2.793-2.793 2.793 2.793A.99989.99989 0 0 0 10.707 20.293zM21 11H14a1.00009 1.00009 0 0 1-.89453-1.44727l3.5-7a1.04127 1.04127 0 0 1 1.78906 0l3.5 7A1.00009 1.00009 0 0 1 21 11z" />
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M6.5,11A4.5,4.5,0,1,1,11,6.5,4.50491,4.50491,0,0,1,6.5,11Z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                10 types of Icons
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                10 types of best Icons are included in this template to enhance design.
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M8.44444,3.11121c-1.10457,0-2,0.89543-2,2v13.55556c-0.00003,1.22729-0.99493,2.22219-2.22222,2.22223h14.44445C20.50762,20.889,22,19.39662,22,17.55567c0,0,0-0.00001,0-0.00001V5.11121c0-1.10457-0.89543-2-2-2L8.44444,3.11121z" />
                                    <path fill="#8FBD56"
                                        d="M6.44446,18.66675V7.55603H4c-1.10455,0-2,0.89539-2,1.99994v9.33301c0,1.10461,0.89545,2,2,2h0.22223C5.44952,20.88898,6.4444,19.89404,6.44446,18.66675z" />
                                    <path fill="#8FBD56"
                                        d="M17,9.0001h-6c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h6c0.55228,0,1,0.44772,1,1S17.55228,9.0001,17,9.0001z M17,13.0001h-1c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h1c0.55228,0,1,0.44771,1,1S17.55228,13.0001,17,13.0001z M12,13.0001h-1c-0.55229,0-1-0.44771-1-1s0.44771-1,1-1h1c0.55229,0,1,0.44771,1,1S12.55229,13.0001,12,13.0001z M17,17.0001h-1c-0.55229,0-1-0.44772-1-1c0-0.55229,0.44771-1,1-1h1c0.55228,0,1,0.44771,1,1C18,16.55238,17.55228,17.0001,17,17.0001z M12,17.0001h-1c-0.55229,0-1-0.44772-1-1c0-0.55229,0.44771-1,1-1h1c0.55229,0,1,0.44771,1,1C13,16.55238,12.55229,17.0001,12,17.0001z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                Advanced Pages
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                More advanced pages are included in this template for easy development.
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                    <rect width="18" height="6" x="3" y="3" fill="#8FBD56" opacity=".3" rx="2" />
                                    <rect width="18" height="6" x="3" y="9" fill="#8FBD56" opacity=".3" rx="2" />
                                    <rect width="18" height="6" x="3" y="15" fill="#8FBD56" opacity=".3" rx="2" />
                                    <circle cx="18" cy="6" r="1" fill="#8FBD56" />
                                    <circle cx="18" cy="12" r="1" fill="#8FBD56" />
                                    <circle cx="18" cy="18" r="1" fill="#8FBD56" />
                                    <circle cx="15" cy="6" r="1" fill="#8FBD56" />
                                    <circle cx="15" cy="12" r="1" fill="#8FBD56" />
                                    <circle cx="15" cy="18" r="1" fill="#8FBD56" />
                                    <path fill="#8FBD56"
                                        d="M9 7H6A1 1 0 0 1 6 5H9A1 1 0 0 1 9 7zM9 13H6a1 1 0 0 1 0-2H9a1 1 0 0 1 0 2zM9 19H6a1 1 0 0 1 0-2H9a1 1 0 0 1 0 2z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                Built for developers
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                Noa is built to make your work easier. Variables, elements, documentation, and reusable
                                components.
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M20,8.99969l-7-7H7a3,3,0,0,0-3,3v14a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z" />
                                    <path fill="#8FBD56"
                                        d="M20 8.99969H15a2 2 0 0 1-2-2v-5zM19 22a.99974.99974 0 0 1-1-1V19a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 19 22zM19 17a1.03391 1.03391 0 0 1-.71-.29.99108.99108 0 0 1-.21045-1.08984A1.14883 1.14883 0 0 1 18.29 15.29a1.02673 1.02673 0 0 1 .32959-.21.91433.91433 0 0 1 .76025 0 1.03418 1.03418 0 0 1 .33008.21 1.15772 1.15772 0 0 1 .21.33008A.98919.98919 0 0 1 19.71 16.71a1.15384 1.15384 0 0 1-.33008.21A.9994.9994 0 0 1 19 17zM15 18H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM15 14H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2zM10 10H9A1 1 0 0 1 9 8h1a1 1 0 0 1 0 2z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                Documentation
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                The documentation provides clear-cut material for the Noa admin template user can understand .
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>

                        <div class="col-12 col-md-4 p-4 fanimate">
                            <div class="features-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24">
                                    <path fill="#8FBD56" opacity=".3"
                                        d="M11,22A9,9,0,0,1,11,4a.99943.99943,0,0,1,1,1v7h7a.99943.99943,0,0,1,1,1A9.00984,9.00984,0,0,1,11,22Z" />
                                    <path fill="#8FBD56"
                                        d="M21,10H15a.99943.99943,0,0,1-1-1V3a.99943.99943,0,0,1,1-1,7.0018,7.0018,0,0,1,7,7A.99943.99943,0,0,1,21,10Z" />
                                </svg>
                            </div>
                            <h4 class="mx-1">
                                5 Types Of Charts
                            </h4>
                            <p class="text-muted mb-3 mx-1">
                                We included five (5) types of the best possible chart options for your project..
                            </p>
                            <a class="mx-1" href="#">Read More <i class="fe fe-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Features Close-->

            <!-- Pricing -->
            <!-- <div class="section pb-7" id="features">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12 ps-3">
                            <h3 class="header-family">Pricing details</h3>
                            <p class="text-default sub-text">Select the best plan that suits your business and jump into the
                                market.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="pricing-tabs">
                                <div class="pri-tabs-heading text-center">
                                    <ul class="nav nav-price">
                                        <li><a data-bs-toggle="tab" href="#month">Monthly</a></li>
                                        <li><a class="active show" data-bs-toggle="tab" href="#year">Annual</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane pb-0 active show" id="year">
                                        <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-4 col-sm-8">
                                                <div class="card p-3 pricing-card">
                                                    <div class="card-header d-block text-justified pt-2">
                                                        <p class="text-18 font-weight-semibold mb-1">Basic</p>
                                                        <p class="text-justify font-weight-semibold mb-1"> <span
                                                                class="text-30 me-2">$</span><span
                                                                class="text-30 me-1">0</span><span class="text-24"><span
                                                                    class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                        <p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Iure quos debitis aliquam .</p>
                                                        <p class="text-13 mb-1 text-warning font-weight-">Billed monthly on
                                                            regular basis!</p>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <ul class="text-justify pricing-body ps-0">
                                                            <li class="mb-4"><span
                                                                    class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 2 Free</strong>
                                                                Domain Name</li>
                                                            <li class="mb-4"><span
                                                                    class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong>3 </strong>
                                                                One-Click Apps</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> 1 </strong>
                                                                Databases</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Unlimited </strong>
                                                                Cloud Storage</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Money </strong>
                                                                BackGuarantee</li>
                                                            <li class="mb-6 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> 24/7</strong>
                                                                support</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer text-center border-top-0 pt-1">
                                                        <button class="btn btn-lg btn-outline-warning btn-block">
                                                            <span class="ms-4 me-4">Select</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-8">
                                                <div class="card p-3 pricing-card">
                                                    <div class="card-header d-block text-justified pt-2">
                                                        <p class="text-18 font-weight-semibold mb-1">Regular</p>
                                                        <p class="text-justify font-weight-semibold mb-1"> <span
                                                                class="text-30 me-2">$</span><span
                                                                class="text-30 me-1">699</span><span class="text-24"><span
                                                                    class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                        <p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Iure quos debitis aliquam .</p>
                                                        <p class="text-13 mb-1 text-info font-weight-">Billed monthly on regular
                                                            basis!</p>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <ul class="text-justify pricing-body ps-0">
                                                            <li class="mb-4"><span
                                                                    class="text-info me-2 p-1 bg-info-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 1 Free</strong>
                                                                Domain Name</li>
                                                            <li class="mb-4"><span
                                                                    class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong>4 </strong>
                                                                One-Click Apps</li>
                                                            <li class="mb-4"><span
                                                                    class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 2 </strong>
                                                                Databases</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Unlimited </strong>
                                                                Cloud Storage</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Money </strong>
                                                                BackGuarantee</li>
                                                            <li class="mb-6 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> 24/7</strong>
                                                                support</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer text-center border-top-0 pt-1">
                                                        <button class="btn btn-lg btn-outline-info btn-block">
                                                            <span class="ms-4 me-4">Select</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-8">
                                                <div class="card p-3 border-primary pricing-card advanced">
                                                    <div class="card-header d-block text-justified pt-2">
                                                        <p class="text-18 font-weight-semibold mb-1 pe-0">Advanced<span
                                                                class="float-end badge bg-primary text-white text-12-f pt-3">Limited
                                                                Deal</span></p>
                                                        <p class="text-justify font-weight-semibold mb-1"> <span
                                                                class="text-30 me-2">$</span><span
                                                                class="text-30 me-1">1,299</span><span class="text-24"><span
                                                                    class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                        <p class="text-13 mb-2">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Iure quos debitis aliquam .</p>
                                                        <p class="text-13 mb-1 text-primary font-weight-">Billed monthly on
                                                            regular basis!</p>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <ul class="text-justify pricing-body ps-0">
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 5 Free</strong>
                                                                Domain Name</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong>5 </strong>
                                                                One-Click Apps</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 3 </strong>
                                                                Databases</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> Unlimited
                                                                </strong> Cloud Storage</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> Money </strong>
                                                                BackGuarantee</li>
                                                            <li class="mb-6"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 24/7</strong>
                                                                support</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer text-center border-top-0 pt-1">
                                                        <button class="btn btn-lg btn-primary text-white btn-block">
                                                            <span class="ms-4 me-4">Select</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="month">
                                        <div class="row d-flex align-items-center justify-content-center">
                                            <div class="col-lg-4 col-sm-8">
                                                <div class="card p-3 pricing-card">
                                                    <div class="card-header d-block text-justified pt-2">
                                                        <p class="text-18 font-weight-semibold mb-1">Basic</p>
                                                        <p class="text-justify font-weight-semibold mb-1"> <span
                                                                class="text-30 me-2">$</span><span
                                                                class="text-30 me-1">0</span><span class="text-24"><span
                                                                    class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                        <p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Iure quos debitis aliquam .</p>
                                                        <p class="text-13 mb-1 text-warning font-weight-">Billed monthly on
                                                            regular basis!</p>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <ul class="text-justify pricing-body ps-0">
                                                            <li class="mb-4"><span
                                                                    class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 2 Free</strong>
                                                                Domain Name</li>
                                                            <li class="mb-4"><span
                                                                    class="text-warning me-2 p-1 bg-warning-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong>3 </strong>
                                                                One-Click Apps</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> 1 </strong>
                                                                Databases</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Unlimited </strong>
                                                                Cloud Storage</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Money </strong>
                                                                BackGuarantee</li>
                                                            <li class="mb-6 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> 24/7</strong>
                                                                support</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer text-center border-top-0 pt-1">
                                                        <button class="btn btn-lg btn-outline-warning btn-block">
                                                            <span class="ms-4 me-4">Select</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-8">
                                                <div class="card p-3 pricing-card">
                                                    <div class="card-header d-block text-justified pt-2">
                                                        <p class="text-18 font-weight-semibold mb-1">Regular</p>
                                                        <p class="text-justify font-weight-semibold mb-1"> <span
                                                                class="text-30 me-2">$</span><span
                                                                class="text-30 me-1">79</span><span class="text-24"><span
                                                                    class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                        <p class="text-13 mb-1">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Iure quos debitis aliquam .</p>
                                                        <p class="text-13 mb-1 text-info font-weight-">Billed monthly on regular
                                                            basis!</p>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <ul class="text-justify pricing-body ps-0">
                                                            <li class="mb-4"><span
                                                                    class="text-info me-2 p-1 bg-info-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 1 Free</strong>
                                                                Domain Name</li>
                                                            <li class="mb-4"><span
                                                                    class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong>4 </strong>
                                                                One-Click Apps</li>
                                                            <li class="mb-4"><span
                                                                    class="text-info me-2 p-1 bg-info-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 2 </strong>
                                                                Databases</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Unlimited </strong>
                                                                Cloud Storage</li>
                                                            <li class="mb-4 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> Money </strong>
                                                                BackGuarantee</li>
                                                            <li class="mb-6 text-muted"><span
                                                                    class="text-gray me-2 p-1 bg-light-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-times"></i></span> <strong> 24/7</strong>
                                                                support</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer text-center border-top-0 pt-1">
                                                        <button class="btn btn-lg btn-outline-info btn-block">
                                                            <span class="ms-4 me-4">Select</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-8">
                                                <div class="card p-3 border-primary pricing-card advanced">
                                                    <div class="card-header d-block text-justified pt-2">
                                                        <p class="text-18 font-weight-semibold mb-1 pe-0">Advanced<span
                                                                class="float-end badge bg-primary text-white">Limited
                                                                Deal</span></p>
                                                        <p class="text-justify font-weight-semibold mb-1"> <span
                                                                class="text-30 me-2">$</span><span
                                                                class="text-30 me-1">129</span><span class="text-24"><span
                                                                    class="op-0-5 text-muted text-20">/</span> month</span></p>
                                                        <p class="text-13 mb-2">Lorem ipsum dolor sit amet consectetur
                                                            adipisicing elit. Iure quos debitis aliquam .</p>
                                                        <p class="text-13 mb-1 text-primary font-weight-">Billed monthly on
                                                            regular basis!</p>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <ul class="text-justify pricing-body ps-0">
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 5 Free</strong>
                                                                Domain Name</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong>5 </strong>
                                                                One-Click Apps</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 3 </strong>
                                                                Databases</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> Unlimited
                                                                </strong> Cloud Storage</li>
                                                            <li class="mb-4"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> Money </strong>
                                                                BackGuarantee</li>
                                                            <li class="mb-6"><span
                                                                    class="text-primary me-2 p-1 bg-primary-transparent  rounded-pill text-10-f"><i
                                                                        class="fa fa-check"></i></span> <strong> 24/7</strong>
                                                                support</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer text-center border-top-0 pt-1">
                                                        <button class="btn btn-lg btn-primary text-white btn-block">
                                                            <span class="ms-4 me-4">Select</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Pricing close -->

            <!-- Faq's -->
            <!-- <section class="section bg-white" id="Faq">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <h3 class="header-family">FAQ's ?</h3>
                            <p class="text-default sub-text mb-5">Frequently asked questions and thieir answers.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Simply dummy text typesetting industry ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            <strong>When an unknown printer took a galley.</strong> It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            There are many variations available ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            <strong>When an unknown printer took a galley.</strong> It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            When is the standard Lorem Ipsum used ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body text-muted">
                                            <strong>When an unknown printer took a galley.</strong> It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion" id="accordionExample1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            But I must explain to you how all this mistaken ?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body text-muted">
                                            <strong>When an unknown printer took a galley.</strong> It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            On the other hand, we denounce with righteous ?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body text-muted">
                                            <strong>When an unknown printer took a galley.</strong> It has survived not only
                                            five centuries, but also the leap into electronic typesetting, remaining essentially
                                            unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing software
                                            like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                            It uses a dictionary of over 200 Latin words ?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix"
                                        data-bs-parent="#accordionExample1">
                                        <div class="accordion-body text-muted">
                                            <strong>Very popular during the Renaissance.</strong> Contrary to popular belief,
                                            Lorem Ipsum is not simply random text. It has roots in a piece of lorem Ipsum is not
                                            simply random text classical Latin literature from 45 BC, making it over 2000 years
                                            old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Faq's -->

            <!-- Team -->
            <!-- <div class="section pb-7" id="Team">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8 ps-3">
                            <h3 class="header-family">Team</h3>
                            <p class="text-default sub-text mb-5">The key to this success is the hardwork and the dedication
                                that our team put into work.</p>
                        </div>
                    </div>
                    <div class="row text-center team">
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="bg-white shadow-sm p-5 team-card"><img
                                    src="{{ asset('frontend') }}/images/landing/team/1.jpg" alt=""
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-1">Zebronski sky</h5><span class="text-muted">Team Lead</span>
                                <ul class="social mb-0 list-inline mt-4">
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="bg-white shadow-sm p-5 team-card"><img
                                    src="{{ asset('frontend') }}/images/landing/team/2.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-1">Samantha young</h5><span class="text-muted">React Developer</span>
                                <ul class="social mb-0 list-inline mt-4">
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="bg-white shadow-sm p-5 team-card"><img
                                    src="{{ asset('frontend') }}/images/landing/team/3.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-1">Melessa janet</h5><span class="text-muted">Angular Developer</span>
                                <ul class="social mb-0 list-inline mt-4">
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="bg-white shadow-sm p-5 team-card"><img
                                    src="{{ asset('frontend') }}/images/landing/team/4.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-1">John trid</h5><span class="text-muted">Manager</span>
                                <ul class="social mb-0 list-inline mt-4">
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="social"><i class="fe fe-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Team close -->

            <!-- Hero -->
            <div class="section pb-7" id="Team">
                <div class="container text-center">
                    @if (isset($cms_hero->metadata['rating']))
                    <h2>{{ $cms_hero->metadata['rating'] }}</h2>
                    @endif
                    <h1 class="display-5">{{ $cms_hero->title ?? 'Dark mode hero' }}</h1>
                    <div class="col-lg-6 mx-auto">
                        <p class="fs-5 mb-4">{{ $cms_hero->description ?? 'Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.' }}</p>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">{{ $cms_hero->btn_text ?? 'Custom button' }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero close -->

            <!-- Contact-->
            <div class="bg-image-landing bg-white section" id="Contact">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-lg-8">
                            <h3 class="header-family">Contact us</h3>
                            <p class="text-default sub-text">You can get in touch any time.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card mt-3 mb-0">
                            <div class="card-body text-dark px-0 pb-0">
                                <div class="statistics-info">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-5">
                                            <div class="">
                                                <div class="text-dark">
                                                    <div class="services-statistics">
                                                        <div class="row text-center">
                                                            <div class="col-xl-6 col-md-6 col-lg-6">
                                                                <div class="card p-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="row">
                                                                            <div class="col-xl-3 col-md-3">
                                                                                <div
                                                                                    class="counter-icon border border-primary text-primary">
                                                                                    <i class="fe fe-map-pin"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-9 px-0 mb-1">
                                                                                <h5 class="mb-1 fw-semibold">Main Branch</h5>
                                                                                <p class="fs-13 text-muted">San Francisco, CA
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xl-3">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-lg-6">
                                                                <div class="card p-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="row">
                                                                            <div class="col-xl-3 col-md-3">
                                                                                <div
                                                                                    class="counter-icon border border-primary text-primary">
                                                                                    <i class="fe fe-headphones"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-9 px-0 mb-1">
                                                                                <h5 class="mb-1 fw-semibold">Phone & Email</h5>
                                                                                <p class="mb-0 fs-13 text-muted">+125 254 3562
                                                                                </p>
                                                                                <p class="fs-13 text-muted">georgeme@abc.com</p>
                                                                            </div>
                                                                            <div class="col-xl-3"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-lg-6">
                                                                <div class="card p-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="row">
                                                                            <div class="col-xl-3 col-md-3">
                                                                                <div
                                                                                    class="counter-icon border border-primary text-primary">
                                                                                    <i class="fe fe-mail"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-9 px-0 mb-1">
                                                                                <h5 class="mb-1 fw-semibold">Contact</h5>
                                                                                <p class="mb-0 fs-13 text-muted">www.example.com
                                                                                </p>
                                                                                <p class="fs-13 text-muted">example@dev.com</p>
                                                                            </div>
                                                                            <div class="col-xl-3"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6 col-md-6 col-lg-6">
                                                                <div class="card p-0">
                                                                    <div class="card-body p-0">
                                                                        <div class="row">
                                                                            <div class="col-xl-3 col-md-3">
                                                                                <div
                                                                                    class="counter-icon border border-primary text-primary">
                                                                                    <i class="fe fe-airplay"></i>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xl-6 col-md-9 px-0 mb-1">
                                                                                <h5 class="mb-1 fw-semibold">Working Hours</h5>
                                                                                <p class="mb-0 fs-13 text-muted">Mon - Fri: 9am
                                                                                    - 6pm</p>
                                                                                <p class="fs-13 text-muted">Sat - sun: Holiday
                                                                                </p>
                                                                            </div>
                                                                            <div class="col-xl-3"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-7">
                                            <div class="">
                                                <form action="{{ route('contact.store') }}" method="post" class="form-horizontal  m-t-20 row">
                                                    @csrf
                                                    <div class="col-xl-12">
                                                        <div class="form-group">
                                                            <input name="name" class="form-control" type="text" required placeholder="Name">
                                                            @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="form-group">
                                                            <input name="email" class="form-control" type="email" required placeholder="Email">
                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="form-group">
                                                            <input name="subject" class="form-control" type="text" required placeholder="Subject">
                                                            @error('subject')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" rows="5" required placeholder="Your Comment"></textarea>
                                                            @error('message')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-pill btn-primary btn-w-sm py-2  waves-effect waves-light">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact close-->

            <!--Support-->
            <!-- <div class="demo-screen-skin bg-primary">
                <div class="container text-center text-white">
                    <div id="demo" class="row">
                        <div class="col-lg-6">
                            <div class="feature-1">
                                <a href="#"></a>
                                <div class="mb-3">
                                    <i class="si si-earphones-alt"></i>
                                </div>
                                <h4 class="fs-25">Get Support</h4>
                                <p class="mb-1 text-white">Need Help? Don't worry. Please visit our support website. Our
                                    dedicated team will help you.</p>
                                <h6 class="mb-0">Support : <a class="text-dark"
                                        href="mailto:support@spruko.com">support@spruko.com</a></h6>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-xl-0 mt-lg-0">
                            <div class="feature-1">
                                <a href="#"></a>
                                <div class="mb-3">
                                    <i class="si si-bubbles"></i>
                                </div>
                                <h4 class="fs-25">Pre-Sale Questions</h4>
                                <p class="mb-1 text-white">Please feel free to ask any questions before making the purchase.</p>
                                <h6 class="mb-0">Ask : <a class="text-dark"
                                        href="mailto:support@spruko.com">support@spruko.com</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--Support close-->

            <!--Subscribe-->
            <div class="demo-screen-skin bg-primary">
                <div class="container text-center text-white">
                    <div id="demo" class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('subscriber.store') }}" method="post">
                                @csrf
                                <div class="text-center">
                                    <h1 class="display-4 fw-bold mb-4">Stay Connected</h1>
                                    <div class="d-flex justify-content-center">
                                        <div class="col-md-4 my-2">
                                            <div class="input-group">
                                                <span class="input-group-text bg-primary text-white">@</span>
                                                <input type="email" name="email" class="form-control" placeholder="Enter your email" aria-label="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mt-4">
                                        <button type="submit" class="btn btn-success btn-lg px-5 fw-bold">Subscribe Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Subscribe close-->
        </div>
    </div>
    <!-- CONTAINER CLOSED -->
</div>
@endsection