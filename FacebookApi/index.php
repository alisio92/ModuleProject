<?php include_once("./php/facebookAPI.php"); ?>
<html>
<head>
</head>
<body>
<?php
    if(isset($sess)){
        ?>
        <p><?php echo $error; ?></p>
        <p>Hi <?php echo $name; ?></p>
        <p>your email is <?php echo $email; ?></p>
        <p><img src='<?php echo $image; ?>' /></p>
        <p><a href='<?php echo $logout; ?>'><button>Logout</button></a></p>
        <button type="button" name="method1" id="method1">Method 1</button>
        <button type="button" name="method2" id="method2">Method 2</button>
        <button type="button" name="method3" id="method3">Method 3(werkt niet)</button>
        <?php
    }else{
        ?>
        <p><a href="<?php echo $helper->getLoginUrl(array('email', 'publish_actions')); ?>" >Login with facebook</a></p>
        <?php
    }
?>
<script src="./javascript/jquery-1.2.6.min.js"></script>
<script src="./javascript/index.js"></script>
</body>
</html>


