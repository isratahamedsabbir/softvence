@extends('backend.app', ['title' => 'CMS : Auth'])

@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            {{-- PAGE-HEADER --}}
            <div class="page-header">
                <div>
                    <h1 class="page-title">CMS : Auth</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">CMS</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Auth</a></li>
                        <li class="breadcrumb-item active" aria-current="page">BG</li>
                    </ol>
                </div>
            </div>
            {{-- PAGE-HEADER --}}


            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card box-shadow-0">
                        <div class="card-body">
                            <form class="form-horizontal" method="post" action="{{ route('cms.page.auth.section.bg.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="row mb-4">

                                    <div class="form-group">
                                        <label for="image" class="form-label">Image:</label>
                                        <input type="file" class="dropify form-control @error('image') is-invalid @enderror"
                                            data-default-file="{{ isset($data) && $data->image != null ? asset($data->image) : asset('default/logo.png') }}"
                                            name="image" id="image">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
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