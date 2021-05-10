<div class="container p-2 my-5  bg-light">

<form method="POST" class="mt-4 p-5" action="index.php?controller=blog&action=created" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Titre de l'article</label>
    <input type="text" name="titre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description de l'article</label>
    <input type="text" name="description"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputImage">Image</label>
    <input type="file" name="image"  class="form-control" id="exampleInputImage">
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>