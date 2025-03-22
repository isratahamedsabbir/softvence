@extends('backend.app', ['title' => 'Project'])

@push('styles')

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
                    <h1 class="page-title">Project</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card product-sales-main">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Description</h3>
                        </div>
                        <div class="card-body" style="overflow-x: auto;">
                            {!! $project->description ?? '' !!}
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card product-sales-main">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Credintials</h3>
                        </div>
                        <div class="card-body" style="overflow-x: auto;">
                            {!! $project->credintials ?? '' !!}
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card product-sales-main">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Features</h3>
                        </div>
                        <div class="card-body" style="overflow-x: auto;">
                            {!! $project->features ?? '' !!}
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card product-sales-main">
                        <div class="card-header border-bottom">
                            <h3 class="card-title mb-0">Note</h3>
                        </div>
                        <div class="card-body" style="overflow-x: auto;">
                            {!! $project->note ?? '' !!}
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Project</h3>
                                </div>
                                <div class="card-body" style="overflow-x: auto;">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <td colspan="2" class="text-center"><img src="{{ asset($project->image) }}" alt="" width="100"></td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $project->name ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Type</th>
                                            <td>{{ $project->type ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Live Url</th>
                                            <td><a href="{{ $project->url }}" target="_blank">{{ $project->url ?? '' }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Github</th>
                                            <td><a href="{{ $project->github }}" target="_blank">{{ $project->github ?? '' }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Start Date</th>
                                            <td>{{ $project->start_date ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Date</th>
                                            <td>{{ $project->end_date ?? '' }}</td>
                                        </tr>
                                        <tr>
                                            <th>file</th>
                                            <td><a href="{{ asset($project->file) }}" target="_blank">Download</a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Metadata</h3>
                                </div>
                                <div class="card-body" style="overflow-x: auto;">
                                    <table class="table table-bordered table-striped metadata-table">
                                        @foreach (json_decode($project->metadata, true) as $key => $value)
                                        <tr>
                                            <th>{{ $key }}</th>
                                            <td>{{ $value }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- COL END -->
            </div>

        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection



@push('scripts')

@endpush