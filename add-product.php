
<!DOCTYPE html>
<html lang="en">
<?php include("header.php") ?>
<body>
<h1 class="text-center py-5">Add product</h1>
<div class="container">
    <form action="handle-add-product.php" method="post">

        <div class="form-group">
            <input class="form-control" type="text" name="prodName" placeholder = "Enter product Name">
        </div>
        
        <div class="form-group">
            <textarea class="form-control" name="prodDesc" rows = 10 placeholder = "Enter Description Here"></textarea>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="prodPrice" placeholder = "Enter product Price">
        </div>

        <div class="form-group">
            <input class="form-control bg-primary text-white" type="submit" name="submit" value = "submit" placeholder = "Enter product Name">
        </div>


    </form>

    
    <?php session_start(); ?>
    <?php if(isset($_SESSION['error'])) { ?>
        <?php foreach ($_SESSION['error'] as $value) { ?>
                <div class="alert alert-danger"><?=$value?></div>
            <?php } ?>
        <?php } ?>
        <?php unset($_SESSION['error']); ?>
</div>




    <?php include("footer.php") ?>
</body>
</html>


