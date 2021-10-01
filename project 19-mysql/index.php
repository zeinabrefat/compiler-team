<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zeinab Refat-third-php</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/styleSheet.css" >
</head>
<body>
	<!--this is a header-->
        <?php require 'header.php'?>
    <!--this is a header-->
    <!--form-->
        <form class="for" method="GET" action="form.php">
            <div class="mb-3">
                <label for="exampleInputname" class="form-label">User name</label>
                <input name="userName" type="text" class="form-control" id="exampleInputname">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword" aria-describedby="emailPassword">
                <div id="emailHelp" class="form-text">We'll never share your password with anyone else.</div>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    <!--form-->
    
    <script type="text/javascript"href="js/bootstrap.js"></script>
</body>
</html>
