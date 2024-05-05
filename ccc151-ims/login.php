<?php
    session_start();
    include("connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
    

    if(!empty($username) && ($password)){
        $query = "select * from users where username = '$username' limit 1";
        $result = mysqli_query($con, $query);

        if ($result){
            if($result && mysqli_num_rows($result) > 0 ){
                $user_data = mysqli_fetch_assoc($result);

                if($user_data['password'] == $password){
                    header("location: product-copy.php");
                    die;
                }
            }
        }
            echo "<script type='text/javascript'> alert('Login unsuccessful. Please check username or password.') </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <title>IMS</title>
    </head>

    <body> 
        <div class="container" id="container">

            <div class="form-container sign-in">
                <form method="POST">
                    <h1>Sign in</h1>
                    <p class="sub-head">Login to your account.</p>
                    
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    
                    <button ype="submit" value="Login">Login</button>
                </form>
            </div>
            

            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                    </div>
                
                    <div class="toggle-panel toggle-right">
                        <h1>Welcome!</h1>
                        <p>Minute Run Convenience Store</p>
                        
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>