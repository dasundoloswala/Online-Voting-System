<?php
session_start();

?>

<html>

<head>
	<link rel ="stylesheet" type ="text/css" href = "how to vote.css">

<style>
 .mySlides {
        display: none
		
		
      }
      img {
        vertical-align: middle;
      }
      .slideshow-container {
        max-width: 800px;
        position: relative;
        margin: auto;
		align :center;
		top: 0px;
		left :37%;
      }
</style>
<style>
body {
  background-image: url('pngtree-cool-music-festival-carnival-character-silhouette-background-design-backgroundcolorfullivelycharacter-carnivalholiday-backgroundmusic-image_70553.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

<title> Teens Got Talent </title>

	<meta charset="utf-8">
	<meta name ="viewport" content= "width=device-width">
	<style>
		.star{
		color:goldenrod;
		font-size:4.0rem;
		padding:0 1rem;
		}
		.star::before{
		content:'\2606';
		cursor:pointer;
		}
		.star.rated::before{
		content:'\2605';
		}
		.stars{
		counter-reset:rateme 0;
		font-size:2.0rem;
		font-weght:900;
		}
		.star.rated{
			counter-increment:rateme 1;
			}
		.stars::after{
			content:counter(rateme)'/5';
		}
	</style>

</head>

<body>

<div class="topic">

  <img src="star.png" alt="Snow" style="width:15%">
  
  <h1 class = "heading" style ="color:white"> TEENS GOT TALENT </h1>
  
  <button class = "butto"> <a href = "logout.php"> logout </button>
  
  <a href ="useraccountdetails.php">
  <img src ="lady.png "  width ="50" height = "50" class ="butto2"> </a>
  </div>
  
  <hr class="horizontal">
  



<div class="topnav" align="center">
  <a  href="News Loged.php">News</a>
  <a  href="homepage after login.php">Home</a>
  <a href="voting page.php">Vote</a>
  <a href="sponsorafterlogin.php">sponsers</a>
  <a href="highlights.php">Highlights</a>
  <a href="contact-us-logged-in.php">Contact us</a>
  <a href="Terms and ConditionsLogin.php">Terms and conditions</a>
</div>
</div>





		
<div  align="center" class="vertical-menu">
		
 <embed src="Final.mp4" width="130" height="130"></embed>
</br> </br>

</br></br>
    <font size="4px"><a href="results.php">View Results</a></font>
  
  <font size="4px"><a href="shedule after login.php">Schedule</a></font>
  
  <font size="4px"><a href="how to vote.php" class="active">How to Vote</a></font>
  
  <font size="4px"><a href="image gallery loged.php">Image Gallery</a></font>
  
  <font size="4px"><a href="previousvideos.php">Previous Videos</a></font>
</div>
	
		<ul type="bullet">
		<li class="step">&nbsp;&nbsp;Step 1 - You must registered to the system first.</li>
		<li class="step">&nbsp;&nbsp;Step 2 - Then <b>log</b> into the system.</li>
		<li class="step">&nbsp;&nbsp;Step 3 - Go to the <b>Vote page</b>.</li>
		<li class="step">&nbsp;&nbsp;Step 4 - Select your Performer.</li>
		<li class="step">&nbsp;&nbsp;Step 5 - And click the <b>Submit </b>button.</li></ul>
	<h1 class="font"><center><i><b>Then your vote will help your performer!!</b></i></center></h1>
	<h2 class="font">Would this help to you? Rate this service......</h2>
	<br></br>
	<center>
		<div class="stars" data-rating="3">
			<span class="star"></span>
			<span class="star"></span>
			<span class="star"></span>
			<span class="star"></span>
			<span class="star"></span>
		</div>
	</center>
	
	<script>
			document.addEventListener('DOMContentLoaded',function(){
			let stars=document.querySelectorAll('.star');
			stars.forEach(function(star){
				star.addEventListener('click',setRating);
			});
			
			let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
			let target = stars[rating - 1];
			target.dispatchEvent(new MouseEvent('click'));
			});
			
			function setRating(ev){
				let span=ev.currentTarget;
				let stars=document.querySelectorAll('.star');
				let match=false;
				let num= 0;
				stars.forEach(function(star, index){
					if(match){
						star.classList.remove('rated');
					}else{
						star.classList.add('rated');
					}
					if(star === span){
						match = true;
						num = index +1;
					}
				});
				document.querySelector('.stars').setAttribute('data-rating',num);
			}
		</script>
	
	<br></br><br></br><br></br><br></br>

<footer  height = "50">
	<a href="https://www.facebook.com/"> <img src = "facebook.png" align ="left" width = "50" height = "50"> </a>
   <a href="https://www.twitter.com"><img src = "twitter.png" align ="left" width = "50" height = "50"></a>
   <a href="https://www.instagram.com"><img src = "instagram.png" align ="left" width = "70" height = "50"></a>
	
  
 <div class="slideshow-container">
      <div class="mySlides">
  
        <img src="coke.jpg" width = "300" height = "80" >
       
      </div>
      <div class="mySlides">
       
   <img src="mac.jpg"width = "300" height = "80">
        
      </div>
</footer>
	  
 <script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
      }
    </script>

</body>
</html>
