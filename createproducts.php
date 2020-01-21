<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product Entry</title>
    <link rel="stylesheet" type="text/css" href="cmsstyle.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1>Create Product Entry</h1>
    <?php include 'cmsnavbar.php';?>
    <p>Enter the details of a new product here and click Submit to add it to the database</p>
    <form class="form-horizontal" action="landing.php">
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="id">ID:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id" placeholder="ID">
            </div>
        </div>
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="name">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
        </div>
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="color">Color:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="color" placeholder="Color">
            </div>
        </div>
        <div class="form-group form-inline">
            <label class="control-label col-sm-2" for="price">Price:</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="price" placeholder="Price">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>

