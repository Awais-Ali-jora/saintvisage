<!DOCTYPE html>

<html lang="en">
    <!-- BEGIN HEAD -->
    <head>
        @include('admin.layouts.head')
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        @include('admin.layouts.header')

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('admin.layouts.sidebar')

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                
                @section('page_content')
                @show

            </div>
            <!-- END CONTENT -->

            @include('admin.layouts.quickSidebar')
        </div>
        <!-- END CONTAINER -->
        
        @include('admin.layouts.footer')
       
        @include('admin.layouts.scripts')
    </body>

</html>