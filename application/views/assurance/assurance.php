<?php
$array = json_decode(json_encode($detail), true);
 ?>
 <a href="/AssuranceVendor/index.php/User">Retour à l'index</a>
 <h1>Gestion des assurances</h1>

 <table class="bordered">
   <thead>
     <th>Marque</th>
     <th>Immatriculation</th>
     <th>Assurance id</th>
   </thead>
   <tbody>
     <tr>
       <?php foreach($array as $d){
       ?>
       <td><?php echo $d['marque'] ?></td>
       <td><?php echo $d['immat'] ?></td>
       <td><?php echo $d['id_assurance'] ?></td>
       <td><a class ="waves-effect waves-light btn" href="">Vendre une assurance</a></td>

     </tr>
     <?php } ?>
   </tbody>
 </table>
