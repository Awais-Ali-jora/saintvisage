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
                <h1>Messages Page
                    <small>Messages</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th>Date</th>
                            <th width="20%">Name</th>
                            <th>Email</th>
                            <th class="numeric">Contact </th>
                            <th>Postal Code</th>
                            <th>Country</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($messages as $message)
                        <tr>
                           <td>{{\Carbon\Carbon::parse($message->created_at)->format('d-m-Y') }}</td>
                            <td width="20%">{{ $message->type }}-{{$message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td class="numeric">{{$message->phone }} </td>
                            <td>{{ $message->zip }}</td>
                            <td>{{ $message->country }}</td>
                            <td>{{ $message->message }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$messages->links()}}
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