@extends('developer.app', ['title' => 'Home Demo'])

@push('styles')
<link href="{{ asset('default/datatable.css') }}" rel="stylesheet" />
@endpush


@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">


            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">CMS : Home Demo</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active" aria-current="page">Demo</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-4 -->
            <div class="row">


                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('developer.cms.demo.content') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title" class="form-label">Title:</label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Enter here title" id="title" value="{{ $section->title ?? '' }}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description" class="form-label">Description:</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Enter here description" rows="3">{{ $section->description ?? '' }}</textarea>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="btn_text" class="form-label">Button Text:</label>
                                            <input type="text" class="form-control @error('btn_text') is-invalid @enderror" name="btn_text" placeholder="Enter here button text" id="btn_text" value="{{ $section->btn_text ?? '' }}">
                                            @error('btn_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="btn_link" class="form-label">Button Link:</label>
                                            <input type="text" class="form-control @error('btn_link') is-invalid @enderror" name="btn_link" placeholder="Enter here link" id="btn_link" value="{{ $section->btn_link ?? '' }}">
                                            @error('btn_link')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="image" class="form-label">Side Image:</label>
                                            <input type="file" class="dropify @error('image') is-invalid @enderror" name="image"
                                                id="image"
                                                data-default-file="{{ isset($section->image) ? asset($section->image) : '' }}">
                                            @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between border-bottom">
                            <h3 class="card-title">All Home Demo Items</h3>
                            <!-- Add New Page Button -->
                            <a href="{{route('developer.cms.demo.create')}}" class="btn btn-primary">
                                <i class="bx bx-plus me-sm-1 "></i> Add New
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <table class="table table-bordered text-nowrap border-bottom" id="datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">#</th>
                                            <th class="wd-15p border-bottom-0">Title</th>
                                            <th class="wd-15p border-bottom-0">Image</th>
                                            <th class="wd-20p border-bottom-0">Status</th>
                                            <th class="wd-15p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- dynamic data --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ROW-4 END -->

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection



@push('scripts')
<script>
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        if (!$.fn.DataTable.isDataTable('#datatable')) {
            let dTable = $('#datatable').DataTable({
                order: [],
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                processing: true,
                responsive: true,
                serverSide: true,

                language: {
                    processing: `<div class="text-center">
                        <img src="{{ asset('default/loader.gif') }}" alt="Loader" style="width: 50px;">
                        </div>`
                },

                scroller: {
                    loadingIndicator: false
                },
                pagingType: "full_numbers",
                dom: "<'row justify-content-between table-topbar'<'col-md-4 col-sm-3'l><'col-md-5 col-sm-5 px-0'f>>tipr",
                ajax: {
                    url: "{{ route('developer.cms.demo.index') }}",
                    type: "GET",
                },

                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'title',
                        name: 'title',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'image',
                        name: 'image',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'status',
                        name: 'status',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

            dTable.buttons().container().appendTo('#file_exports');
            new DataTable('#example', {
                responsive: true
            });
        }
    });

    // Status Change Confirm Alert
    function showStatusChangeAlert(id) {
        event.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to update the status?',
            icon: 'info',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
        }).then((result) => {
            if (result.isConfirmed) {
                statusChange(id);
            }
        });
    }

    // Status Change
    function statusChange(id) {
        let url = "{{ route('developer.cms.demo.status', ':id') }}";
        $.ajax({
            type: "GET",
            url: url.replace(':id', id),
            success: function(resp) {
                console.log(resp);
                // Reloade DataTable
                $('#datatable').DataTable().ajax.reload();
                if (resp.success === true) {
                    // show toast message
                    toastr.success(resp.message);
                } else if (resp.errors) {
                    toastr.error(resp.errors[0]);
                } else {
                    toastr.error(resp.message);
                }
            },
            error: function(error) {
                // location.reload();
            }
        });
    }

    // delete Confirm
    function showDeleteConfirm(id) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure you want to delete this record?',
            text: 'If you delete this, it will be gone forever.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
        }).then((result) => {
            if (result.isConfirmed) {
                deleteItem(id);
            }
        });
    }

    // Delete Button
    function deleteItem(id) {
        let url = "{{ route('developer.cms.demo.destroy', ':id') }}";
        let csrfToken = '{{ csrf_token() }}';
        $.ajax({
            type: "DELETE",
            url: url.replace(':id', id),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(resp) {
                $('#datatable').DataTable().ajax.reload();
                if (resp['t-success']) {
                    toastr.success(resp.message);
                } else {
                    toastr.error(resp.message);
                }
            },
            error: function(error) {
                toastr.error('An error occurred. Please try again.');
            }
        });
    }

    function editItem(id) {
        event.preventDefault();
        let url = "{{ route('developer.cms.demo.edit', ':id') }}";
        window.location.href = url.replace(':id', id);
    }

    function goToShow(id) {
        event.preventDefault();
        let url = "{{ route('developer.cms.demo.show', ':id') }}";
        window.location.href = url.replace(':id', id);
    }
</script>
@endpush