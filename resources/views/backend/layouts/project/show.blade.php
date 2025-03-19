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
                    <h1 class="page-title">Schedule</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Schedule</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

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
                                            <th>Name</th>
                                            <td>{{ $project->name }}</td>
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