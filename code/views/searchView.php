<?php 

require 'search.php';


$searchTravels = new Search;

 $result = $searchTravels -> getTravels();


foreach ($result as $travel){
?>


<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><?php echo $travel[start_station];  ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>






<?php
}
    



?>