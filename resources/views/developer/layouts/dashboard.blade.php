@extends('developer.app')

@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 -->
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-2 fw-semibold">23</h3>
                                    <p class="text-muted fs-13 mb-0">All Trainers</p>
                                </div>
                                <div class="col col-auto top-icn dash">
                                    <div class="counter-icon bg-primary dash ms-auto box-shadow-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 16 16">
                                            <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
                                            <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-2 fw-semibold">45</h3>
                                    <p class="text-muted fs-13 mb-0">Total Category</p>
                                </div>
                                <div class="col col-auto top-icn dash">
                                    <div
                                        class="counter-icon bg-secondary dash ms-auto box-shadow-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-2 fw-semibold">45</h3>
                                    <p class="text-muted fs-13 mb-0">Total Service</p>
                                </div>
                                <div class="col col-auto top-icn dash">
                                    <div class="counter-icon bg-info dash ms-auto box-shadow-info">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 16 16">
                                            <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                            <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="mb-2 fw-semibold">65</h3>
                                    <p class="text-muted fs-13 mb-0">Today Booking</p>
                                </div>
                                <div class="col col-auto top-icn dash">
                                    <div class="counter-icon bg-warning dash ms-auto box-shadow-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-white" enable-background="new 0 0 24 24" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
                                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ROW-1 END-->

            <!-- ROW-2 -->
            <!-- <div class="row">
                <div class="col-sm-12 col-md-12 col-xl-4 col-lg-6">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="title-head mb-3">
                                        <h3 class="mb-5 card-title">Revenue By channel</h3>
                                        <div class="storage-percent">
                                            <div class="progress fileprogress h-auto ps-0 shadow1">
                                                <span class="progress-bar progress-bar-xs wd-15p received"
                                                    role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></span>
                                                <span class="progress-bar progress-bar-xs wd-15p download"
                                                    role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></span>
                                                <span class="progress-bar progress-bar-xs wd-15p shared"
                                                    role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></span>
                                                <span
                                                    class="progress-bar progress-bar-xs wd-15p my-images"
                                                    role="progressbar" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100"></span>
                                            </div>
                                            <div class="remaining-storage">
                                                <div class="text-muted fs-13 mb-1 mt-3">Total Revenue
                                                    Earned</div>
                                                <div class="fw-semibold fs-14 mb-1 mt-3">$345,3467.72
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-main mt-5">
                                        <ul class="task-list1 row mx-auto">
                                            <li class="col-xl-6">
                                                <span class="mb-0 fs-13 me-1"><i
                                                        class="task-icon1 bg-primary me-3"></i>Direct</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="mx-1"><i
                                                            class="fa fa-caret-up"></i></span>
                                                    <span class="">(42.34%)</span>
                                                </span>
                                            </li>
                                            <li class="col-xl-6">
                                                <span class="mb-0 fs-13 me-1"><i
                                                        class="task-icon1 bg-secondary"></i>Referral</span>
                                                <span class="text-danger fw-semibold fs-12">
                                                    <span class="mx-1"><i
                                                            class="fa fa-caret-down"></i></span>
                                                    <span class="">(13%)</span>
                                                </span>
                                            </li>
                                            <li class="col-xl-6">
                                                <span class="mb-0 fs-13 me-1"><i
                                                        class="task-icon1 bg-custom-yellow"></i>Social</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="mx-1"><i
                                                            class="fa fa-caret-up"></i></span>
                                                    <span class="">(62%)</span>
                                                </span>
                                            </li>
                                            <li class="col-xl-6 mb-xl-0">
                                                <span class="mb-0 fs-13 me-1"><i
                                                        class="task-icon1 bg-teritary"></i>Organic
                                                    Search</span>
                                                <span class="text-success fw-semibold fs-12">
                                                    <span class="mx-1"><i
                                                            class="fa fa-caret-up"></i></span>
                                                    <span class="">(22.46%)</span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title fw-semibold">Latest Transactions</h4>
                                    <a href="#" class="ms-auto">View All</a>
                                </div>
                                <div class="card-body p-0 customers mt-1">
                                    <div class="list-group py-1">
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item border-0">
                                                <div class="media mt-0 align-items-center">
                                                    <div class="transaction-icon"><i
                                                            class="fe fe-chevrons-right"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-0">
                                                                <h5
                                                                    class="mb-1 fs-13 fw-normal text-dark">
                                                                    To Bel Bcron Bank<span
                                                                        class="fs-13 fw-semibold ms-1">Savings
                                                                        Section</span></h5>
                                                                <p class="mb-0 fs-12 text-muted">Transfer
                                                                    4.53pm</p>
                                                            </div>
                                                            <span class="ms-auto fs-13">
                                                                <span
                                                                    class="float-end text-dark">-$2,543</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item border-0">
                                                <div class="media mt-0 align-items-center">
                                                    <div class="transaction-icon">
                                                        <i class="fe fe-briefcase"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-0">
                                                                <h5
                                                                    class="mb-1 fs-13 fw-normal text-dark">
                                                                    Payment For <span
                                                                        class="fs-13 fw-semibold ms-1">Day
                                                                        Job</span></h5>
                                                                <p class="mb-0 fs-12 text-muted">Received
                                                                    2.45pm</p>
                                                            </div>
                                                            <span class="ms-auto fs-13">
                                                                <span
                                                                    class="float-end text-dark">+$32,543</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item border-0">
                                                <div class="media mt-0 align-items-center">
                                                    <div class="transaction-icon"><i
                                                            class="fe fe-dollar-sign"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-0">
                                                                <h5
                                                                    class="mb-1 fs-13 fw-normal text-dark">
                                                                    Bought items from<span
                                                                        class="fs-13 fw-semibold ms-1">Ecommerce
                                                                        site</span></h5>
                                                                <p class="mb-0 fs-12 text-muted">Payment
                                                                    8.00am</p>
                                                            </div>
                                                            <span class="ms-auto fs-13">
                                                                <span
                                                                    class="float-end text-dark">-$256</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="border-0">
                                            <div class="list-group-item border-0">
                                                <div class="media mt-0 align-items-center">
                                                    <div class="transaction-icon"><i
                                                            class="fe fe-file-text"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="d-flex align-items-center">
                                                            <div class="mt-0">
                                                                <h5
                                                                    class="mb-1 fs-13 fw-normal text-dark">
                                                                    Paid Monthly Expenses<span
                                                                        class="fs-13 fw-semibold ms-1">Bills
                                                                        & Loans</span></h5>
                                                                <p class="mb-0 fs-12 text-muted">Payment
                                                                    6.43am</p>
                                                            </div>
                                                            <span class="ms-auto fs-13">
                                                                <span
                                                                    class="float-end text-dark">-$1,298</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-8">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Sales</h3>
                            <div class="ms-auto">
                                <div class="btn-group p-0 ms-auto">
                                    <button class="btn btn-primary-light btn-sm disabled"
                                        type="button">2021</button>
                                    <button class="btn btn-primary-light btn-sm"
                                        type="button">2022</button>
                                    <button class="btn btn-primary-light btn-sm disabled"
                                        type="button">2023</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="sales-stats d-flex">
                                <div>
                                    <div class="text-muted fs-13">Total Sales
                                        <span class="p-2 br-5 text-success"><i
                                                class="fe fe-arrow-up-right"></i></span>
                                    </div>
                                    <h3 class="fw-semibold">$582,857.97</h3>
                                    <div><span class="text-success fs-13 me-1">32%</span>Increase Since
                                        last Year</div>
                                </div>
                            </div>
                            <div id="chartD"></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ROW-2 END -->

            <!-- ROW-3 -->
            <!-- <div class="row">
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title fw-semibold">Daily Activity</h4>
                        </div>
                        <div class="card-body pb-0">
                            <ul class="task-list">
                                <li>
                                    <i class="task-icon bg-primary"></i>
                                    <p class="fw-semibold mb-1 fs-13">New Products Introduced<span
                                            class="text-muted fs-12 ms-2 ms-auto float-end">1:43 pm</span>
                                    </p>
                                    <p class="text-muted fs-12">Lorem ipsum dolor sit.<a href="#"
                                            class="fw-semibold ms-1">Product Light Launched</a></p>
                                </li>
                                <li>
                                    <i class="task-icon bg-secondary"></i>
                                    <p class="fw-semibold mb-1 fs-13">Hermoine Replied<span
                                            class="text-muted fs-12 ms-2 float-end">6:12 am</span></p>
                                    <p class="text-muted fs-12">Hermoine replied to your post on<a
                                            href="#" class="fw-semibold ms-1"> Detailed Blog</a>
                                    </p>
                                </li>
                                <li>
                                    <i class="task-icon bg-info"></i>
                                    <p class="fw-semibold mb-1 fs-13">New Request<span
                                            class="text-muted fs-12 ms-2 float-end">11:22 am</span></p>
                                    <p class="text-muted fs-12">Corner sent you a request<a
                                            href="#" class="fw-semibold ms-1"> Facebook</a></p>
                                </li>
                                <li>
                                    <i class="task-icon bg-warning"></i>
                                    <p class="fw-semibold mb-1 fs-13">Task Due<span
                                            class="text-muted fs-12 ms-2 float-end">4:32 pm</span></p>
                                    <p class="text-muted mb-0 fs-12">Task has to be completed <a
                                            href="#" class="fw-semibold ms-1"> New Project</a></p>
                                </li>
                                <li class="mb-2">
                                    <i class="task-icon bg-primary"></i>
                                    <p class="fw-semibold mb-1 fs-13">Maggice Liked<span
                                            class="text-muted fs-12 ms-2 float-end">5 mins ago</span></p>
                                    <p class="text-muted mb-0 fs-12">Maggice bruce liked your article <a
                                            href="#" class="fw-semibold ms-1"> Article on
                                            Projects</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-header border-bottom">
                            <div>
                                <h3 class="card-title">Timeline</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tl-container">
                                <div class="tl-blog primary">
                                    <div class="tl-img rounded-circle bg-primary-transparent">
                                        <i class="fe fe-user-plus text-primary text-17"></i>
                                    </div>
                                    <div class="tl-details d-flex">
                                        <p>
                                            <span class="tl-title-main"> Mr White </span> Started
                                            following you
                                            <span class="d-flex text-muted fs-12">10 Jan 2022</span>
                                        </p>
                                        <p class="ms-auto text-13">
                                            <span class="badge bg-primary text-white">1m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="tl-blog secondary">
                                    <div class="tl-img rounded-circle bg-secondary-transparent">
                                        <i class="fe fe-message-circle text-secondary text-17"></i>
                                    </div>
                                    <div class="tl-details d-flex">
                                        <p>
                                            <span class="tl-title-main"> Caroline </span> 1 Commented
                                            applied
                                            <span class="d-flex text-muted fs-12">09 Jan 2022</span>
                                        </p>
                                        <p class="ms-auto text-13">
                                            <span class="badge bg-secondary text-white">2m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="tl-blog teritary">
                                    <div class="tl-img rounded-circle bg-info-transparent">
                                        <i class="fe fe-clipboard text-info text-17"></i>
                                    </div>
                                    <div class="tl-details d-flex">
                                        <p>
                                            <span class="tl-title-main"> Juliette </span> posted a new
                                            article
                                            <span class="d-flex text-muted fs-12">07 Jan 2022</span>
                                        </p>
                                        <p class="ms-auto text-13">
                                            <span class="badge bg-info text-white">3m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="tl-blog custom-yellow">
                                    <div class="tl-img rounded-circle bg-warning-transparent">
                                        <i class="fe fe-thumbs-up text-warning text-17"></i>
                                    </div>
                                    <div class="tl-details d-flex">
                                        <p>
                                            <span class="tl-title-main"> Akimov </span> liked your site
                                            <span class="d-flex text-muted fs-12">07 Dec 2022</span>
                                        </p>
                                        <p class="ms-auto text-13">
                                            <span class="badge bg-warning text-white">4m</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="tl-blog primary">
                                    <div class="tl-img rounded-circle bg-primary-transparent">
                                        <i class="fe fe-book text-primary text-17"></i>
                                    </div>
                                    <div class="tl-details d-flex">
                                        <p class="mb-0">
                                            <span class="tl-title-main"> Emilie </span>sent you a feedback
                                            <span class="d-flex text-muted fs-12">06 Jan 2022</span>
                                        </p>
                                        <p class="ms-auto text-13 mb-0">
                                            <span class="badge bg-orange text-white">5m</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-header title-submenu border-bottom">
                            <h3 class="card-title">To-Do List</h3>
                        </div>
                        <div class="card-body">
                            <div class="todo-container">
                                <div class="todo-blog primary">
                                    <label class="todo-img">
                                        <input type="checkbox" class="todo-checkbox"
                                            name="todo-checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="todo-details d-flex">
                                        <p class="mb-0">Design a UI Dashboard for client
                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                        </p>
                                        <div class="ms-auto text-13 fw-semibold">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-light">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-blog secondary">
                                    <label class="todo-img">
                                        <input type="checkbox" class="todo-checkbox"
                                            name="todo-checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="todo-details d-flex">
                                        <p class="mb-0">Design a UI Dashboard for client
                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                        </p>
                                        <div class="ms-auto text-13 fw-semibold">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-light">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-blog teritary">
                                    <label class="todo-img">
                                        <input type="checkbox" class="todo-checkbox"
                                            name="todo-checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="todo-details d-flex">
                                        <p class="mb-0">Design a UI Dashboard for client
                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                        </p>
                                        <div class="ms-auto text-13 fw-semibold">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-light">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-blog custom-yellow">
                                    <label class="todo-img">
                                        <input type="checkbox" class="todo-checkbox"
                                            name="todo-checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="todo-details d-flex">
                                        <p class="mb-0">Design a UI Dashboard for client
                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                        </p>
                                        <div class="ms-auto text-13 fw-semibold">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-light">Edit</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="todo-blog primary">
                                    <label class="todo-img">
                                        <input type="checkbox" class="todo-checkbox"
                                            name="todo-checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <div class="todo-details d-flex">
                                        <p class="mb-0">Design a UI Dashboard for client
                                            <span class="d-flex text-muted fs-12">3 days remaining</span>
                                        </p>
                                        <div class="ms-auto text-13 fw-semibold">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline-light">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ROW-3 END -->

            <!-- ROW-4 -->
            <!-- <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card product-sales-main">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">List</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table text-nowrap mb-0 table-bordered">
                                    <thead class="table-head">
                                        <tr>
                                            <th class="bg-transparent border-bottom-0 wp-15">Assigned To
                                            </th>
                                            <th class="bg-transparent border-bottom-0">Task</th>
                                            <th class="bg-transparent border-bottom-0">Project</th>
                                            <th class="bg-transparent border-bottom-0">Due Date</th>
                                            <th class="bg-transparent border-bottom-0">Status</th>
                                            <th class="bg-transparent border-bottom-0 no-btn">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="data-image avatar avatar-md rounded-circle"
                                                        style="background-image: url(/developer/images/users/11.jpg)"></span>
                                                    <div class="user-details ms-2">
                                                        <h6 class="mb-0">Skyler Hilda</h6>
                                                        <span
                                                            class="text-muted fs-12">member@spruko.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                    class="text-dark" data-bs-target="#Vertically"
                                                    data-bs-toggle="modal">Sit sed takimata sanctus
                                                    invidunt</a></td>
                                            <td class="text-muted fs-13"><a href="project-details.html"
                                                    class="text-dark">Noa Dashboard UI</a></td>
                                            <td class="text-danger fs-14 fw-semibold">31 Oct 21</td>
                                            <td>
                                                <div class="form-group mb-0">
                                                    <ul>
                                                        <li class="select-status">
                                                            <select
                                                                class="form-control select2-status-search"
                                                                data-placeholder="Select Status">
                                                                <option value="IP" selected>In
                                                                    Progress</option>
                                                                <option value="OH">On Hold</option>
                                                                <option value="CP">Completed</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-stretch">
                                                    <a class="btn btn-sm btn-outline-primary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Mark As Completed">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24"
                                                            height="20" width="16"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z" />
                                                        </svg>
                                                    </a>
                                                    <a class="btn btn-sm btn-outline-secondary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24"
                                                            width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit-2 me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-info me-2"></i> Info</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="data-image avatar avatar-md rounded-circle"
                                                        style="background-image: url(/developer/images/users/12.jpg)"></span>
                                                    <div class="user-details ms-2">
                                                        <h6 class="mb-0">Daniel Obrien</h6>
                                                        <span
                                                            class="text-muted fs-12">member@spruko.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                    class="text-dark" data-bs-target="#Vertically"
                                                    data-bs-toggle="modal">Diam lorem dolor no lorem.</a>
                                            </td>
                                            <td class="text-muted fs-13"><a href="project-details.html"
                                                    class="text-dark">Noa Dashboard UI</a></td>
                                            <td class="text-danger fs-14 fw-semibold">01 Nov 21</td>
                                            <td>
                                                <div class="form-group mb-0">
                                                    <ul>
                                                        <li class="select-status">
                                                            <select
                                                                class="form-control select2-status-search"
                                                                data-placeholder="Select Status">
                                                                <option value="IP">In Progress
                                                                </option>
                                                                <option value="OH" selected>On Hold
                                                                </option>
                                                                <option value="CP">Completed</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-stretch">
                                                    <a class="btn btn-sm btn-outline-primary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Mark As Completed">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24"
                                                            height="20" width="16"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z" />
                                                        </svg>
                                                    </a>
                                                    <a class="btn btn-sm btn-outline-secondary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24"
                                                            width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit-2 me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-info me-2"></i> Info</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="data-image avatar avatar-md rounded-circle"
                                                        style="background-image: url(/developer/images/users/13.jpg)"></span>
                                                    <div class="user-details ms-2">
                                                        <h6 class="mb-0">William Turner</h6>
                                                        <span
                                                            class="text-muted fs-12">member@spruko.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                    class="text-dark" data-bs-target="#Vertically"
                                                    data-bs-toggle="modal">Amet clita sea ut dolor
                                                    consetetur, elitr.</a></td>
                                            <td class="text-muted fs-13"><a href="project-details.html"
                                                    class="text-dark">Noa Dashboard UI</a></td>
                                            <td class="text-danger fs-14 fw-semibold">08 Nov 21</td>
                                            <td>
                                                <div class="form-group mb-0">
                                                    <ul>
                                                        <li class="select-status">
                                                            <select
                                                                class="form-control select2-status-search"
                                                                data-placeholder="Select Status">
                                                                <option value="IP">In Progress
                                                                </option>
                                                                <option value="OH" selected>On Hold
                                                                </option>
                                                                <option value="CP">Completed</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-stretch">
                                                    <a class="btn btn-sm btn-outline-primary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Mark As Completed">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24"
                                                            height="20" width="16"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z" />
                                                        </svg>
                                                    </a>
                                                    <a class="btn btn-sm btn-outline-secondary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24"
                                                            width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit-2 me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-info me-2"></i> Info</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="data-image avatar avatar-md rounded-circle"
                                                        style="background-image: url(/developer/images/users/4.jpg)"></span>
                                                    <div class="user-details ms-2">
                                                        <h6 class="mb-0">Olena Tyrell</h6>
                                                        <span
                                                            class="text-muted fs-12">member@spruko.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                    class="text-dark" data-bs-target="#Vertically"
                                                    data-bs-toggle="modal">Est sea erat at kasd.</a></td>
                                            <td class="text-muted fs-13"><a href="project-details.html"
                                                    class="text-dark">Noa Dashboard UI</a></td>
                                            <td class="text-danger fs-14 fw-semibold">04 Nov 21</td>
                                            <td>
                                                <div class="form-group mb-0">
                                                    <ul>
                                                        <li class="select-status">
                                                            <select
                                                                class="form-control select2-status-search"
                                                                data-placeholder="Select Status">
                                                                <option value="IP" selected>In
                                                                    Progress</option>
                                                                <option value="OH">On Hold</option>
                                                                <option value="CP">Completed</option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-stretch">
                                                    <a class="btn btn-sm btn-outline-primary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Mark As Completed">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24"
                                                            height="20" width="16"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z" />
                                                        </svg>
                                                    </a>
                                                    <a class="btn btn-sm btn-outline-secondary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24"
                                                            width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit-2 me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-info me-2"></i> Info</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span
                                                        class="data-image avatar avatar-md rounded-circle"
                                                        style="background-image: url(/developer/images/users/5.jpg)"></span>
                                                    <div class="user-details ms-2">
                                                        <h6 class="mb-0">Emilie Benett</h6>
                                                        <span
                                                            class="text-muted fs-12">member@spruko.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-muted fs-14 fw-semibold"><a href="#"
                                                    class="text-dark" data-bs-target="#Vertically"
                                                    data-bs-toggle="modal">Rebum gubergren at kasd
                                                    takimata clita.</a></td>
                                            <td class="text-muted fs-13"><a href="project-details.html"
                                                    class="text-dark">Noa Dashboard UI</a></td>
                                            <td class="text-danger fs-14 fw-semibold">29 Oct 21</td>
                                            <td>
                                                <div class="form-group mb-0">
                                                    <ul>
                                                        <li class="select-status">
                                                            <select
                                                                class="form-control select2-status-search"
                                                                data-placeholder="Select Status">
                                                                <option value="IP">In Progress
                                                                </option>
                                                                <option value="OH">On Hold</option>
                                                                <option value="CP" selected>Completed
                                                                </option>
                                                            </select>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-stretch">
                                                    <a class="btn btn-sm btn-outline-primary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Mark As Completed">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            enable-background="new 0 0 24 24"
                                                            height="20" width="16"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M15.8085327,8.6464844l-5.6464233,5.6464844l-2.4707031-2.4697266c-0.0023804-0.0023804-0.0047607-0.0047607-0.0072021-0.0071411c-0.1972046-0.1932373-0.5137329-0.1900635-0.7069702,0.0071411c-0.1932983,0.1972656-0.1900635,0.5137939,0.0071411,0.7070312l2.8242188,2.8232422C9.9022217,15.4474487,10.02948,15.5001831,10.1621094,15.5c0.1326294,0.0001221,0.2598267-0.0525513,0.3534546-0.1464844l6-6c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1972046,0.1900635-0.5137329-0.0071411-0.7069702C16.3183594,8.446106,16.0018311,8.4493408,15.8085327,8.6464844z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z" />
                                                        </svg>
                                                    </a>
                                                    <a class="btn btn-sm btn-outline-secondary border me-2"
                                                        data-bs-toggle="tooltip"
                                                        data-bs-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            height="20" viewBox="0 0 24 24"
                                                            width="16">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z" />
                                                        </svg>
                                                    </a>
                                                    <a href="#"
                                                        class="border br-5 px-2 py-1 d-flex align-items-center justify-content-center"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i
                                                            class="fe fe-more-vertical"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-start">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-edit-2 me-2"></i> Edit</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="fe fe-info me-2"></i> Info</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ROW-4 END -->


        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection

@push('scripts')
<script>
   /* document.addEventListener('DOMContentLoaded', function() {

        Echo.private('chat.1').listen('MessageSent', (e) => {
            console.log('Message Receiver:', e.message);
            if ($('#ReceiverId').val()) {
                getMessage($('#ReceiverId').val());
            }
        });

        Echo.private('chat.2').listen('MessageSent', (e) => {
            console.log('Message Receiver:', e.message);
            if ($('#ReceiverId').val()) {
                getMessage($('#ReceiverId').val());
            }
        });

        Echo.private('chat.3').listen('MessageSent', (e) => {
            console.log('Message Receiver:', e.message);
            if ($('#ReceiverId').val()) {
                getMessage($('#ReceiverId').val());
            }
        });

    }); */
</script>
@endpush
