<?php
	 // get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');
    
    // calculate the discount and discounted price
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    // apply currency formatting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent."%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    table{
        border: 1px solid black;
        
    }
    th, td {
        border: 1px solid black;
        width: 300px;
        padding: 5px;
    }
    
   
</style>
<body>
<form >
        <table>
            <tr>
                <th colspan="2"><h1>Product Discount Calculator</h1>
                </th>
            </tr>
            <tr>
                <td><label for="">Product Decription:</label></td>
                <td><?php echo htmlspecialchars($product_description); ?></td>
            </tr>
            <tr>
                <td><label for="">List Price:</label></td>
                <td><?php echo htmlspecialchars($list_price_f); ?></td>
            </tr>
            <tr>
                <td><label for="">Standard Discount:</label></td>
                <td><?php echo htmlspecialchars($discount_percent_f); ?> %</td>
            </tr>
            <tr>
                <td><label for="">Discount Amount:</label></td>
                <td><?php echo $discount_f; ?> %</td>
            </tr>
            <tr>
                <td><label for="">Discount Price:</label></td>
                <td><?php echo $discount_price_f; ?> %</td>
            </tr>
        </table>
    </form>
 
</body>
</html>