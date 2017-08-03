<!-- MASTER LAYOUT PAGE NAME -->
@extends('layouts.app')

<!-- TITLE OF PAGE -->

@section('title', 'Sum of two numbers')

@section('meta_description', 'Java program to find the sum of two numbers')

@section('meta_keywords', 'java , program , sum, two ,numbers')

<!-- ALL SECTIONS INCLUDED -->
@section('sidebar')
    @parent

    
@endsection


<!-- MAIN CONTENT OF PAGE  -->

@section('content')
<h4>Write a program to find the sum of two numbers?</h4>
<pre><code class="java" style="border: 2px solid black;padding: 10%">

<?php 
$ques=$_GET["q"];
$ques.=setting_file_path($ques);
$myfile = fopen($ques, "r") or die("Unable to open file!");
echo fread($myfile, filesize($ques));
fclose($myfile);

function setting_file_path($str){
  $name=substr($str, 6 );
  $slash_pos=strpos($name,"/");
  $name=substr_replace($name, " ", $slash_pos);
  return ".".$name;
}

 ?>

</code></pre>
@endsection

@section('fb-connect')

<!-- LIKE BUTTONS -->
            <h4>Like and Share</h4>
            <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

            <!-- LIKE BUTTON ENDS -->
            <hr>

            <!-- STARTS DISCUSSION FORM -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                        <hr>
                        <h4>discuss here ..</h4>
                        
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    <div class="fb-comments" data-href="https://www.studyfever.net/sum-of-two-numbers" data-width="auto"data-numposts="20" ></div>

                    
                    </div>
                </div>
            </div>
            <!-- ENDS DICUSSION FORM -->

@endsection

<!-- MAIN CONTENT ENDS -->

