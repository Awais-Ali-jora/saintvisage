@extends('admin.layouts.app')
@section('pagelevel_styles')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
@endsection
@section('page_content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>About-us
                    <small>About us</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('About.update',$about->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('put');
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Who are we *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" class="form-control" name="who" required="">{{$about->who}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mission? *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" class="form-control" name="mission" required="">{{$about->mission}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Vision *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" class="form-control" name="vision" required="">{{$about->vission}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Countries *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="country" required="" value="{{$about->country}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Employees *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" value="{{$about->employee}}" name="employee" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Smiles Transformend *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" value="{{$about->smile}}" name="smile" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Faces Rejuvenated *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" value="{{$about->faces}}" name="face" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">About Description *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" name="about" required="">{{$about->about}}</textarea>
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
	CKEDITOR.replace( 'who' );
    CKEDITOR.replace( 'mission' );
    CKEDITOR.replace( 'vision' );
    CKEDITOR.replace( 'about' );
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