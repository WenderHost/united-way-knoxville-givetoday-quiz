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

		echo '<img src="imgs/a-d.jpg" class="mainimage" alt="interactive game page 10" border="0" usemap="#next"/>';
			echo '<map name="next">';
			echo '<area shape="rect" coords="0,0,480,432" alt="Results" href="result2.php?a='.($a+1).'&b='.$b.'&c='.$c.'&d='.$d.'">';
			echo '<area shape="rect" coords="0,432,480,867" alt="Results" href="result2.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.($d+1).'">';
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
   <footer>
</footer>
</body>
</html>