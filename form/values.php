<form method="POST" action="values.php">
    <input type="text" name="product_id">
    <select name="category">
        <option value="ovenmitt">냄비받침</option>
        <option value="fryingpen">프라이팬</option>
        <option value="torch">주방토치</option>
    </select>
    <input type="submit" value="제출">
</form>

product_id:<?php print $_POST['product_id'] ?? ''?>
<br />
category: <?php print $_POST['category'] ?? ''?>