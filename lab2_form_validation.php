<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get"  onsubmit="return validateform()">
        <div>signup</div>
        <div>Username : <input type="text" name="un" id="un" required></div>
        <div>Password : <input type="password" name="pwd" id="pw"></div>
        <div>Email1 : <input type="email" name="email1" id="email1"></div>
        <div>Email2 : <input type="text" name="email2" id="email2"></div>
        <div id="error"></div>
        <div><input type="submit" value="signup"></div>
    </form>

    <script>
        function validateform(){

            var email = document.getElementById("email2").value;
            // const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var emailRegex = /[A-Za-z0-9]+ @[A-Za-z0-9]+.[A-Za-z]{2,3}/;
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