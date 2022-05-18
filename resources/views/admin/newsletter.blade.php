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
                <h1>Newsletter Page
                    <small>Newsletter</small>
                </h1>

            </div>
            <!-- END PAGE TITLE -->
            <span><a href="{{route('print.newsnetter')}}" class="btn btn-primary" style="float: right;" target="_blank">Print</a></span>
            <span><a href="{{route('email.newsnetter')}}" class="btn btn-primary" style="float: right;margin-right: 1px;" target="_blank">Email</a></span> 
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th>Email</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($newsletters as $message)
                        <tr>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->country }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$newsletters->links()}}
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
