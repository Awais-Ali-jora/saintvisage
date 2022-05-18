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
                <h1>Team
                    <small>team</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('Team.update',$team->id)}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('put')
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="name" required="" value="{{$team->name}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Designation *</label>
                            <div class="col-md-4">
                              <input type="text" name="designation" class="form-control" required="" value="{{$team->designation}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Photo *</label>
                            <img src="{{Storage::disk('public')->url($team->image)}}" height="150">
                            <div class="col-md-4">
                               <input type="file" name="image" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Category *</label>
                            <div class="col-md-4">
                               <select class="form-control" name="cat" required="">
                                <option selected="" disabled="">Select Category</option>
                                   <option value="HEAD OF DEPARTMENTS" {{$team->cat=='HEAD OF DEPARTMENTS'? 'selected':''}}>HEAD OF DEPARTMENTS</option>
                                   <option value="SENIOR PRACTITIONERS" {{$team->cat=='SENIOR PRACTITIONERS'? 'selected':''}}>SENIOR PRACTITIONERS</option>
                                   <option value="SENIOR COORDINATORS" {{$team->cat=='SENIOR COORDINATORS'? 'selected':''}}>SENIOR COORDINATORS</option>
                               </select>
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