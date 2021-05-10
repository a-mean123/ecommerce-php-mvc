<div class="container admin bg-light">


    <div class="row mt-4">
    
    <div class="col-9">
        <h1 class="mt-4 text-info">All BLOGS:</h1>
    
    </div>

    <div class="col-3">
        <a href="index.php?controller=admin&action=createblog" class="btn btn-success text-light mt-4">Ajouter</a>
    </div>
    </div>

    <div class="row mt-5 mb-4">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Date</th>

      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_b as $c){
        $id = $c->getId();
        $img = $c->getImage();
       
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getTitre()."</td>"; 
        echo "<td>".$c->getDate()."</td>"; 

        echo "<td>".$c->getDescription()."</td>"; 
        echo "<td class='w-25'> <img class='w-25' src='assets/images/$img'>  </td>"; 
       
        echo "
        <td> <a class='btn btn-outline-info' href='index.php?controller=admin&action=read&id=$id'> Modifier </a> </td>
        <td> <a class='btn btn-outline-danger' href='index.php?controller=blog&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";

    }

    ?>




  </tbody>
</table>
 
    </div>



</div>



