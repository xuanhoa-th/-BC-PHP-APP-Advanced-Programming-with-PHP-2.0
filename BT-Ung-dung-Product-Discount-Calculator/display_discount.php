<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="style2.css" />
    </head>
    <body>
        <?php 
            // echo '<pre>';
            //     print_r($_POST);
            // echo '</pre>';

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $description = $_POST["description"];
            $price = $_POST["price"];
            $discount_percent = $_POST["discount_percent"];
            $Discount_Amount = $price * $discount_percent*0.1;
            $Discount_Price = $price - $Discount_Amount;
        }
         ?>
        <div id="content">
            <?php { ?>
            <h1>Product Discount Calculator</h1>
            <label>Product Description: </label>
            <span><?php echo $description ?> </span><br/>

            <label>Price: </label>
            <span>$<?php echo $price ?></span><br/>

            <label>Discount Percent: </label>
            <span>%<?php echo $discount_percent ?></span><br/>

            <label>Discount Amount: </label>
            <span>$<?php echo $Discount_Amount ?></span><br/>

            <label>Discount Price: </label>
            <span>$0 <?php echo $Discount_Price ?> </span><br/>
        <?php } ?>
        </div>

        
    </body>
</html>