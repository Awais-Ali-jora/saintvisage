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
                <h1>Edit Banner
                    <small>edit banner</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            @if(session()->has('success'))
                    <div class="alert alert-success " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> {{session()->get('success')}}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{session()->get('error')}}
                    </div>
                @endif
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong>Oh snap!</strong> {{$error}}
                    </div>
                    @endforeach
                @endif
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('banner.update',$banner->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Image *</label>
                            <div class="col-md-4">
                                <img src="{{Storage::disk('public')->url($banner->image)}}" height="150">
                               <span class="btn green fileinput-button">
                                    <input type="file" name="image"> </span>
                            </div>
                        </div>
                        @if($banner->is_home !=1)
                            <div class="form-group">
                                <label class="col-md-3 control-label">Short Bio *</label>
                                <div class="col-md-4">
                                   <input type="text" class="form-control" name="bio" value="{{$banner->bio}}">
                                </div>
                            </div>
                        @endif
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
        $(document).ready(function(){
            $('#checktye').hide();
            $("input[type='radio']").click(function(){
                var radioValue = $("input[name='type']:checked").val();
                if(radioValue !='home'){
                    $('#checktye').show();
                    $("input[name='bio']").attr('required',true)
                }
                else{
                    $('#checktye').hide();
                    $("input[name='bio']").attr('required',false)
                }
            });
        });
    </script>
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