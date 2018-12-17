<footer>

    <div class="row">

        <div class="twelve columns">

            <ul class="footer-nav">
                <li class="active"><a href="{{route('store.home')}}">Home</a></li>
                @foreach($categories as $cat)
                    <li><a href="{{route('store.category', ['id' => $cat->id])}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>

            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
                <li>Copyright &copy; 2019</li>
            </ul>

        </div>

        <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

    </div>

</footer> <!-- Footer End-->
<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>

<script src="/js/jquery.flexslider.js"></script>
<script src="/js/doubletaptogo.js"></script>
<script src="/js/init.js"></script>
{{--<script src="{{asset('js/init.js')}}"></script>--}}
</body>

</html>