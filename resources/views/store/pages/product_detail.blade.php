@extends('store.layouts.master')
@section('content')
    <!-- Content
   ================================================== -->
    <div class="content-outer">

        <div id="page-content" class="row">

            <div id="primary" class="eight columns">

                <article class="post">

                    <div class="entry-header cf">

                        <h1>
                            {{$product->name}}
                        </h1>

                        <p class="post-meta">

                            <time class="date" datetime="2019-01-14T11:24">Dec 12, 2019</time>
                            /
                            <span class="categories">
                     <a href="#">Design</a> /
                     <a href="#">User Inferface</a> /
                     <a href="#">Web Design</a>
                     </span>

                        </p>

                    </div>

                    <h4>{{$product->description}}</h4>

                    <div class="post-thumb">
                            <img src="/upload/product/{{$product->image}}" alt="post-image" title="post-image">
                    </div>


                    <div class="post-content">
                        <p>{{$product->properties}}</p>

                        <p class="tags">
                            <span>Tagged in </span>:
                            <a href="#">blog</a>, <a href="#">gaming</a>, <a href="#">news</a>, <a href="#">review</a>
                        </p>

                        <ul class="post-nav cf">
                            <li class="prev"><a rel="prev" href="#"><strong>Bài viết trước đó</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
                            <li class="next"><a rel="next" href="#"><strong>Bài viết tiếp theo</strong> Morbi Elit Consequat Ipsum</a></li>
                        </ul>

                    </div>

                </article> <!-- post end -->

                <hr>
                    <!-- respond -->
                    <div class="respond">

                        <h3>Để lại bình luận</h3>

                        <!-- form -->
                        <form name="contactForm" id="contactForm" method="post" action="">
                            <fieldset>

                                <div class="cf">
                                    <label for="cName">Tên <span class="required">*</span></label>
                                    <input name="cName" type="text" id="cName" size="35" value="" />
                                </div>

                                <div class="cf">
                                    <label for="cEmail">Email <span class="required">*</span></label>
                                    <input name="cEmail" type="text" id="cEmail" size="35" value="" />
                                </div>

                                <div class="message cf">
                                    <label  for="cMessage">Bình luận<span class="required">*</span></label>
                                    <textarea name="cMessage"  id="cMessage" rows="10" cols="50" ></textarea>
                                </div>

                                <button type="submit" class="submit">Gửi đi</button>

                            </fieldset>
                        </form> <!-- Form End -->

                    </div> <!-- Respond End -->

                </div>  <!-- Comments End -->
            @include ('store.layouts.sidebar')

@endsection
