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
                <form action="{{route('general.update',$general->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-body">
                    <h4>Emails section & Social media</h4>
                        <div class="form-group">
                            <label class="col-md-3 control-label">GENERAL ENQUIRIES *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="ginquire" value="{{$general->ginquire }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">MARKETING & PUBLIC RELATION *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="mpublic" value="{{$general->mpublic }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">BUSINESS & OPEN DAYS *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="bopen" value="{{$general->bopen }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">ADMINISTRATIVE DEVELOPMENT *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="adepartment" value="{{$general->adepartment }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Facebook *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="fb" value="{{$general->fb }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tweeter *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="tweeter" value="{{$general->tweeter }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Instagram *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="insta" value="{{$general->insta }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tiktok *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="ticktok" value="{{$general->tiktok }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Whatsapp *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="whatsapp" value="{{$general->whatsapp }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Network Titile *</label>
                            <div class="col-md-4">
                                <textarea class="form-control" name="network_title">{{$general->network_title }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Network Image *</label>
                            <div class="col-md-4">
                               <img src="{{Storage::disk('public')->url($general->network_image)}}" height="100">
                               <input type="file" name="network_image" class="form-control">
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