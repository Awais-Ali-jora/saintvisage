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
                <h1>Why Work With US Page
                    <small>Why Work With US</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th>SR.#</th>
                            <th width="20%">Title</th>
                            <th class="numeric">Description</th>
                            <th class="numeric"> Percentage </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($practices as $practice)
                            <tr>
                                <td> {{++$loop->index}}</td>
                                <td>{{$practice->title}}</td>
                                <td class="numeric">{{$practice->description}}</td>
                                <td class="numeric">{{$practice->percentage }}</td>
                                <td>
                                    <a href="{{route('practice.edit',$practice->id)}}"><i class="fa fa-edit"></i></a>
                                    <form method="post" action="{{route('practice.destroy',$practice->id)}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="color:red;background: none;border: none;"><i class="fa fa-trash"></i></button>
                                    </form>
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
