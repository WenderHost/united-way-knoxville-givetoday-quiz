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

		echo '<img src="imgs/response2.jpg" class="mainimage" alt="interactive game end" border="0" usemap="#endD"/>';
		echo '<map name="endD">';
			echo '<area shape="rect" coords="0,1324,480,1412" alt="Replay" href="index.php">';
			echo '<area shape="rect" coords="0,1413,480,1500" alt="Watch Video" href="https://www.youtube.com/watch?v=v7_cZPMdp18&feature=youtu.be">';
			echo '<area shape="rect" coords="0,1501,480,1592" alt="Download your badge" href="imgs/badges/badge2.jpg">';
			echo '<area shape="rect" coords="0,1593,480,1682" alt="Share your results in facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://givetoday.uwgk.org/">';
			echo '<area shape="rect" coords="0,1683,480,1780" alt="Share your results in Twitter" href="https://twitter.com/home?status=Create%20a%20better%20tomorrow.%20Give%20today.%20I%20did!%20http://givetoday.uwgk.org/">';
			echo '<area shape="rect" coords="0,1781,480,1866" alt="Email results to a friend" href="mailto:?&Subject=Create a better tomorrow. Give today. I did! &body=Check it out at http://givetoday.uwgk.org/">';
			echo '<area shape="rect" coords="148,1930,325,2052" alt="United Way Knoxville" href="http://uwgk.org/donate/">';
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