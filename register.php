
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body id="register">
    <?php //include 'header.php';?>
    <div id="mainbody">
        <div id="mainpanel">
            <div id="title">Register</div>
            <form>
            First Name:
            <input id="firstname" type="text" name="firstname"><br> <br> Last Name:
            <input id="lastname" type="text" name="lastname"><br> <br> Email: 
            <input id="email" type="email" name="email"><br> <br> Password: 
            <input id="password" type="password" name="password"><br> <br> Address:
            <input id="address" type="text" name="address"><br> <br> Telephone: 
            <input id="number" type="tel" name="number"><br>
            <button type="button" onclick="register()">Register</button>
        </form>
</div>
        
    </div>
    <?php //include 'footer.php';?>
    <script src="scripts/register.js"></script>
</body>

</html>