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
                <h1>About-us
                    <small>About us</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('About.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Who are we *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" class="form-control" name="who"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mission? *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" class="form-control" name="mission"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Vision *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" class="form-control" name="vision"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Countries *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="country">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Employees *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="employee">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Smiles Transformend *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="smile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Faces Rejuvenated *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="face">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">About Description *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" name="about"></textarea>
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