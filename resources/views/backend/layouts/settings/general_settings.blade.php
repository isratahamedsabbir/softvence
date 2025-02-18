@extends('backend.app', ['title' => 'General Settings'])

@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            {{-- PAGE-HEADER --}}
            <div class="page-header">
                <div>
                    <h1 class="page-title">General Settings</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">General Settings</li>
                    </ol>
                </div>
            </div>
            {{-- PAGE-HEADER --}}


            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card box-shadow-0">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{ route('admin.setting.general.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row mb-4">

                                    <div class="form-group">
                                        <label for="username" class="form-label">Name:</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" placeholder="Name" id="username"
                                            value="{{ $setting->name ?? old('name') ?? '' }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="title" class="form-label">Title:</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            name="title" placeholder="Title" id="title"
                                            value="{{ $setting->title ?? old('title') ?? '' }}">
                                        @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="description" class="form-label">Description:</label>
                                        <textarea class="description form-control @error('description') is-invalid @enderror"
                                            name="description" placeholder="Description" id="description">{{ $setting->description ?? old('description') ?? '' }}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="keywords" class="form-label">Keywords:</label>
                                        <textarea class="description form-control @error('keywords') is-invalid @enderror"
                                            name="keywords" placeholder="Keywords" id="keywords">{{ $setting->keywords ?? old('keywords') ?? '' }}</textarea>
                                        @error('keywords')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="author" class="form-label">Author:</label>
                                        <input type="text" class="form-control @error('author') is-invalid @enderror"
                                            name="author" placeholder="Author" id="author"
                                            value="{{ $setting->author ?? old('author') ?? '' }}">
                                        @error('author')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="form-label">Phone:</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" placeholder="Phone" id="phone"
                                            value="{{ $setting->phone ?? old('phone') ?? '' }}">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" placeholder="Email" id="email"
                                            value="{{ $setting->email ?? old('email') ?? '' }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address" class="form-label">Address:</label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" placeholder="Address" id="address"
                                            value="{{ $setting->address ?? old('address') ?? '' }}">
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="copyright" class="form-label">Copyright:</label>
                                        <input type="text" class="form-control @error('copyright') is-invalid @enderror"
                                            name="copyright" placeholder="Copyright" id="copyright"
                                            value="{{ $setting->copyright ?? old('copyright') ?? '' }}">
                                        @error('copyright')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="logo" class="form-label">Logo:</label>
                                                <input type="file" class="dropify form-control @error('logo') is-invalid @enderror"
                                                    data-default-file="{{ !empty($setting->logo) && file_exists(public_path($setting->logo)) ? asset($setting->logo) : asset('default/logo.png') }}"
                                                    name="logo" id="logo">
                                                @error('logo')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="favicon" class="form-label">Favicon:</label>
                                                <input type="file" class="dropify form-control @error('favicon') is-invalid @enderror"
                                                    data-default-file="{{ !empty($setting->favicon) && file_exists(public_path($setting->favicon)) ? asset($setting->favicon) : asset('default/logo.png') }}"
                                                    name="favicon" id="favicon">
                                                @error('favicon')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection



@push('scripts')
@endpush