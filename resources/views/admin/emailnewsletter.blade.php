@extends('admin.layouts.app')
@section('pagelevel_styles')
<link href="{{asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" type="text/css">
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

@endsection
@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Email Newsletter Page
                    <small>Email Newsletter</small>
                </h1>

            </div>
            <!-- END PAGE TITLE -->
            <span><a href="{{route('print.newsnetter')}}" class="btn btn-primary" style="float: right;" target="_blank">Print</a></span>
            <span><a href="{{route('email.newsnetter')}}" class="btn btn-primary" style="float: right;margin-right: 1px;" target="_blank">Email</a></span> 
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <form action="{{route('email.sent')}}" class="form-horizontal" method="post">
                    @csrf
                    <div class="form-body">
                    <h4>Make Email templete</h4>    
                        <div class="form-group">
                            {{-- <label class="col-md-3 control-label">Description *</label> --}}
                            <div class="col-md-12">
                               <textarea class="form-control"  name="description" id="desc"></textarea>
                            </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-4">
                                <button type="submit" class="btn green">Sent</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
@endsection
@section('pagelevel_scripts')
    <script>
        CKEDITOR.replace( 'desc' );
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
