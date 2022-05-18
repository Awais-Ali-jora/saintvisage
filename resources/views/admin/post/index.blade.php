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
                <h1>Banner
                    <small>View BAnners</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th width="20%"> SR#. </th>
                            <th class="numeric"> Title </th>
                            <th class="numeric"> Category </th>
                            <th class="numeric"> description </th>
                            <th class="numeric">Image</th>
                            <th class="numeric"> thumbnail </th>
                            <th class="numeric"> Banner Title </th>
                            <th class="numeric"> Banner </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td> {{++$loop->index}}</td>
                            
                            <td class="numeric">{{$post->title}}</td>
                            <td class="numeric">{{$post->category->name}}</td>
                            <td class="numeric"> {!! $post->description !!}</td>
                            <td class="numeric"><img src="{{Storage::disk('public')->url($post->image)}}" height="100"></td>
                            <td class="numeric"><img src="{{Storage::disk('public')->url($post->thumbnail_image)}}" height="100"></td>
                            <td class="numeric"> {{$post->banner_title}}</td>
                            <td class="numeric"><img src="{{Storage::disk('public')->url($post->banner_image)}}" height="100"></td>
                            <td>
                                <a href="{{route('post.edit',$post->id)}}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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