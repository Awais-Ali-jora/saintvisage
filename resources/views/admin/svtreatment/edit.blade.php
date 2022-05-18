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
                <h1>Clinic types
                    <small>Clinic</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('svtreatment.update',$sv->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title" value="{{$sv->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Description *</label>
                            <div class="col-md-4">
                               <textarea class="form-control"  name="description">{{$sv->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">image *</label>
                            <div class="col-md-4">
                                <img src="{{Storage::disk('public')->url($sv->image)}}" height="100">
                               <input type="file" class="form-control" name="image">
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