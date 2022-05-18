@extends('admin.layouts.app')
@section('pagelevel_styles')
<link href="{{asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Locations
                    <small>View Locations</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th width="20%"> SR#. </th>
                            <th class="numeric"> Title </th>
                            <th class="numeric"> Country </th>
                            <th class="numeric"> City </th>
                            <th class="numeric">Address</th>
                            <th class="numeric"> Phone </th>
                            <th class="numeric"> Email </th>
                            <th class="numeric"> Longitude </th>
                            <th class="numeric"> Latitude </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $location)
                        <tr>
                            <td> {{++$loop->index}}</td>
                            
                            <td class="numeric">{{$location->title}}</td>
                            {{-- @dd($location->city->country->name) --}}
                            <td class="numeric">{{$location->city->country->name}}</td>
                            <td class="numeric">{{$location->city->name}}</td>
                            <td class="numeric">{{$location->address}}</td>
                            <td class="numeric">{{$location->phone}}</td>
                            <td class="numeric">{{$location->email}}</td>
                            <td class="numeric">{{$location->longitude}}</td>
                            <td class="numeric">{{$location->latitude}}</td>
                            <td>
                                <a href="{{route('location.edit',$location->id)}}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('pagelevel_scripts')
    <script>
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