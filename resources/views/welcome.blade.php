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
                            <div id="google_ad3">
                                <style>
                                    .checkrespond1 { width: 320px; height: 50px; }
                                    @media(min-width: 500px) { .checkrespond1 { width: 468px; height: 60px; } }
                                    @media(min-width: 800px) { .checkrespond1 { width: 728px; height: 90px; } }
                                </style>
                                <script src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- checkrespond1 -->
                                <ins class="adsbygoogle checkrespond1"
                                     style="display:inline-block"
                                     data-ad-client="ca-pub-4617308558434719"
                                     data-ad-slot="7732229387"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </div>
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
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <br/>
                                <br/>
                                <div class="fb-like-box" data-href="https://www.facebook.com/checkenginefree" data-colorscheme="dark" data-show-faces="false" data-header="true" data-stream="false" data-show-border="true"></div>
                                <br/>
                                <br/>
                            </div>
                            <div data-role="footer" style="overflow:hidden;" data-fullscreen="true" data-theme="b" data-tap-toggle="false">
                                <span class="credit">checkenginefree.com &copy; 2017</span><br/>
                                <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the ''Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends!  :D</p>
                            </div><!-- /footer -->
                        </div>
                        <div data-role="page" data-theme="b" id="about">
                            <div data-role="header" data-tap-toggle="false" data-theme="b">
                                <img class='img-responsive' alt='checkenginefree.com' src='checkenginelogoyay3.png'/>
                                <div data-role="navbar">
                                    <ul class="nav-trickery">
                                        <li><a href="#mappins"  data-icon="navigation"><span class="orangose">Map</span></a></li>
                                        <li><a href="#about" class="ui-state-persist" data-icon="info"><span class="orangose">About</span></a></li>
                                        <li><a href="#contact" data-icon="mail"><span class="orangose">Contact</span></a></li>
                                    </ul>
                                </div><!-- /navbar -->
                            </div>
                            <div id="wrappa2">
                                <h2 class="contact_header">About Us</h2>
                                <div id="about_us_words">
                                    <p>checkenginefree.com became a reality because the programmer that developed the site was driving around one day when all of a sudden his check engine light came on.  He began to worry while wondering what could possibly be wrong with his car.  He was also dreading a visit to a mechanic.  He assumed the mechanic would more than likely not only gouge him for the cost of servicing his car, but also for the cost of running a check engine light diagnostic to pinpoint the problem!  That was not right!  He knew that many auto parts stores in the United States offer free check engine light diagnostics! It also soon occurred to him that it would probably benefit him if he were a more informed consumer when meeting with a mechanic! If he seemed to know what the problem was ahead of time the mechanic might be less likely to inflate the price on him.  He also saw a challenge in collecting this information, mapping it and putting it all in one place for his benefit and for the sake of otherwise less informed consumers across the nation!</p>
                                    <p>The information on this site may not be entirely accurate, but it has proven to be accurate enough to pursue the completion of this project.  If you find any information to be inaccurate please take the time to use the ‘Report this as inaccurate’ link that accompanies each listing below the map so that we will be able to ensure that the location data is accurate and up to date for the benefit of yourself and other users in the future.  If you wish to report a location that is not listed, would like to advertise or have any other questions, comments or concerns then please drop us a line on the <a rel="external" href="map.html#contact"><span class="basic_links">contact page</span></a> where there is an appropriate form for you to do just that!  Thank you for visiting us!  We hope this service has been helpful to you!  Please share this with your friends &amp; family and don't forget to like us on Facebook! :D</p>
                                    <br/>
                                    <hr/>
                                    <br/>
                                    <br/>
                                </div>
                            </div>


                            <div data-role="footer" style="overflow:hidden;" data-theme="b" data-tap-toggle="false">
                                <span class="credit">checkenginefree.com &copy; 2017</span>
                                <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the 'Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends and family!  :D</p>
                            </div><!-- /footer -->
                        </div>

                        <div data-role="page" data-theme="b" id="contact">
                            <div data-role="header" style="overflow:hidden;" data-tap-toggle="false" data-theme="b">
                                <img class='img-responsive' alt='checkenginefree.com' src='checkenginelogoyay3.png'/>
                                <div data-role="navbar">
                                    <ul class="nav-trickery">
                                        <li><a href="#mappins"  data-icon="navigation"><span class="orangose">Map</span></a></li>
                                        <li><a href="#about" data-icon="info"><span class="orangose">About</span></a></li>
                                        <li><a href="#contact" class="ui-state-persist" data-icon="mail"><span class="orangose">Contact</span></a></li>
                                    </ul>
                                </div><!-- /navbar -->
                            </div>
                            <div id="wrappa3">
                                <div id="contact_success"><h3>Thank you for Contacting Us!</h3><div id="contact_success_words"><p>We will get back to you as soon as possible!</p></div></div>
                                <div id="contact_form">
                                    <form id="form1">
                                        <h2 class="contact_header">Contact Us Today!</h2>
                                        <p>Please send us any questions comments or concerns that you have!  We will review what whatever is submitted to us and get back to you as soon as possible!  Thanks for visiting checkenginefree.com!  Please tell your friends!</p>
                                        <div data-role="content">
                                            <div data-role="fieldcontainer">
                                                <label for="name" data-theme="d">Name:</label>
                                                <input type="text" id="name" name="name" data-theme="a" placeholder="Enter Your Name"/>
                                            </div>
                                            <div data-role="fieldcontainer">
                                                <label for="email" data-theme="d">E-mail Address:</label>
                                                <input type="email" id="email" name="email" data-theme="a" placeholder="Enter Email"/>
                                            </div>
                                            <label for="comments" data-theme="d">Question(s), Comment(s) and/or Concern(s):</label>
                                            <div data-role="fieldcontainer">
                                                <textarea id="comments" name="comments" data-theme="d" placeholder="Enter Any Question(s), Comment(s) and/or Concern(s)"></textarea>
                                            </div>
                                        </div>
                                        <input type="submit" data-theme="a" value="Drop Us a Line" id="submit"/>
                                        <br/>
                                        <br/>
                                    </form>
                                </div>
                                <br/>
                                <hr/>
                                <br/>
                                <br/>
                            </div>
                            <br/>
                            <br/>

                            <div data-role="footer" data-theme="b" style="overflow:hidden;" data-tap-toggle="false">
                                <span class="credit">checkenginefree.com &copy; 2017</span>
                                <p class="disclaimer">*We make no guarantees that the location information given on this site is accurate.  If you find that there is an inaccurate location listing then please take the time to report it to us using the ''Report this as inaccurate' link.  This will help to ensure that the integrity of our data is to the benefit of yourself and other users.  If you wish to add a new location that folks are able to get their check engine light diagnosed for free then please visit the contact page in order to submit that information to us.  Once it is confirmed we will add it to our databases.  We also make no guarantees that the location listed will offer a free check engine light diagnostic.  This site makes a point of listing the chains that are famous for making such offerings.  Thanks for visiting!  Please tell your friends!  :D</p>
                            </div><!-- /footer -->
                        </div>


{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQdVUBRQViyrdnmO6-cQnH_Xy8-wW-P6Y&callback=initialize"--}}
{{--type="text/javascript"></script>--}}

{{--AIzaSyCQdVUBRQViyrdnmO6-cQnH_Xy8-wW-P6Y--}}

@endsection
