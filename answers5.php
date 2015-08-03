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

		echo '<img src="imgs/a5.jpg" class="mainimage" alt="interactive game page 10" border="0" usemap="#next"/>';
			echo '<map name="next">';
			echo '<area shape="rect" coords="0,0,238,430" alt="Next" href="result2.php?a='.($a+1).'&b='.$b.'&c='.$c.'&d='.$d.'">';
			echo '<area shape="rect" coords="238,0,480,431" alt="Next" href="result2.php?a='.$a.'&b='.($b+1).'&c='.$c.'&d='.$d.'">';
			echo '<area shape="rect" coords="0,430,238,867" alt="Next" href="result2.php?a='.$a.'&b='.$b.'&c='.($c+1).'&d='.$d.'">';
			echo '<area shape="rect" coords="238,431,480,867" alt="Next" href="result2.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.($d+1).'">';
			echo '</map>';
?>
   </section>
   <aside>
       <!-- Sidebar here -->
   </aside>
   <footer>
</footer>
</body>
</html>