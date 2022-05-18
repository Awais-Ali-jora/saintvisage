@extends('admin.layouts.app')
@section('pagelevel_styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@endsection
@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Location
                    <small>Location edit</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('location.update',$location->id)}}" class="form-horizontal" method="post">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title" value="{{$location->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Country *</label>
                            <div class="col-md-4">
                               <select class="form-control" name="contry_id" id="contry">
                                   <option disabled="" selected="">Select Country</option>
                                    @foreach($countries as $contry)
                                        <option value="{{$contry->id}}" {{$location->country_id==$contry->id? 'selected':''}}>{{$contry->name}}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">City *</label>
                            <div class="col-md-4">
                               <select class="form-control" name="city_id" id="city">
                                   <option disabled="" selected="">Select City</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}" {{$location->city_id==$city->id? 'selected':''}}>{{$city->name}}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Address *</label>
                            <div class="col-md-4">
                               <textarea class="form-control"  name="address">{{$location->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Phone *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="phone" value="{{$location->phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="email" value="{{$location->email}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Longitude*</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="longitude"value="{{$location->longitude}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Latitude*</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="latitude" value="{{$location->latitude}}">
                            </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-4">
                                <button type="submit" class="btn green">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('pagelevel_scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contry').select2({
                minimumInputLength: 3
            });
            $('#city').select2({
                minimumInputLength: 3
            });
        });
        @if(session()->has('success'))
        toastr.success('{{ session()->get('success') }}');
    @endif
    @if($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error('{{$error}}')
        @endforeach
    @endif
    </script>
@endsection