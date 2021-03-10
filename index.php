<!DOCTYPE html>
<html lang="en">
    <?php include("header.php") ?>
<body>
    <?php session_start(); ?>
    <?php if(isset($_SESSION['msg'])) { ?>

        <div class="alert alert-success w-75  text-center mx-auto my-5" style="font-size:20px;">
            <?=$_SESSION['msg']?>
        </div>
        
    <?php } ?>
    
    <?php if (isset($_SESSION['productInfo'])) { ?>
        <?php foreach ($_SESSION['productInfo'] as $key => $value) { ?>
            <?php if($value != null) { ?>
                <div class="alert alert-info w-75 text-center overflow-auto mx-auto my-5" style="font-size:20px;">
                    <?=$key." is ".$value?>
                </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <?php unset($_SESSION['msg']); ?>

    <?php include("footer.php") ?>
</body>
</html>


   

