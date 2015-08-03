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

		echo '<img src="imgs/q4.jpg" class="mainimage" alt="United Way Knoxville interactive game" border="0" usemap="#next"/>';
			echo '<map name="next">';
			  echo '<area shape="rect" coords="130,600,370,750" alt="Next" href="answers4.php?a='.$a.'&b='.$b.'&c='.$c.'&d='.$d.'">';
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