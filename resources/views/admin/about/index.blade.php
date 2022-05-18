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
                <h1>About-Us Page
                    <small>About-us</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet box green">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead class="flip-content">
                        <tr>
                            <th width="20%">Who we ARE</th>
                            <th class="numeric"> Mission </th>
                            <th class="numeric"> Vission </th>
                            <th class="numeric"> Countrues </th>
                            <th class="numeric"> Employees </th>
                            <th class="numeric"> Smiles Transformend </th>
                            <th class="numeric"> Faces Rejuvenated </th>
                            <th>About</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td> {!! $about->who !!}</td>
                            <td>{!! $about->mission!!}</td>
                            <td class="numeric">{!! $about->vission !!}</td>
                            <td class="numeric">{{$about->country}}</td>
                            <td> {{$about->employee}}</td>
                            <td>{{$about->smile}}</td>
                            <td class="numeric">{{$about->faces}}</td>
                            <td class="numeric">{!! $about->about !!}</td>
                            <td>
                                <a href="{{route('About.edit',$about->id)}}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
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
