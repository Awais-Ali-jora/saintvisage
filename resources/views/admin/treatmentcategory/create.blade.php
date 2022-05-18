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
                <h1>Create Treatment Category
                    <small>Add treatment category</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('treatment.cat.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Category Title *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="cattitle">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Image *</label>
                            <div class="col-md-4">
                               <span class="btn green fileinput-button">
                                    <input type="file" name="image"> </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Title *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="bantitle">
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