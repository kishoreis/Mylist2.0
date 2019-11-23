<?php if(isset($_POST['sub'])) 
{
$txt1=$_POST['n1']; $txt2=$_POST['n2']; $oprnd=$_POST['sub'];
if($oprnd=="+")
$res=$txt1+$txt2; else if($oprnd=="-")
$res=$txt1-$txt2; else if($oprnd=="x")
$res=$txt1*$txt2; else if($oprnd=="/")
$res=$txt1/$txt2; }
?>
<html> 
<form method="post" action="">
Calculator </br>
<?php //$cmd = escapeshellcmd('/usr/bin/python3 /home/kishora/Downloads/Scrape.py-master/scrape2.py '.$contents);
  set_time_limit(500);
  $out= passthru('python3 /home/kishora/Downloads/Scrape.py-master/scrape2.py shirts');
  print_r($out);echo("success");?>
</form> 

</html>