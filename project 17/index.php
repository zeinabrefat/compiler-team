<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Zeinab Refat-Second-php</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/StyleSheet.css" type="text/css" />
</head>
<body>
    <!--this is a header-->
        <?php require 'header.php'?>
    <!--this is a header-->
    <!--form-->
        <form class="for" method="GET" action="form.php">
            <div class="mb-3">
                <label for="exampleInputname" class="form-label">Name</label>
                <input name="Name" type="text" class="form-control" id="exampleInputname">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                <label for="exampleInputdate"class="form-label">Date</label>
                <input name="date" placeholder="Select date" type="Datetime-local" id="example" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    <!--form-->
    
    <script type="text/javascript"href="js/bootstrap.js"></script>
</body>
</html>