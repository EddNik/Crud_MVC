<?php {?>
<form action="../controller/insertData.php" method="post">
    <input type="text" name="firstName" placeholder="firstName" required><br/>
    <input type="text" name="lastName" placeholder="lastName" required><br/>
    <input type="text" name="hireDate"  value="<?php echo $hireDate ?>"><br/>
    <input type="submit">
</form>
    <?php }?>