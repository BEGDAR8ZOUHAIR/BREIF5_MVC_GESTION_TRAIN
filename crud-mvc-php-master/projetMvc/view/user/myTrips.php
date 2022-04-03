<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>trainspeed</title>
</head>
<body class="bg-light">
  <!-- /////////////// header ///////////////////// -->
<nav class="navbar navbar-light " style="background-color: #24edda;">
    <div class="container-xxl">
      <a href="http://localhost/projetmvc/user/index" class="navbar-brand  text-dark">TrainSpeed</a>
      <a href="http://localhost/projetmvc/user/index" class="nav-link link-secondary text-dark">back to home</a>
      </div>
    </div>
  </nav>  
  <!-- //////////////////////////////////// -->

  <div class="container w-100">
<table class="container mx-auto text-center my-5 shadow">
<tr>
  <th class="p-3 border bg-success text-white fw-bold">Depart stattion</th>
  <th class="p-3 border bg-success text-white fw-bold">Arrival station</th>
  <th class="p-3 border bg-success text-white fw-bold">Date Trip</th>
  <th class="p-3 border bg-success text-white fw-bold">Price</th>
  <th class="p-3 border bg-success text-white fw-bold">aviability place</th>
  <th class="p-3 border bg-success text-white fw-bold">action</th>
  <!-- <button class="btn"><i class="fa fa-trash"></i> Annule</button> -->
</tr>
<?php 

foreach($Trips as $Trip)
{

    echo "
    <tr class='border'>
              <td class='border p-2 bg-light fw-bold'> from : ".$Trip['departureStationTrip']."</td>
              <td class='border p-2 bg-light fw-bold'> to : ".$Trip['arrivalStationTrip']. "</td>
              <td class='border p-2 bg-light fw-bold'> date  : ".$Trip['dateTrip']."</td>
              <td class='border p-2 bg-light fw-bold'> price : ".$Trip['priceTrip']."dh"."</td>
              <td class='border p-2 bg-light fw-bold'>   ".$Trip['AvailableSeatsTrip']."</td>

              <td> <button class='btn btn-danger'> <a href='http://localhost/projetmvc/Trip/annuler/".$Trip['id']."' style='width:100%;hight:100%' class='text-decoration-none link-light'  >cancel</a></button> </td>

             
    </tr>
    ";
  
}
?>
</table>
</div>
  
</body>
</html>