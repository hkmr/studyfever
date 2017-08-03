@extends('layouts.app')

<!-- TITLE OF PAGE -->

@section('title', 'About-us')

@section('meta_description', 'Page description')

@section('meta_keywords', 'page keywords')

<style type="text/css">
.bg-image-about{
  width: 100%;
  background-image: url('images/about.jpg');
  background-attachment: fixed;
  border-radius: 5%;
  color: #fff;
}
.bg-color-about{
  padding: 7%;
  background-color: rgba(0,0,0,0.7);
  border-radius: 5%;
  padding: 20px;
}
.bg-color-about h3{
  text-align: center;
  color:#fff;
  border-bottom: 2px solid #fff;
  letter-spacing: 2%;
}
.bg-color-about h5{
	color: #fff;
}
.bg-color-about p{
	padding: 10%;
	font-size: 20px;
}
.bg-color-about a
{
	text-decoration: none;
	color: #b3ffff;
}

@media screen and (max-width: 768px) {
	.bg-image-about{
		width: 90%;
		margin: 5%;
	}
/*	.bg-color-about{
		width: 90%;
	}
*/	.bg-color-about p{
		font-size: 10px;
		padding: 2%;
	}
	.bg-color-about h3

	}
</style>
<!-- ALL SECTIONS INCLUDED -->
@section('sidebar')
    @parent

    
@endsection


<!-- MAIN CONTENT OF PAGE  -->

@section('content')
	<div class="bg-image-about">
		<div class="bg-color-about">
			<h3>What is Studyfever ?</h3>
			<p>Studyfever is a developer's site which provides informations for developer's problems.
				It contains large collections of different programming language questions with their solutions.
				And Cool part about it is , that it's all free provided to you.
			</p>
			<h3>For whom it is Effective ?</h3>
			<p>
				This site very effective for those who are new to programming language and for whom who is competitive minded. It helps the programmer to examine the same problem in different ways.
			</p>
			<h3>Like and Discuss .</h3>
			<p>
			If you like the question and their solution then like and share with others.
			You can also discuss the problem with others about the problem.
			</p>
			<h3>Cannot find your query</h3>
			<p>
				IF you are unable to find your query then you can mail your query on the offical email of this site (<a href="#">studyfever@gmail.com</a>).
				We will surely send the query solution either personally or on the website.
			</p>
			<h3>Thanks for Your support</h3>

		</div>
	</div>

@endsection





