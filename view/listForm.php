<?php {?>

<table border="1px">
   <td>
        <a href="../controller/insertData.php?">Insert data</a>
    </td>
    <?php

    foreach ($result as $col) { ?>
<tr>
    <td> <?php echo $col['firstName']; ?>  </td>
    <td> <?php echo $col['lastName']; ?></td>
    <td> <?php echo $col['hireDate']; ?> </td>
    <td>
        <a href="../controller/updateData.php?id=<?php echo $col['id']?>">Update</a>
    </td>
    <td>
        <a href="../controller/deleteData.php?id=<?php echo $col['id']?>">Delete</a>
    </td>
</tr>
    <?php }?>
    <?php }?>
</table>
