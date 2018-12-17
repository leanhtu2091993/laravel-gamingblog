@extends('store.layouts.master')
@section('content')
            <!-- Content
   ================================================== -->
                <div class="content-outer">

                    <div id="page-content" class="row">

                        <div id="primary" class="eight columns">

                            <article class="post">

                                <div class="entry-header cf">
                                    @foreach($products as $product)
                                    <h1>
                                        {{$product->name}}
                                    </h1>

                                    <p class="post-meta">
                                        <time class="date" datetime="2014-01-14T11:24">Jan 14, 2014</time>/
                                        <span class="categories">
                                         <a href="#">Design</a> /
                                         <a href="#">User Inferface</a> /
                                         </span>
                                    </p>
                                </div>

                                <div class="post-thumb">
                                    <a href="single.html" title="">
                                        <img src="/upload/product/{{$product->image}}" alt="post-image" title="post-image">
                                    </a>
                                </div>

                                <div class="post-content">
                                    <p>
                                        {{$product->description}}
                                    </p>
                                    <hr>
                                    @endforeach
                                </div>
                            </article> <!-- post end -->

                            <!-- Pagination -->
                            <nav class="col full pagination">
                                <ul>
                                    <li><span class="page-numbers prev inactive">Prev</span></li>
                                    <li><span class="page-numbers current">1</span></li>
                                    <li><a href="#" class="page-numbers">2</a></li>
                                    <li><a href="#" class="page-numbers">3</a></li>
                                    <li><a href="#" class="page-numbers">4</a></li>
                                    <li><a href="#" class="page-numbers">5</a></li>
                                    <li><a href="#" class="page-numbers">6</a></li>
                                    <li><a href="#" class="page-numbers">7</a></li>
                                    <li><a href="#" class="page-numbers">8</a></li>
                                    <li><a href="#" class="page-numbers">9</a></li>
                                    <li><a href="#" class="page-numbers next">Next</a></li>
                                </ul>
                            </nav>

                        </div> <!-- Primary End-->
@endsection

