<?php
$pass_status="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg=$_POST['regnum'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    if (empty($reg) || empty($password)|| empty($password2)) {
        echo "empty data";
    } else {
        if($password != $password2){
            $pass_status="password doesn't match";
        }else{

            $conn = new mysqli('127.0.0.1','root','','cut_voting');
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $query = "INSERT INTO admin (regnum, password) VALUES ('$reg', '$password')";
            if ($conn->query($query) === TRUE) {
                //$_SESSION['user']=$row['regnum'];
                 header("Location: index.php?  login=Successfully Create Account and Logged in");
                 echo '<script src="sweetalert.min.js"></script>';

                
            }
            else{
                echo ' <script> alert ("Error occurred whilst creating an account \n User with the same credentials may already exist")</script>';            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>CUT Election System</title>
    <link rel="shortcut icon" href="./../images/cut_logo.png" type="image">   
    <link rel="stylesheet" href="login_style.css?v=<?php echo time(); ?>">
</head>
<body style="opacity: 0.9;">
    <main class="container">
        <h2>Create Admin Account</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return submitForm(this);">
            <div class="input-field">
                <input type="text" name="regnum" id="regnum"
                    placeholder="Enter your ID">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Enter your password">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="password" name="password2" id="password2"
                    placeholder="Re-enter your password">
                <div class="underline"></div>         
            <div class="input-field">
                <p style="color:red; font-size: 0.8rem;font-style: italic;"><?php echo($pass_status) ?></p>
            </div>

            <input type="submit" value="Create">
        </form>

        <script src="sweetalert.min.js"></script>
        
        <script>
        function submitForm(form) {
        swal({
         text: "Account created succesfully \n You can now log in",
         icon: "success",
         button: true,
         timer: 2000,
         
        })
        .then(function (isOkay) {
            if (isOkay) {
                form.submit();
            }
        });

    }
</script>
            <div class="footer">
            <a href="index.php"><p style="color:#000026;">Back to login</p></a>
            <br>
            <a href="index.php" style="color:#bf0040;text-decoration:none;">Cancel</a>
        </div>
    </main>
</body>
</html>