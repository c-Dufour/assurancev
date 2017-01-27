<?php
$array = json_decode(json_encode($users), true);
$link_del = base_url("user/addUser/");
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)){
  $name = $_POST['name'];
  $email = $_POST['email'];
}
?>
<a href="/AssuranceVendor/index.php/Assurance/home">gestion des assurances</a>
<h1>Gestion des utilisateurs</h1>
<fieldset>
  <form class="" action="/AssuranceVendor/index.php/User/addUser" method="post">
    <input type="text" name="name" value="" placeholder="name">
    <input type="email" name="email" value="" placeholder="email">
    <input class="waves-effect waves-light btn" type="submit" name="" value="Submit">
  </form>
</fieldset><br>

 <table class="table">
     <thead>
       <th>Nom</th>
       <th>Date</th>
     </thead>
     <tbody>
       <?php

       foreach($array as $user){
         ?>
         <tr>
          <td><?php echo $user['name']; ?></td>
          <td><?php echo $user['email']; ?></td>
          <td><a href="/AssuranceVendor/index.php/Assurance/getAssurance?id=<?php echo $user['id']?>">Gérer ses assurances</a></td>
          <td><a href="/AssuranceVendor/index.php/User/updateUser?id=<?php echo $user['id']?>">Update</a></td>
          <td><a href="/AssuranceVendor/index.php/User/deleteUser?id=<?php echo $user['id']?>">Supprimer</a></td>
        </tr>

    <?php
  }
  ?>
    </tbody>
  </table>
