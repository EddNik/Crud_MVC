<?php {?>
<form action="../controller/updateData.php" method="post">
    <input type="text" name="firstName" placeholder="firstName" required><br/>
    <input type="text" name="lastName" placeholder="lastName" required><br/>
    <input type="text" name="hireDate"  required value="<?php echo $hireDate; ?>"><br/>
    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
    <input type="submit" class="btn btn-info">
</form>
    <?php }?>