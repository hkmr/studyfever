<!-- MASTER LAYOUT PAGE NAME -->
@extends('layouts.app')

<!-- TITLE OF PAGE -->
@section('title', 'search-result')

<!-- ALL SECTIONS INCLUDED -->
@section('sidebar')
    @parent

    
@endsection



<!-- MAIN CONTENT OF PAGE  -->
@section('content')


<?php
if(isset($_GET["submit"])){
	//Reading path and read files in the directory
	if($_GET["lan"]=="java" || $_GET["lan"]=="cpp" || $_GET["lan"]=="c" || $_GET["lan"]=="python"){
		$dirpath=$_GET["lan"];
		$lan_name=$dirpath;
		search_ques('files/'.$dirpath,0,$lan_name);//path of directory to take file
	}
	elseif($_GET["lan"]=="all"){
		$path=array("java","c","cpp","python");//add the directory name if you add any directory in specified file
		$flag=count($path);
		foreach ($path as $dirpath) {
			$lan_name=$dirpath;
			search_ques('files/'.$dirpath,$flag,$lan_name);//path of directory to take file
		}
		
	}
	
}
$inc=0;
$msg="";
function search_ques($dirpath,$flag=0,$lan_name){
	$filenames=array();
	$handle=opendir($dirpath);
	while($file=readdir($handle)){
		if($file!='.' && $file!='..')
			$filenames[]=$file;
	}
	closedir($handle);
	//Getting string and converting in keywords
	$str=$_GET["search"];
	$str=trim($str);
	$str=strtolower($str);
	$keywords=array();
	$word="";
	for($i=0;$i<strlen($str);$i++){
		if($str[$i]!=" "){
			$word.=$str[$i];
		}
		else{
			array_push($keywords,$word);
			$word="";
		}
		if(strlen($str)-1==$i){
			array_push($keywords,$word);
		}
	}
	//Comparing keywords to file names and getting the maximum outcome
	
	$num=array();
	foreach($filenames as $single){
		$val=0;
		$single=strtolower($single);
		foreach($keywords as $wrd){
				$val+=substr_count($single,$wrd);
		}
		array_push($num,$val);
	}
	
	//Making sorting in decending order as value and taking the particular file as fullfiled by keywords
	arsort($num);
	$temp=0;
	foreach($num as $tnum){
		if($temp!=$tnum){
			for($i=0;$i<count($num);$i++){
				if($tnum==$num[$i] && $tnum!=0){
					//echo "<br>".$tnum." ".$num[$i];
					$filenames[$i]=strtr($filenames[$i]," ","-");
					$replace=strpos($filenames[$i],".");
					$filenames[$i]=substr_replace($filenames[$i]," ",$replace);
					$address=$dirpath.'/'.$filenames[$i];
					echo strtoupper($lan_name).": ";
					echo "<a href=question?q=".$address.">".strtr($filenames[$i],"-"," ")."</a><br><br>";//link your page to display
					$temp=$tnum;
				}
			}
		}
	}
	reset($num);
	global $inc;
	global $msg;
	if(current($num)==0){
		if($flag==++$inc){
			$msg="false";// add message if your file did not found
			echo "Sorry ! Query not Found .";
		}
		elseif ($flag==0) {
			$msg="false";// add message if your file did not found
			echo "Sorry ! Query not Found .";
		}


	}
	else{
		$msg="true";// add message if your file found
	}
	
}


?>


@endsection

<!-- alert section -->

     <?php
     global $msg;  
     if($msg=="true"){
     	echo '
     	<div class="alert alert-success">
     	<p><strong>Yeah ! </strong> We found your query. :) </p>
     	</div>';
     }
     else
     {
     	echo '
     	<div class="alert alert-danger" role="alert">
     	<p><strong>Sorry ! </strong>Cannot find your query. :(</p>
     	</div>';
     }

     ?>

