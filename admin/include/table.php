<?php
include_once("../db/connect.php");

?>


<table class="table">
<thead>
<tr>
 <th scope="col">#</th>
 <th scope="col">Name</th>
 <th scope="col">Last Name</th>
 <th scope="col">Phone Number</th>
 <th scope="col">Message</th>
 <th scope="col">Manage</th>
</tr>
</thead>

<?php
        
$sql = 'SELECT * FROM tb_reservation ORDER BY id DESC;';
$result = mysqli_query($connect,$sql);


// --------------------------
while ($rows = mysqli_fetch_assoc($result)) {
  
?>

<tbody>
<tr>
    <th scope="row"><?php echo $rows['id']; ?></th>
    <td><?php echo  $rows['name'];?></td>
    <td><?php echo  $rows['lastname']; ?></td>
    <td><?php echo  $rows['phoneNumber']; ?></td>
    <td><?php echo  $rows['message']; ?></td>
    <td><form action="./index.php" method="GET">
    <input type="checkbox" name="delete" value="<?php $rows['id'] ?>" class="btn btn-danger"/>
    <button type="submit">DELETE</button>
</form>
</td>
    
    <?php 
            if(isset($_GET['delete'])){
        
                $delete_query = 'DELETE FROM tb_reservation WHERE id="id";';
                mysqli_query($connect, $delete_query);
    
                echo "ROW ID" . $rows["id"] ;
        } 
        
} 
    ?>

</tr>
</tbody>
</table>

<script>
</script>
