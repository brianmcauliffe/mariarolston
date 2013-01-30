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
	<h2> <?php echo myDatabase(1);?>  <?php echo myDatabase(2);?> <?php echo myDatabase(3);?> <?php echo myDatabase(4);?> <?php echo myDatabase(5);?><br>
	  
		<?php  function myTest() { 
			$sentence = ' - You are really sound';
			return $sentence; 
		}?>


		<?php  function myDatabase($param) { 

		try 
		{
			$conn = new PDO('mysql:host=localhost;dbname=maria', 'root', '');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//			$stmt = $conn->query('SELECT * FROM category');
			$stmt = $conn->prepare('SELECT * FROM category WHERE id = :id');
			$stmt->execute(array('id' => $param));
			while($row = $stmt->fetch()) {
				echo('<BR>');
				echo($row['NAME']);

			}
			} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
			}
		}
		?>
		
	</div>

<BR><BR>
<BR><BR>

</div>
</body> 
</html> 







