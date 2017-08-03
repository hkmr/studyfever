<!-- MASTER LAYOUT PAGE NAME -->
@extends('layouts.app')



<!-- ALL SECTIONS INCLUDED -->
@section('sidebar')
    @parent

    
@endsection


<!-- MAIN CONTENT OF PAGE  -->

@section('content')

<?php 
  $ques=$_GET["q"];
  $questionHead = questionHeading($ques);
  echo "<h4><b>Q.</b> $questionHead.</h4>";
 ?>
 
<pre><code class="java" style="border: 2px solid black;padding: 2%">


<?php 

$ques.=setting_file_path($ques);
$ques=trim($ques);
if(file_exists($ques)){
	$myfile = fopen($ques, "r") or die("Unable to open file!");
	echo htmlentities(fread($myfile, filesize($ques)));  //remove strip_tags()
	fclose($myfile);
}
else{
	echo "<h3>File Not Found..!</h3>";
}
function pageDescription($str){
  $titleReplaceArray1=array("/",".");
  $titleReplaceArray2=array("-","-in-");
  $strReplace=str_replace($titleReplaceArray1, $titleReplaceArray2, $str);
  return $strReplace;
}


function pageKeyword($str){
  $keywordReplaceArray=array("/",".","-");
  $strReplace=str_replace($keywordReplaceArray, ",", $str);
  return $strReplace;
}

function setting_file_path($str){
  $name=substr($str, 6 );
  $slash_pos=strpos($name,"/");
  $name=substr_replace($name, " ", $slash_pos);
  return ".".$name;

}

function fbUrl($str){
  $urlArray1=array(".","files");
  $urlArray2=array("-","https://studyfever.net");
  $url=str_replace($urlArray1, $urlArray2, $str);
  return $url;
}

function questionHeading($str) {
  $str=substr($str, 6);
  $titleReplaceArray1=array("/","-",".");
  $titleReplaceArray2=array(" "," ","-in-");
  $strReplace=str_replace($titleReplaceArray1, $titleReplaceArray2, $str);
  return $strReplace;
}

$title=questionHeading($ques);

$description = pageDescription($ques);

$keyword = pageKeyword($ques);

$url=fbUrl($ques);


 ?>

</code></pre>
@endsection

@section('title', $title)

@section('meta_keywords', $keyword)

@section('meta_description', $description)

@section('fb-connect')

			<!-- advertisment starts-->
			<div class="ad-area"><center>
			
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- square-ad -->
			<ins class="adsbygoogle"
			style="display:inline-block;width:300px;height:280px"
			data-ad-client="ca-pub-5562849058156617"
			data-ad-slot="3712277483"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			
			</center>
			</div>

			<!-- advertisment ends -->

<!-- LIKE BUTTONS -->
			<div style="clear:both;">
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
            </div>
            <hr>

            <!-- STARTS DISCUSSION FORM -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fb-like" data-href="{{$url}}" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
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
    
                      <div class="fb-comments" data-href="{{$url}}" data-width="auto"data-numposts="20" ></div>

                    
                    </div>
                </div>
            </div>
            <!-- ENDS DICUSSION FORM -->

@endsection

<!-- MAIN CONTENT ENDS -->

