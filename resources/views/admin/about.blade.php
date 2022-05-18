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
                <h1>About-Us
                    <small>about-us</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <div class="portlet light bordered">
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form action="{{route('banner.store')}}" class="form-horizontal" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Banner Image *</label>
                            <div class="col-md-4">
                               <span class="btn green fileinput-button">
                                    <input type="file" name="image"> </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Select type *</label>
                            <div class="col-md-4">
                                <div class="mt-radio-inline">
                                <label class="mt-radio">
                                    <input type="radio" name="type" id="optionsRadios4" value="home" checked="">Home
                                    <span></span>
                                </label>
                                <label class="mt-radio">
                                    <input type="radio" name="type" id="optionsRadios5" value="about"> About-Us
                                    <span></span>
                                </label>
                                <label class="mt-radio">
                                    <input type="radio" name="type" id="optionsRadios6" value="treatment"> Treatment Page
                                    <span></span>
                                </label>
                                <label class="mt-radio">
                                    <input type="radio" name="type" id="optionsRadios6" value="work"> Work With Us
                                    <span></span>
                                </label>
                            </div>
                            </div>
                        </div>
                        <div id="checktye" >
                            <div class="form-group">
                            <label class="col-md-3 control-label">Short Bio *</label>
                            <div class="col-md-4">
                               <input type="text" class="form-control" name="bio">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-4">
                                <button type="submit" class="btn green">Submit</button>
                                <button type="button" class="btn default">Cancel</button>
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