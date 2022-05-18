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
                <h1>Post
                    <small>Category post</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('post.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-body">
                    
                        <div class="form-group">
                            <label class="col-md-3 control-label">Title *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Category *</label>
                            <div class="col-md-4">
                               <select class="form-control" name="cat_id">
                                   <option disabled="" selected="">Select Category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                                    @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Description *</label>
                            <div class="col-md-4">
                               <textarea class="form-control" id="description"  name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">image *</label>
                            <div class="col-md-4">
                               <input type="file" class="form-control" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Thumbnail *</label>
                            <div class="col-md-4">
                               <input type="file" class="form-control" name="thumbnail_image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Title *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="banner_title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Image *</label>
                            <div class="col-md-4">
                               <input type="file" class="form-control" name="banner_image">
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
		CKEDITOR.replace( 'description');
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