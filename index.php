<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Management System Login</title>
    <link rel="stylesheet" type="text/css" href="cmsstyle.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1 id='indexheading'>Content Management System Login</h1>
    <form class="form-horizontal" action="landing.php">
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="username">Username:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-dark" onclick='cmslogin();'>Submit</button>
            </div>
        </div>
    </form>
</body>

</html>