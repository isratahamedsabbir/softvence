@extends('backend.app')
@push('styles')
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>
@endpush
@section('content')
<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            {{-- PAGE-HEADER --}}
            <div class="page-header">
                <div>
                    <h1 class="page-title">Google Map Settings</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Google Map</li>
                    </ol>
                </div>
            </div>
            {{-- PAGE-HEADER --}}


            <div class="row">
                <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                    <div class="card box-shadow-0">
                        <div class="card-body">
                            <form method="post" action="{{ route('admin.setting.google.map.update') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-4">
                                    <label for="google_maps_api_key" class="col-md-3 form-label">Google Map API Key</label>
                                    <div class="col-md-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="btn" title="Carefully Change Your API Key">
                                                    <i class="fa-solid fa-triangle-exclamation text-danger"></i>
                                                </span>
                                            </div>
                                            <input class="form-control @error('google_maps_api_key') is-invalid @enderror" id="google_maps_api_key"
                                                name="google_maps_api_key" placeholder="Enter your google map api key" type="text"
                                                value="{{ env('GOOGLE_MAPS_API_KEY') ?? old('google_maps_api_key') ?? '' }}">
                                        </div>
                                        @error('google_maps_api_key')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-sm-9">
                                        <div>
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="card box-shadow-0">
                        <div class="card-body">
                            <div id="map"></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap" async defer></script>
<script>
    function initMap() {
        var location = {
            lat: 23.8103,
            lng: 90.4125
        }; // New York Coordinates

        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: location,
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: "New York City"
        });

        var infoWindow = new google.maps.InfoWindow({
            content: `<div>
                            <h3>New York City</h3>
                            <p><strong>Latitude:</strong> 40.7128</p>
                            <p><strong>Longitude:</strong> -74.0060</p>
                            <p><strong>Population:</strong> 8.4 million</p>
                            <p><strong>Description:</strong> The largest city in the USA.</p>
                          </div>`
        });

        marker.addListener("click", function() {
            infoWindow.open(map, marker);
        });
    }
</script>
@endpush