@extends('layouts.blog-post-panel')
@section('body')
                                           <!--   -->
                                      <!-- Navigation -->
                                           <!--   -->
@component('components.blog-post.blog-post_navigation')
@endcomponent


<div class="container">
    <div class="row">
@component('components.blog-post.blog-post_post-content-column')
@endcomponent

@component('components.blog-post.blog-post_sidebar-widget')
@endcomponent
    </div>
</div>




@endsection
