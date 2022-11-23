<?php
	$Product_description = filter_input(INPUT_POST, 'product_description');
	$List_price = filter_input(INPUT_POST, 'list_price');
	$Discount_percent = filter_input(INPUT_POST, 'discount_percent');
	
        $discount = $List_price * $Discount_percent * 0.01;
        $discount_price = $List_price - $discount;
        
        $List_price_f = "$".number_format($List_price, 2);
        $Discount_percent_f = $Discount_percent."%";
        $discount_f = "$".number_format($discount, 2);
        $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($Product_description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($List_price_f); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($Discount_percent_f); ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    </main>
</body>
</html>