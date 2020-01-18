<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body id="signin">
    <?php //include 'header.php';?>
    <div id="mainbody">
        <div id="leftpanel">
            <div id="registerlinkbutton"><a href='register.php'>Register ></a></div>
        </div>
        <div id="rightpanel">
            <div id="title">Sign In</div>
            <form>
                Email: <br>
                <input id="email" type="email" name="email"><br> <br> Password: <br>
                <input id="password" type="password" name="password"><br>
                <button type="button" onclick="signin()">Sign In</button>
            </form>
        </div>
    </div>
    <?php //include 'footer.php';?>
    <script src="scripts/signin.js"></script>
</body>

</html>