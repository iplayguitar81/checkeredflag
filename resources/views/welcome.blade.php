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


{{--<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQdVUBRQViyrdnmO6-cQnH_Xy8-wW-P6Y&callback=initialize"--}}
{{--type="text/javascript"></script>--}}

{{--AIzaSyCQdVUBRQViyrdnmO6-cQnH_Xy8-wW-P6Y--}}

@endsection
