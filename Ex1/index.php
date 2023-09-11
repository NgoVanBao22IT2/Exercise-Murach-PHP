
<?php
	 // get the data from the form
     $product_description = filter_input(INPUT_POST, 'product_description');
     $list_price = filter_input(INPUT_POST, 'list_price');
     $discount_percent = filter_input(INPUT_POST, 'discount_percent');
     
     // calculate the discount and discounted price
     $discount = $list_price * $discount_percent * 0.1;
     $discount_price = $list_price - $discount;
 
     // apply currency formatting to the dollar and percent amounts
     $list_price_f = "$".number_format($list_price, 2);
     $discount_percent_f = $discount_percent."%";
     $discount_f = "$".number_format($discount, 2);
     $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <form action="./display_discount.php" method="POST">
        <table>
            <tr>
                <th colspan="2"><h1>Product Discount Calculator</h1>
                </th>
            </tr>
            <tr>
                <td><label for="">Product Decription:</label></td>
                <td><input name="product_description" type="text" ></td>
            </tr>
            <tr>
                <td><label for="">List Price:</label></td>
                <td><input name="list_price" type="text" ></td>
            </tr>
            <tr>
                <td><label for="">Discount Percent:</label></td>
                <td><input name="discount_percent" type="text" > %</td>
            </tr>
           
            <tr>
                <th colspan="2"><input name="submit" type="submit" value="Calculator Discount"></th>
            </tr>
        </table>
    </form>
    
</body>
</html>