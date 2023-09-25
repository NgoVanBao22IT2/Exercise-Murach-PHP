<?php include '../view/header.php'; ?>
<main>
        <h1>Category List</h1>
        <nav>
        <table>
        <tr>
                <td>Name</td>
            </tr>
        <?php foreach ($categories as $category) : ?>
            
            <tr>
            <td>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </td>
            <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_category">                  
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
        <?php endforeach; ?>
        </table>
       </nav>

    <h2>Add Category</h2>
    <form action="index.php" method="post" id="add_product_form">
    <input type="hidden" name="action" value="add_category">
        <label>Name:</label>
        <input type="text" name="category_id" />
        <input type="submit" value="Add" style="margin-left: 10px;" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_products">List Product</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>