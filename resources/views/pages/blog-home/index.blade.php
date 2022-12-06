@extends('layouts.blog-home-panel')
@section('body')
    <!-- Navigation -->
    @component('components.blog-home.blog-home_navigation')
    @endcomponent

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- Blog Post -->
            @component('components.blog-home.blog-home_post')
            @endcomponent


            <!-- Pagination -->
                @component('components.blog-home.blog-home_pagination')
                @endcomponent

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                <!--  -->
                <!-- Search Widget -->
                <!--  -->
            @component('components.blog-home.blog-home_search-widget')
            @endcomponent







            <!--  -->
                <!-- Categories Widget -->
                <!--  -->
            @component('components.blog-home.blog-home_categories-widget')
            @endcomponent







            <!--  -->
                <!-- Side Widget -->
                <!--  -->
                @component('components.blog-home.blog-home_side-widget')
                @endcomponent


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->








@endsection
