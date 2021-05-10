
<div class="container">

<?php

$img = $u->getImage();
echo "

<div class='row  mx-auto mt-5'>
    <img src='assets/images/$img' class='mb-5 col-10 w-75 h-75' alt=''>

</div>

<div class='row mt-4'>
    <h1 class='lead mt-4 text-secondary'>".$u->getTitre()."</h1>
</div>

<div>
    <p class='lead mt-4'>" .$u->getDescription() ." </p>
</div>

";

?>



</div>