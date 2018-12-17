<div id="secondary" class="four columns end">

    <aside id="sidebar">

        <div class="widget widget_search">
            <h5>Search</h5>
            <form action="#">

                <input class="text-search" type="text" onfocus="if (this.value == 'Search here...') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Search here...'; }" value="Search here...">
                <input type="submit" class="submit-search" value="">

            </form>
        </div>

        <div class="widget widget_text">
            <h5 class="widget-title">Defining the video game</h5>
            <div class="textwidget">the term "video game" now generally
                encompasses any game played on hardware built with electronic logic circuits that incorporates an element of interactivity
                and outputs the results of the player's actions to a display.</div>
        </div>

        <div class="widget widget_categories">
            <h5 class="widget-title">Categories</h5>
            <ul>
                @foreach($categories as $cat)
                    <li><a href="{{route('store.category', ['id' => $cat->id])}}">{{$cat->name}}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="widget widget_tag_cloud">
            <h5 class="widget-title">Tags</h5>
            <div class="tagcloud cf">
                <a href="#">Videogames</a>
                <a href="#">Technology</a>
                <a href="#">Review</a>
                <a href="#">Game Masters</a>
                <a href="#">Exhibition</a>
            </div>
        </div>

    </aside>

</div> <!-- Secondary End-->
