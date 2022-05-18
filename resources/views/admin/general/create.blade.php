@extends('admin.layouts.app')
@section('pagelevel_styles')

@endsection
@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>General Page
                    <small>General</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('general.edit')}}" class="form-horizontal" method="post">
                    @csrf
                    <div class="form-body">
                    <h4>Emails section & Social media</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">GENERAL ENQUIRIES *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">MARKETING & PUBLIC RELATION *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">BUSINESS & OPEN DAYS *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">ADMINISTRATIVE DEVELOPMENT *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Facebook *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tweeter *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Instagram *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tiktok *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Whatsapp *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-4">
                                <button type="submit" class="btn green">Submit</button>
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