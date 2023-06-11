<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="./style/signup.css">
	<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Signup</title>
</head>
<body>
<section>
        <div class="form-box">
            <div class="form-value"></div>
				<form action="signup-check.php" method="POST">
					<h2>SIGNUP</h2>
                         <?php if (isset($_GET['error'])) { ?>
                              <div class="error">
                                   <p ><?php echo $_GET['error']; ?></p>
                              </div>
                         <?php }?>     
                         <?php if (isset($_GET['success'])) { ?>
                              <div class="success">
                                   <p ><?php echo $_GET['success']; ?></p>
                              </div>
                         <?php } ?>     
                         <div class="input-box">
                              <i class="lni lni-user" style="color: white"></i>
                              <?php if (isset($_GET['name'])) { ?>
                                   <input required 
                                          autocomplete="off" 
                                          name="name" 
                                          id="name" 
                                          type="text" 
                                          value="<?php echo $_GET['name']; ?>" 
                                   /> 
                              <?php } else { ?>
                                   <input required 
                                          autocomplete="off" 
                                          name="name" 
                                          id="name" 
                                          type="text" 
                                   />               
                              <?php } ?>
                                   <!-- <input required autocomplete="off" name="name" id="name" type="text" value="" /> -->
                              
                         <label for="">Name</label>
                         </div>
                         <div class="input-box">
                              <i class="lni lni-user" style="color: white"></i>
                              <?php if (isset($_GET['uname'])) { ?>
                                   <input required 
                                          autocomplete="off" 
                                          name="uname" 
                                          id="username" 
                                          type="text" 
                                          value="<?php echo $_GET['uname']; ?>" 
                                   /> 
                              <?php } else { ?>
                                   <input required 
                                          autocomplete="off" 
                                          name="uname" 
                                          id="uname" 
                                          type="text" 
                                   />               
                              <?php } ?>
                                   <!-- <input   autocomplete="off" name="uname" id="username" type="text"  /> -->
                           
                                   <!-- <input required autocomplete="off" name="uname" id="username" type="text" value="" /> -->
                            
                              <label for="">Username</label>
                         </div>
                         <div class="input-box">
                              <i class="lni lni-lock-alt" style="color: white"></i>
                              <input required  name="pass" id="password" type="password" >
                              <label for="">Password</label>
                         </div>
                         <div class="input-box">
                              <i class="lni lni-lock-alt" style="color: white"></i>
                              <input required name="re_pass" id="password" type="password" >
                              <label for="">Confirm Password</label>
                         </div>
                         <button type="submit">Signup</button>
                         <div class="register">
                              <p>
                                   Already have an account ?
                                   <a href="index.php">
                                        Login
                                   </a>
                              </p>
                         </div>
				</form>
			</div>
    	</div>
</section>
</body>
</html>