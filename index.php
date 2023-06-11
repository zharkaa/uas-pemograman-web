<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./style/login.css">
	<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>
<section>
        <div class="form-box">
            <div class="form-value"></div>
				<form action="login.php" method="POST">
					<h2>LOGIN</h2>

					<?php 
						if (isset($_GET['error'])) { 
					?>
						<p class="error">
							<?php echo $_GET['error']; ?>
						</p>
					<?php 
						} 
					?>
					<!-- <label for="">Username</label>
					<input type="text" name="uname" placeholder="Username"> <br>

					<label for="">Password</label>
					<input type="password" name="pass" placeholder="Password"> <br>
					<button type="submit">Login</button> -->

					<div class="input-box">
                        <i class="lni lni-envelope" style="color: white;"></i>
                        <input required autocomplete="off" name="uname" id="username" type="text" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" />
                        <label for="">Username</label>
                    </div>
                    <div class="input-box">
                        <i class="lni lni-lock-alt" style="color: white"></i>
                        <input name="pass" id="password" type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Login</button>
                    <div class="register">
                        <p>
                            Don't have a account ? 
                            <a href="signup.php">
                                Register
                            </a>
                        </p>
                    </div>
				</form>
			</div>
    	</div>
</section>
</body>
</html>