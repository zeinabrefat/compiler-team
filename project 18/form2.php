<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/styleSheet.css" >
</head>
<body>
    <?php require 'header.php'?>
	<form class="for" method="$GET" action="filedata.php">
		<div class="mb-3">
            <label for="exampleInputname" class="form-label">Enter name of the product</label>
            <input name="nameOfProduct" type="text" class="form-control" id="exampleInputname">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Enter number of the product</label>
            <input name="numberOfProduct" type="text" class="form-control" id="exampleInputname">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Enter color of the product</label>
            <input name="colorOfProduct" type="text" class="form-control" id="exampleInputname">
        </div>
            <button type="submit" class="btn btn-primary">Add</button>

	</form>
</body>
</html>
