@php
use \Illuminate\Support\Str;
use App\Enums\PageEnum;
use App\Enums\SectionEnum;
$cms_banner = $cms['home']->firstWhere('section', SectionEnum::HOME_BANNER);
$cms_banners = $cms['home']->where('section', SectionEnum::HOME_BANNERS)->values();
$cms_hero = $cms['home']->firstWhere('section', SectionEnum::HERO);
@endphp

@extends('frontend.app', ['title' => 'Project page'])
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

<div class="hor-content main-content mt-0">
    <div class="side-app">
        <!-- CONTAINER -->
        <div class="main-container">

            <!-- Customization-->
            <div class="section customizable pb-6">
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
            </div>
            <!-- Customization close-->

            <!-- Faq's -->
            <section class="section bg-white" id="Faq">
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
            </section>
            <!-- Faq's -->

        </div>
    </div>
    <!-- CONTAINER CLOSED -->
</div>
@endsection