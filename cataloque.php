<html>
<head>
<title> Catalogue Page</title>
</head>
<body>
<table width="100%" height="100%" border="1">
	<thead>
		<tr> 
			<td>Image </td>
			<td>Title</td>
			<td>Author</td>
			<td>Publication</td>
			<td>Price</td>
			<td>cart</td>
		</tr>
	</thead>
	<?php
	$con = mysqli_connect("localhost","root","","workspacephp");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }	
	$query = "SELECT * FROM `books`";
	$res  = mysqli_query($con,$query);
	if(mysqli_num_rows($res)==0)
		{
			$message= "No Publictions";
			
			
		}else { while($row = mysqli_fetch_assoc($res)) { 

	?>
		<tbody>
		<tr class="table-info"> 
		<td><img src="<?php echo $row['image']; ?>"  height="100" width="100" alt="" title="<?php echo $row['image']; ?>"/> 
		<td><?php echo $row['title'];?></td>
		<td><?php  echo $row['author'];?> </td>
		<td><?php  echo $row['publication'];?> </td>
		<td><?php  echo $row['price'];?> </td>
		<td><button type="submit" class="registerbtn" >Add to cart</button></td>
		</tr>
		
		<?php }}	?>
		</tbody>
		</table>

<?php /*<table width="100%" height="100%" border="1">
<tr>
<td><img src="xml.jpg" height="100" width="100"/></td>
<td>Book: XML Bible
<br>Author: Winston
<br>Publication: Wiely</td>
<td>$40.5</td>
<td><button type="submit" class="registerbtn" >Add to cart</button></td>
</tr>
<tr>
<td><img src="./ai.jpg" height="100" width="100"/></td>
<td>Book: AI
<br>Author: S.Russel
<br>Publication: Princeton hall</td>
<td>$63</td>
<td><button type="submit" class="registerbtn" >Add to cart</button></td>
</tr>
<tr>
<td><img src="./java.jpg" height="100" width="100"/></td>
<td>Book: Java 2
<br>Author: Watston
<br>Publication: BPB publications</td>
<td>$35.5</td>
<td><button type="submit" class="registerbtn" >Add to cart</button></td>
</tr>
<tr>
<td><img src="./html.jpg" height="100" width="100"/></td>
<td>Book: HTML in 24 hours
<br>Author: Sam Peter
<br>Publication: Sam publications</td>
<td>$100</td>
<td><button type="submit" class="registerbtn" >Add to cart</button></td>
</tr>
</table>*/
?>
</body>
</html>