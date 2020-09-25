<?php
	include_once 'includes/dbcon.php';
?>

<!DOC TYPE html>

<html>
<head>
	<title></title>
</head>
<body>
<?php
$sql="SELECT * FROM jokees;";
	$result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
		while ($row = mysqli_fetch_assoc($result)) 
		{
			echo $row['joke_id'];
			echo $row['jokes']."<br>";
		
		}
	
		} 

 ?>
 
 
 
 </body>
 </html>
 
 

 