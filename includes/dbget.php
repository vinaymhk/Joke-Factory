<!DOC TYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/bootstrap.css"/>
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<title></title>
</head>
<div class="card">
  <div class="card-header">
   <img src="../images/jf.png" class="rounded float-left" height="110" width="220"> 
   <p style="font-size:90px" class="text-xl-left">The Joke Factory</p>
  </div>

  </div>
 
<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php"style="font-size:50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="../add.php" style="font-size:50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Add Joke <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../get.php" style="font-size:50px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get Joke</a>
      </li>
     
    </ul>
    
  </div>
</nav>



  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style>

.active {
	list-style-type: none;
    margin: 0;
    padding-left: 30px;
    overflow: hidden;

}
</style>
&nbsp;


<body>
<?php
	include_once 'dbcon.php';

	

	if(isset($_POST['jok'])){
		$jok = $_POST['jok'];
	$sql="SELECT * FROM jokees where joke_id = ".$jok.";";
	$result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
	
?>

<table align="center" border="1px" style="width:600px; line-height:40px;">
	<tr>
		<th colspan="4"><h2>Jokes</h2></th>
	</tr>
	<t>
		<th> Joke_Id </th>
		<th> Joke </th>
	</t>
	<?php
		while ($row = mysqli_fetch_assoc($result)) 
		{
	?>
		<tr>
			<td><?php echo $row['joke_id']; ?></td>
			<td><?php echo $row['jokes']; ?></td>
		</tr>
	<?php
		}
		}
		
	
			
	else{
	   echo 'There are no results with the query';
		}
	mysqli_close($conn);
	}
	else
	{
	echo 'not a valid input';
	?>
	 <form action="dbget.php" method="GET">
     <input type="text" name="jok" placeholder="joke">
     <br>
     <button type="submit" name="submit"> Submit</button>
     </form>
	<?php
	}?>
</body>
</html>