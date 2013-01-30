<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
		<meta name="google-site-verification" content="O73QCE7dRioy-TTqk7tEYSpwVKXeJSL52Vr3wOhQGys" />
		<title>Maria Rolston - Journalist, Mother, Superstar</title> 
		<link href="style.css" rel="stylesheet" type="text/css" /> 
	</head> 
 
	<body> 
		<div id="page">
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

			  
			<div id="title"> 
				 <h2><?php getArticleTitle($_REQUEST["id"])?></h2>
			</div>
			<div id="abcd">	
				  <h4><?php getArticleDetails($_REQUEST["id"])?></h4>
			</div>		
					<?php  function getArticleDetails($param) { 

					try 
					{
						$conn = new PDO('mysql:host=172.16.5.155;dbname=db1258859_maria', 'u1258859_root', 'domains4us');
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$stmt = $conn->prepare('SELECT * FROM articles WHERE id = :id');
						$stmt->execute(array('id' => $param));
						while($row = $stmt->fetch()) {
							echo($row['STAMP']);
							echo('<BR>');
							echo('<BR>');
							//echo(wordwrap($row['BODY'],10,"\n",true));
							echo($row['BODY']);
						}
						} catch(PDOException $e) {
						echo 'ERROR: ' . $e->getMessage();
						}
					}
					?>

					<?php  function getArticleTitle($param) { 

					try 
					{
						$conn = new PDO('mysql:host=172.16.5.155;dbname=db1258859_maria', 'u1258859_root', 'domains4us');
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$stmt = $conn->prepare('SELECT * FROM articles WHERE id = :id');
						$stmt->execute(array('id' => $param));
						while($row = $stmt->fetch()) {
							echo($row['TITLE']);
						}
						} catch(PDOException $e) {
						echo 'ERROR: ' . $e->getMessage();
						}
					}
					?>
					
		</div>
	</body> 
</html> 







