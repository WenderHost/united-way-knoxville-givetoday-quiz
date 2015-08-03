<!doctype html>
<html>

<?php include_once("head.php") ?>
<body>
 
<?php include_once("analyticstracking.php") ?>

   <header>
       <h1></h1>
       <nav>
       </nav>
   </header>

   <section>
<?php
// begin the session
/* session_start(); */

if(isset($_GET['a'])){
$a=(int)($_GET['a']);
}
if(isset($_GET['b'])){
$b=(int)($_GET['b']);
}
if(isset($_GET['c'])){
$c=(int)($_GET['c']);
}
if(isset($_GET['d'])){
$d=(int)($_GET['d']);
}

		echo '<img src="imgs/response4.jpg" class="mainimage" alt="interactive game end" border="0" usemap="#endB"/>';
		echo '<map name="endB">';
			echo '<area shape="rect" coords="0,1050,480,1137" alt="Replay" href="index.php">';
			echo '<area shape="rect" coords="0,1138,480,1224" alt="Watch Video" href="http://youtu.be/RGzVj_R_ATw">';
			echo '<area shape="rect" coords="0,1225,480,1314" alt="Download your badge" href="imgs/badges/badge4.jpg">';
			echo '<area shape="rect" coords="0,1315,480,1404" alt="Share your results in facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://uwgkgivetoday.org/">';
			echo '<area shape="rect" coords="0,1405,480,1506" alt="Share your results in Twitter" href="https://twitter.com/home?status=Create%20a%20better%20tomorrow.%20Give%20today.%20I%20did!%20http://uwgkgivetoday.org/">';
			echo '<area shape="rect" coords="0,1507,480,1590" alt="Email results to a friend" href="mailto:?&Subject=Create a better tomorrow. Give today. I did! &body=Check it out at http://uwgkgivetoday.org/">';
			echo '<area shape="rect" coords="144,1647,330,1776" alt="United Way Knoxville" href="http://uwgk.org/donate/">';
			echo '</map>';
/*
echo 'A = '.$a;
echo '<br>';
echo 'B = '.$b;
echo '<br>';
echo 'C = '.$c;
echo '<br>';
echo 'D = '.$d;
echo '<br>';
*/
?>			
   </section>
   <aside>
       <!-- Sidebar here -->
   </aside>
   <footer></footer>
</body>
</html>