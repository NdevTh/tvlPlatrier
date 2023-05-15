<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
 require('db_connect.php');


// NEW ARTICLE 
	if (isset($_POST['new_article'])) {
		// receive all input values from the form
		$date = mysqli_real_escape_string($connection, $_POST['created_date']);
		$title = mysqli_real_escape_string($connection, $_POST['title']);
		$content = mysqli_real_escape_string($connection, $_POST['content']);
	

		// form validation: ensure that the form is correctly filled
		if (empty($date)) { array_push($errors, "Date is required"); }
		if (empty($title)) { array_push($errors, "Title is required"); }
		if (empty($content)) { array_push($errors, "Content is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
  $date = sqldate($date);
			$query = "INSERT INTO `articles` (create_at, title, contenu) 
					  VALUES('$date', '$title', '$content')";
			mysqli_query($db, $query);

			$_SESSION['title'] = $title ;
			$_SESSION['success'] = "Data has been saved ";
			header('location: articles.php');
		}

	}

function mydate($date) { 
        if ($date<>NULL) {  return date ('d/m/Y', strtotime($date)); } else { return ""; } 
        }

function sqldate($date)
        {
        if (trim($date) == "") {return "";  } 
        else {
         $date = str_replace('/', '-', $date);
        return date ('Y-m-d', strtotime(str_replace('/', '-', $date)));
        }
        }

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$email = mysqli_real_escape_string($connection, $_POST['email']);
		$password_1 = mysqli_real_escape_string($connection, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($connection, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO `user_login` (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($connection, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM user_login WHERE username='$username' AND password='$password' AND active=1";
			$results = mysqli_query($connection, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
$connection->close();
?>