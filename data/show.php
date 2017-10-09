


<?php 
	include "db.php";

	$sql="SELECT * FROM inf ";
	$result=$con->query($sql);


 ?>
 <?php include 'head.php'; ?>
<div class="col-md-offset col-md-6" id="himu">
  <table class="table table-bordered">
  <thead>
      <tr>
        <th>Username</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
    <?php while ($d=$result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $d["username"]; ?></td>
      <td><?php echo $d["password"]; ?></td>
    </tr>
    <?php } ?>
	</tbody>
</table>
</div>
</body>
</html>
 