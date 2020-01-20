<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body id="register">
    <?php //include 'header.php';
    ?>
    <div id="mainbody">
        <div id="mainpanel">
            <div id="title">Register</div>
            <form class="form-horizontal" action="">
                <div class="form-group form-inline">
                    <label class="control-label col-sm-2" for="firstname">First Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="firstname" placeholder="First name" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lastname">Last Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="address">Address:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="telephone">Telephone Number:</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="telephone" placeholder="Telephone Number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default" onclick="register()">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php //include 'footer.php';
    ?>
    <script src="scripts/register.js"></script>
</body>

</html>