<?php include('header.php') ?>
	<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
	   	<link href="styles/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="styles/mystyle.css">
        <link rel="stylesheet" href="styles/font-awesome.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 
	<style> 
		.header{
    		height:43px;
    		}

		* { font-family: Helvetica, sans-serif; font-size: auto; letter-spacing: 0.5px; }
div.scroll { 

                margin:4px, 4px; 
                padding:4px; 
                background-color: green; 
                width: auto ; 
                height: 300px; 
                overflow-x: hidden; 
                overflow-x: auto; 
                text-align:justify; 

            } 
.imgleftp {
 
  width: auto;
  height: auto;
  object-fit: cover;
  float: left;
  margin-right: 20px;
  max-width:20%;
  max-height:20%;
}
.imgnormal {
 
  width: 100%;
  height: 100%;
  float: none;
}

.imgrightp {
 
  width: auto;
  height: auto;
  object-fit: cover;
  float: right ;
  margin-right: 20px;
  max-width:20%;
  max-height:20%;
}
.subnav {
		margin: 20px auto 0px;
		
		height: 65px;
	color: white;
	background: gray;
	padding: 5px 2px 5px 2px;
}
		
.headerarticle {
		margin: 20px auto 0px;
		
		height: 50px;
	color: white;
	background: #4CAF50;
	text-align: center;
		
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	
}
		form, .container {
	min-width:50%;
 min-height:200px;
	margin: 0px auto;
	padding: 20px;
	border: 1px solid #B0C4DE;
	background: white;
	border-radius: 0px 0px 10px 10px;
}
		.input-group {
	margin: 10px 0px 10px 0px;
}

.input-group label {
	display: block;
	text-align: left;
	margin: 3px;
}
.input-group input {
	height: 30px;
	width: 80%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}
.btn {
		margin-top:5px;
margin-bottom:5px;
 margin-left:5px;
	padding: 10px;
	font-size: 15px;
	color: white;
	background: #5F9EA0;
	border: none;
	border-radius: 5px;
		text-transform: uppercase;
}

.error {
	width: 92%; 
	margin: 0px auto; 
	padding: 10px; 
	border: 1px solid #a94442; 
	color: #a94442; 
	background: #f2dede; 
	border-radius: 5px; 
	text-align: left;
}
.success {
	color: #3c763d; 
	background: #dff0d8; 
	border: 1px solid #3c763d;
	margin-bottom: 20px;
}


 </style>
</head>
<body>
	
	


	<div class="header">
		
	</div>
	<div class="w3-bar w3-light-gray">
		<div class="w3-bar w3-black">
			<button class="btn"><a href="employeei.php" style="color: blue;text-decoration: none;">AJOUTER</a>	</button>
			<button class="btn"><a href="index.php" style="color: blue;text-decoration: none;">RETOURNER</a>	</button>
	</div>

	
					<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Bienvenue <strong><?php echo $_SESSION['username']; ?></strong>
			<a href="index.php?logout='1'" style="color: red;">DÉCONNEXION</a> </p>
		<?php endif ?>
		
		 <!-- Propos Section -->      
            
 
    	  
            
 </div>
		
		<script type="text/javascript" >
     	function viewArticle(id){
     	   alert ("Article id : " + id);
     	   window.location.replace ("employeee.php?id=" + id);
     	}
		</script>    
    
		

		  <div style="clear:both;">
		  	
	</div>
						    
				        <?php


// Create connection
    		require('db_connect.php');
//$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT id, first_name, last_name, email, telephone, image_url, job, Description FROM employee ORDER BY id desc;";
$result = $connection ->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " <div onclick='viewArticle(".$row["id"].");' style='clear:both;'> 	<div class='headerarticle'><h2>" . $row["first_name"]." ". $row["last_name"]."</h2> </div><div class='container'><button class='btn'><a href='employeee.php?id=" .$row["id"]." style='color: blue;text-decoration: none;'>MODIFIER</a></button><br/> " ;
    
echo "<div class='w3-card'>";
echo "<img src='". $row["image_url"]."' alt='". $row1["first_name"]."' style='width:100%'>";
echo "</div>";
echo "<i class='fa fa-envelope'></i>". $row["email"]."<br/>";
echo "<i class='fa fa-phone-square'></i>". $row["telephone"]."<br/>";
echo "<p class='w3-opacity'>" . $row["job"]. "</p>";
echo "<p>". $row["Description"]. "</p>";
 
    echo "</div></div>";
  }
} else {
  echo "0 results";
}
$connection ->close();
?> 
				    
		
	</div>
     <?php include('footer.php') ?>
	</body>
	
</html>  
    
   
    