<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home</title>

@include('Includes.styles')

</head>

<body>

<!-- Navigation -->
@yield('navigation')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- Blog Post -->
@yield('post')


            <!-- Pagination -->
@yield('pagination')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

                                                          <!--  -->
                                                   <!-- Search Widget -->
                                                          <!--  -->
@yield('search-widget')







                                                          <!--  -->
                                                  <!-- Categories Widget -->
                                                          <!--  -->
@yield('categories')







                                                        <!--  -->
                                                  <!-- Side Widget -->
                                                        <!--  -->
@yield('side-widget')


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->







                                                    <!--  -->
                                                <!-- footer -->
                                                    <!--  -->
@yield('footer')







                                                   <!--  -->
                                            <!-- Scripts includes -->
                                                   <!--  -->
@include('Includes.scripts')

</body>

</html>
