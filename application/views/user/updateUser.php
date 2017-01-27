<?php
$array = json_decode(json_encode($user), true);
?>
<h1>Update </h1>
<?php foreach($array as $d){
?>
<form class="" action="/AssuranceVendor/index.php/User/update" method="post">
  <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
  <input type="text" name="name" value="" placeholder="<?php echo $d['name']; ?>">
  <input type="email" name="email" value="<?php echo $d['email']; ?>" placeholder="">
  <input type="submit" class="waves-effect waves-light btn" value="Update">
</form>
<?php
}
?>
