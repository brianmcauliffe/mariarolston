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
		
		<h5> Categories: <?php getCategories()?></h5>

		<h5> Category:  <?php echo($_REQUEST["catName"])?></h5>

		<h2> <?php getArticles($_REQUEST["categoryID"])?> </h2>
		  
			<?php  function getArticles($param) { 

				try 
				{
					$conn = new PDO('mysql:host=172.16.5.155;dbname=db1258859_maria', 'u1258859_root', 'domains4us');
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					if ($param >0)
					{
						$stmt = $conn->prepare('SELECT * FROM  `articles` INNER JOIN article_category_link ON articles.id = article_category_link.article_id WHERE article_category_link.category_id = :id');
						$stmt->execute(array('id' => $param));
					}
					else
					{
						$stmt = $conn->prepare('SELECT * FROM articles');
						$stmt->execute();
					}
					while($row = $stmt->fetch()) {
						echo('<a href="article.php?id=' . $row['ID'] . '">' . $row['TITLE'] . '</a>'); 
						echo('<BR>');
						echo($row['STAMP']);
						echo('<BR>');
						echo('-------------------------------------------------');
						echo('<BR>');
					}
				} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
				}
			}
			?>

			<?php  function getCategories() { 

				try 
				{
					$conn = new PDO('mysql:host=172.16.5.155;dbname=db1258859_maria', 'u1258859_root', 'domains4us');
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = $conn->prepare('SELECT * FROM categories');
					$stmt->execute();
					while($row = $stmt->fetch()) {
						echo '<a href="search.php?catName=' . $row['NAME'] . '&categoryID=' . $row['ID'] . '">' . $row['NAME'] . '</a>'; 
						echo('   ');
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







