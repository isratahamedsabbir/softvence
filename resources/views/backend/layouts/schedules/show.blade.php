@extends('backend.app', ['title' => 'Schedule'])

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
                                    <h3 class="card-title mb-0">Schedules</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Day</th>
                                            <td>{{ $schedule->date_full }}</td>
                                        </tr>
                                        <tr>
                                            <th>Start Time</th>
                                            <td>{{ $schedule->start_time }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Time</th>
                                            <td>{{ $schedule->end_time }}</td>
                                        </tr>
                                        <tr>
                                            <th>Location</th>
                                            <td>{{ $schedule->location }}</td>
                                        </tr>
                                        <tr>
                                            <th>Latitude</th>
                                            <td>{{ $schedule->latitude }}</td>
                                        </tr>
                                        <tr>
                                            <th>Longitude</th>
                                            <td>{{ $schedule->longitude }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $schedule->created_at->format('M d, Y h:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $schedule->status }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Schedule Google Map</h3>
                                </div>
                                <div class="card-body">
                                    <iframe 
                                        src="https://www.google.com/maps/embed/v1/place?key={{ env('GOOGLE_MAPS_API_KEY') }}&q={{ $schedule->latitude }},{{ $schedule->longitude }}" 
                                        width="100%" 
                                        height="100%" 
                                        frameborder="0" 
                                        style="border:0;" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>  
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
                                    <h3 class="card-title mb-0">Service</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $schedule->service->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Cherge</th>
                                            <td>{{ $schedule->service->charge }}</td>
                                        </tr>
                                        <tr>
                                            <th>Retailer</th>
                                            <td>{{ $schedule->service->user->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Location</th>
                                            <td>{{ $schedule->service->location }}</td>
                                        </tr>
                                        <tr>
                                            <th>Latitude</th>
                                            <td>{{ $schedule->service->latitude }}</td>
                                        </tr>
                                        <tr>
                                            <th>Longitude</th>
                                            <td>{{ $schedule->service->longitude }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Service Google Map</h3>
                                </div>
                                <div class="card-body">
                                    <iframe 
                                        src="https://www.google.com/maps/embed/v1/place?key={{ env('GOOGLE_MAPS_API_KEY') }}&q={{ $schedule->service->latitude }},{{ $schedule->service->longitude }}" 
                                        width="100%" 
                                        height="100%" 
                                        frameborder="0" 
                                        style="border:0;" 
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>  
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
                                    <h3 class="card-title mb-0">Booking</h3>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Status</th>
                                            <td>{{ $schedule->booking->status }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $schedule->booking->created_at->format('M d, Y h:i A') }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Re-Schedule</h3>
                                </div>
                                <div class="card-body">
                                    @foreach($schedule->reschedules as $reschedule)
                                    <table class="table table-bordered table-striped">
                                        <tr>
                                            <th>Type</th>
                                            <td>{{ $reschedule->type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Day</th>
                                            <td>{{ $reschedule->date_full }}</td>
                                        </tr>
                                        <tr>
                                            <th>Start Time</th>
                                            <td>{{ $reschedule->start_time }}</td>
                                        </tr>
                                        <tr>
                                            <th>End Time</th>
                                            <td>{{ $reschedule->end_time }}</td>
                                        </tr>
                                        <tr>
                                            <th>Created At</th>
                                            <td>{{ $reschedule->created_at->format('M d, Y h:i A') }}</td>
                                        </tr>
                                    </table>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Payments</h3>
                                </div>
                                <div class="card-body">
                                    @foreach ($schedule->booking->payments as $payment)
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>Trx ID</th>
                                                <td>{{ $payment->trx_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>{{ $payment->type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Amount</th>
                                                <td>{{ $payment->amount }}</td>
                                            </tr>
                                            <tr>
                                                <th>Reason</th>
                                                <td>{{ $payment->reason }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ $payment->status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Created At</th>
                                                <td>{{ $payment->created_at->format('M d, Y h:i A') }}</td>
                                            </tr>
                                        </table>
                                    @endforeach
                                </div>
                            </div>

                            <div class="card product-sales-main">
                                <div class="card-header border-bottom">
                                    <h3 class="card-title mb-0">Transactions</h3>
                                </div>
                                <div class="card-body">
                                    @foreach ($transactions as $transaction)
                                        <table class="table table-bordered table-striped">
                                            <tr>
                                                <th>Trx ID</th>
                                                <td>{{ $transaction->trx_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Type</th>
                                                <td>{{ $transaction->type }}</td>
                                            </tr>
                                            <tr>
                                                <th>Title</th>
                                                <td>{{ $transaction->title }}</td>
                                            </tr>
                                            <tr>
                                                <th>Description</th>
                                                <td>{{ $transaction->description }}</td>
                                            </tr>
                                            <tr>
                                                <th>Amount</th>
                                                <td>{{ $transaction->amount }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ $transaction->status }}</td>
                                            </tr>
                                            <tr>
                                                <th>Created At</th>
                                                <td>{{ $transaction->created_at->format('M d, Y h:i A') }}</td>
                                            </tr>
                                        </table>
                                    @endforeach
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