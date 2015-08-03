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

		echo '<img src="imgs/response3.jpg" class="mainimage" alt="interactive game end" border="0" usemap="#endB"/>';
		echo '<map name="endB">';
			echo '<area shape="rect" coords="0,1018,480,1104" alt="Replay" href="index.php/">';
			echo '<area shape="rect" coords="0,1105,480,1194" alt="Watch Video" href="http://youtu.be/V8fx8RWNOVg">';
			echo '<area shape="rect" coords="0,1195,480,1284" alt="Download your badge" href="imgs/badges/badge3.jpg">';
			echo '<area shape="rect" coords="0,1285,480,1374" alt="Share your results in facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://uwgkgivetoday.org/">';
			echo '<area shape="rect" coords="0,1375,480,1472" alt="Share your results in Twitter" href="https://twitter.com/home?status=Create%20a%20better%20tomorrow.%20Give%20today.%20I%20did!%20http://uwgkgivetoday.org/">';
			echo '<area shape="rect" coords="0,1473,480,1558" alt="Email results to a friend" href="mailto:?&Subject=Create a better tomorrow. Give today. I did! &body=Check it out at http://uwgkgivetoday.org/">';
			echo '<area shape="rect" coords="148,1825,325,1939" alt="United Way Knoxville" href="http://uwgk.org/donate/">';
			echo '</map>';/*
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