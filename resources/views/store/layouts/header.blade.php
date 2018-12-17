<!DOCTYPE html>
        <!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
        <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
        <!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
        <head>

            <!--- Basic Page Needs
            ================================================== -->
            <meta charset="utf-8">
            <title>Gaming | Blog</title>
            <meta name="description" content="">
            <meta name="author" content="">

            <!-- Mobile Specific Metas
            ================================================== -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- CSS
            ================================================== -->
            <link rel="stylesheet" href="/css/default.css">
            <link rel="stylesheet" href="/css/layout.css">
            <link rel="stylesheet" href="/css/media-queries.css">

            <!-- Script
            ================================================== -->
            <script src="/js/modernizr.js"></script>

            <!-- Favicons
             ================================================== -->
            <link rel="shortcut icon" href="favicon.ico" >

        </head>

        <body>

        <!-- Header
        ================================================== -->
        <header>

            <div class="row">

                <div class="twelve columns">

                    <div class="logo">
                        <a href="#"><img alt="" src="#"></a>
                    </div>

                    <nav id="nav-wrap">

                        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

                        <ul id="nav" class="nav">
                            <li class="active"><a href="{{route('store.home')}}">Home</a></li>
                            @foreach($categories as $cat)
                                <li><a href="{{route('store.category', ['id' => $cat->id])}}">{{$cat->name}}</a></li>
                            @endforeach
                        </ul> <!-- end #nav -->

                    </nav> <!-- end #nav-wrap -->

                </div>

            </div>

        </header> <!-- Header End -->

        <!-- Page Title
        ================================================== -->
        <div id="page-title">

            <div class="row">

                <div class="ten columns centered text-center">
                    <h1>Gaming Blog<span>.</span></h1>

                    <p>Gaming Past, Present & Future</p>
                </div>

            </div>

        </div> <!-- Page Title End-->

