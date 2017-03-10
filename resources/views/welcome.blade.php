@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">


                    @foreach($posts as $item)
                    <p>{{ $item->title }}</p>
                    <p>{{ $item->body }}</p>
                        <img class="img-thumbnail" src="../images/{{$item->img_string}}">

                    @endforeach

                    <p>Cards CALL:</p>
                    @foreach($cards as $item)
                        <p>{{ $item->title }}</p>

                        @endforeach



                        <div data-role="page" data-theme="b" id="mappins">
                            <div data-role="header" style="overflow:hidden;" data-theme="b"  data-tap-toggle="false">
                                <img class='img-responsive' alt='nearbynativecasinos.com' src='checkenginelogoyay3.png'/>
                                <div data-role="navbar">
                                    <ul class="nav-trickery">
                                        <li><a href="#mappins" class="ui-state-persist" data-icon="navigation"><span class="orangose">Map</span></a></li>
                                        <li><a href="#about" data-icon="info"><span class="orangose">About</span></a></li>
                                        <li><a href="#contact" data-icon="mail"><span class="orangose">Contact</span></a></li>
                                    </ul>
                                </div><!-- /navbar -->
                            </div>
                            <br/>
                            {{--<div id="google_ad3">--}}
                                {{--<style>--}}
                                    {{--.checkrespond1 { width: 320px; height: 50px; }--}}
                                    {{--@media(min-width: 500px) { .checkrespond1 { width: 468px; height: 60px; } }--}}
                                    {{--@media(min-width: 800px) { .checkrespond1 { width: 728px; height: 90px; } }--}}
                                {{--</style>--}}
                                {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
                                {{--<!-- checkrespond1 -->--}}
                                {{--<ins class="adsbygoogle checkrespond1"--}}
                                     {{--style="display:inline-block"--}}
                                     {{--data-ad-client="ca-pub-4617308558434719"--}}
                                     {{--data-ad-slot="7732229387"></ins>--}}
                                {{--<script>--}}
                                    {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
                                {{--</script>--}}

                            {{--</div>--}}
                            <br/>
                            <div id="search_holder">
                                <input id="address"  data-clear-btn="true"  data-theme="a" data-type="search" placeholder="Address, City, State, or Zip"/>
                                <a data-role='button'  data-icon='search' data-theme="a" data-iconpos="right" onclick="codeAddress();"><span class="orangose3">Switch Location</span></a>
                            </div>
                            <br/>
                            <div id="wrappa">
                                <div id="loading_animation"><h3 class="contact_header">Finding locations near you...</h3><img src="loader.gif" alt="loading location"/> <img src="loader.gif" alt="loading location"/><img src="loader.gif" alt="loading location"/></div>
                                <div id="map_canvas"></div>
                                <br/>
                                <div id="sidebar" data-role="collapsible">
                                </div>
                                <br/>
                                <hr>
                                <br/>
                                {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
                                <br/>
                                <br/>
                                <div class="fb-like-box" data-href="https://www.facebook.com/checkenginefree" data-colorscheme="dark" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true"></div>
                                <br/>
                                <br/>
                            </div>
                            <div data-role="footer" style="overflow:hidden;" data-fullscreen="true" data-theme="b" data-tap-toggle="false">
                                <span class="credit">checkenginefree.com &copy; 2015</span><br/>
                                <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the ''Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends!  :D</p>
                            </div><!-- /footer -->
                        </div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
