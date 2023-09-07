<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body{
            background-color: lightgrey;
            display:flex;
            justify-content:center;
            align-items:center;
            margin:20%;
            gap:10px;
        }
        .container{
            display:flex;
            background-color:white;
            padding:20px;
            border-radius:3px;
           
        }
        .form{
            gap:10px;
        }
    </style> -->
</head>
<body>
    <?php
        if(isset($_GET['submit'])){
            $email2 = $_GET['email2'];
            $emailRegex = "/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
            if(preg_match($emailRegex, $email2)){
                echo "valid : sign completed insert to db";
            }else{
                echo "Invalid Email2";
            }
        }
    ?>

    <div class="container">
        <form action="" method="get"  onsubmit="return validateform()" id="form">
            <div>signup</div>
            <div>Username : <br> <input type="text" name="un" id="un" required minLength="5"></div>
            <div>Password : <br> <input type="password" name="pwd" id="pw" required></div>
            <div>Email1 : <br> <input type="email" name="email1" id="email1" required></div>
            <div>Email2 : <br> <input type="text" name="email2" id="email2" required></div>
            <div id="error" style="background-color:red;"></div>
            <div><input type="submit" value="signup" name="submit" style="float:;"></div>
        </form>
    </div>

    <script>
        function validateform(){

            var email = document.getElementById("email2").value;
            var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        if (emailRegex.test(email)) {
            return true;
        }else {
            document.getElementById("error").innerHTML="invalid email";
            return false;
        } 
        }
    </script>
</body>
</html>




