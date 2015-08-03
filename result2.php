<!doctype html>
<html>
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
?>

<?php

if ($_GET['a'] >= 3) {
  ?><meta http-equiv="Refresh" content="0;url=a1.php"><?php
}
elseif ($_GET['b'] >= 3){
  ?><meta http-equiv="Refresh" content="0;url=a2.php"><?php
}
elseif ($_GET['c'] >= 3){
  ?><meta http-equiv="Refresh" content="0;url=a3.php"><?php
}
elseif ($_GET['d'] >= 3){
  ?><meta http-equiv="Refresh" content="0;url=a4.php"><?php
}
elseif (($_GET['a'] >= 2) && ($_GET['b'] == 1) && ($_GET['c'] == 1) && ($_GET['d'] == 1)){
  ?><meta http-equiv="Refresh" content="0;url=a1.php"><?php
}
elseif (($_GET['a'] == 1) && ($_GET['b'] >= 2) && ($_GET['c'] == 1) && ($_GET['d'] == 1)){
  ?><meta http-equiv="Refresh" content="0;url=a2.php"><?php
}
elseif (($_GET['a'] == 1) && ($_GET['b'] == 1) && ($_GET['c'] >= 2) && ($_GET['d'] == 1)){
  ?><meta http-equiv="Refresh" content="0;url=a3.php"><?php
}
elseif (($_GET['a'] == 1) && ($_GET['b'] == 1) && ($_GET['c'] == 1) && ($_GET['d'] >= 2)){
  ?><meta http-equiv="Refresh" content="0;url=a4.php"><?php
}
elseif (($_GET['a'] == 1) && ($_GET['b'] == 1) && ($_GET['c'] == 1) && ($_GET['d'] == 1)){
  ?><meta http-equiv="Refresh" content="0;url=answers5.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}
elseif (($_GET['a'] == 2) && ($_GET['b'] == 2)){
  ?><meta http-equiv="Refresh" content="0;url=answers51.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}
elseif (($_GET['a'] == 2) && ($_GET['c'] == 2)){
  ?><meta http-equiv="Refresh" content="0;url=answers52.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}
elseif (($_GET['a'] == 2) && ($_GET['d'] == 2)){
  ?><meta http-equiv="Refresh" content="0;url=answers53.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}
elseif (($_GET['b'] == 2) && ($_GET['c'] == 2)){
  ?><meta http-equiv="Refresh" content="0;url=answers54.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}
elseif (($_GET['b'] == 2) && ($_GET['d'] == 2)){
  ?><meta http-equiv="Refresh" content="0;url=answers55.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}
elseif (($_GET['c'] == 2) && ($_GET['d'] == 2)){
  ?><meta http-equiv="Refresh" content="0;url=answers56.php?<?php echo 'a='.$a.'&b='.$b.'&c='.$c.'&d='.$d; ?>"> <?php
}



?>

<?php include_once("head.php") ?>
<body>
 
<?php include_once("analyticstracking.php") ?>

   <header>
       <h1></h1>
       <nav>
       </nav>
   </header>

   <section>

   </section>
   <aside>
       <!-- Sidebar here -->
   </aside>
   <footer></footer>
 
</body>
</html>