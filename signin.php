<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body id="signin">
    <?php //include 'header.php';
    ?>
    <div id="mainbody">
        <div id="leftpanel">
            <div id="registerlinkbutton"><a href='register.php'>Register ></a></div>
        </div>
        <div id="rightpanel">
            <div id="title">Sign In</div>
            <form class="form-horizontal" action="">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php //include 'footer.php';
    ?>
    <script src="scripts/signin.js"></script>
</body>

</html>