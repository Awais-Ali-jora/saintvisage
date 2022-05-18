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
                <h1>Banner
                    <small>View BAnners</small>
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
                            <th class="numeric"> Image </th>
                            <th class="numeric"> Bio </th>
                            <th class="numeric"> Scope </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                        <tr>
                            <td> {{++$loop->index}}</td>
                            <td class="numeric"><img src="{{Storage::disk('public')->url($banner->image)}}" height="100"></td>
                            <td class="numeric">{{$banner->bio?? 'N/A'}}</td>
                            <td>
                                @if($banner->is_home==1)
                                    Home Page
                                @elseif($banner->is_about==1)
                                    About-us page
                                @elseif($banner->is_work==1)
                                    Work-with-us page
                                @elseif($banner->is_contact==1)
                                    Contact-us
                                @else
                                    Treatment Page
                                @endif
                            </td>
                            <td>
                                <a href="{{route('banner.edit',$banner->id)}}"><i class="fa fa-edit"></i></a>
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