<!DOCTYPE html>
<?php 
    require 'header.php';
    $resultofsearch = $_GET['search'];
    $names = array("zeinab", "refat", "khaled","mohamed");

    $check = "danger";
    for ($i=0; $i < 4; $i++) { 
        if ($resultofsearch == $names[$i]) {
            $check = "success";
            break;
        }
    }
?>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/StyleSheet.css" type="text/css" />

<div class="alert alert-<?php echo $check ?>" role="alert">
    <?php 
        if ($check == "success") {
            echo "The Name [$resultofsearch] You Search About Is In The Array Of Names";
        }else {
            echo "The Name [$resultofsearch] You Search About Isn't In The Array Of Names";
        }
    ?>
</div>