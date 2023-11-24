<?php

include 'config.php';
session_start();

$conn = new mysqli("localhost", "root", "", "kanaquiz");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM score WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "Stored Password: " . $row['password'] . "<br>";
        echo "Entered Password: " . $password . "<br>";
        if ($password === $row['password']) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: /kerja-project-daffaaa/.vscode/enquiz.php");
        } else {
            echo "<script>alert('Password salah.');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan.');</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="description" content="This is a login page template based on Bootstrap 5">
  <link rel="icon" href="Images/Jikoji Logo.png">
	<title>Jikoji | Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="images/Jikoji Logo Radius.png" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="username">Username</label>
									<input id="username" type="username" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
									 Username is invalid
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Password</label>
									</div>
									<input id="password" type="password" class="form-control" name="password" required>
								</div>

							
								<button type="submit" name="submit" class="btn btn-primary ms-auto">Login</button>
								<br><br>
                                <label class="text-muted" for="login">Belum memiliki akun?</label>	
                                <a href="/kerja-project-daffaaa/regist.php">buat akun Anda di sini</a>								
							</form>
						</div>
				
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2023 &mdash; Jikoji
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>