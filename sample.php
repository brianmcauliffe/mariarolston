<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<meta name="google-site-verification" content="O73QCE7dRioy-TTqk7tEYSpwVKXeJSL52Vr3wOhQGys" />
<title>Maria Rolston - Journalist, Mother, Superstar</title> 
<link href="style.css" rel="stylesheet" type="text/css" /> 
</head> 
 
<body> 
<div id ="page">
  <div id="banner"> 
	<h1>Maria Rolston</h1> 
  </div> 
  <div id="navbar"> 
	<ul> 
	  <li><a href="index.htm">Home</a></li> 
	  <li><a href="blog.htm">blog</a></li> 
	  <li><a href="aboutme.htm">about me</a></li> 
	  <li><a href="search.php?catName=All&categoryID=0">articles</a></li> 
	</ul> 
  </div> 

	  
	<div id="content"> 
	  <h2> Welcome <?php echo $_REQUEST["thebox"]; echo mySentence();?>!<br>
	  
		<?php  function mySentence() { 
			$first = substr($_REQUEST["thebox"], 0, 1); 
			$sentence = ' - You are really sound';
			if ($first == 'a' || $first == 'A') {
				$sentence = ' - You are great.';
			}else
			if ($first == 'b' || $first == 'B') {
				$sentence = ' - You are an honest person. I Like that - keep it up..';
			}else
			if ($first == 'c' || $first == 'C') {
				$sentence = ' - Someone like you is pretty hard to beat. Nice work.';
			}else
			if ($first == 'd' || $first == 'D') {
				$sentence = ' - You have a great sense of humour, ha ha ha. Good job.';
			}else
			if ($first == 'm' || $first == 'M') {
				$sentence = ' - You are the Best.. well done.';
			}else			
			if ($first > 'e' && $first < 'p') {
				$sentence = ' - e to p';
			}else
			if ($first > 'o' && $first <'z') {
				$sentence = ' - o - z.';
			}
			return $sentence; 
		}?>
	</div>

<BR><BR>
<BR><BR>

</div>
</body> 
</html> 







