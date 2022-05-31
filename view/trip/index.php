<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      @media (max-width: 1200px) {
        body {
          font-size: 14px;
        }
        .btn {
          font-size: 14px;
          padding:5px 10px;
        }
      }
      @media (max-width: 990px) {
        body {
          font-size: 10px;
        }
        .btn {
          font-size: 10px;
          padding:4px 8px;
        }
      }
      @media (max-width: 600px) {
        body {
        font-size:8px;
        }
        .btn {
          font-size: 8px;
          padding:3px 6px;
        }
        .navbar-brand {
          font-size:14px;
        }
      }
      @media (max-width: 500px) {
        body {
        font-size:6px;
        }
        .btn {
          font-size: 6px;
          padding:2px 4px;
        }
        .navbar-brand {
          font-size:10px;
        }
      }
      @media (max-width: 400px) {
        body {
        font-size:5px;
        }
        .btn {
          font-size: 5px;
          padding:1.5px 3px;
        }
        .navbar-brand {
          font-size:8px;
        }
      }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-xxl">
      <a href="http://localhost/trains/Trip" class="navbar-brand text-white">Zouhair speed</a>
      <div class='d-flex'>
        <a href="http://localhost/trains/trip/logout" class="nav-link text-white">log out</a>
      </div>
      </div>
    </div>
  </nav>
  <section style="min-height: calc(100vh - 56px - 56px);" class="py-5 text-center">
    <div class="container">
      <table class="table table-striped rounded ">
        <?php if($Trips != false ) { ?>
          <tr class='py-4'>
    <th id="pokos">id</th>
    <th>departure station</th>
    <th>arrival station</th>
    <th>date</th>
    <th>price</th>
    <th>available Seats</th>
    <th>Action</th>
    <th>Action</th>
  </tr>
  <?php }else { ?>
    <img class="img-fluid" style='width:300px;border-radius:250px' src="https://cdn.dribbble.com/users/2698098/screenshots/5957957/media/6a4be3f4baaafe31276133fa9de7c0f0.jpg" alt="">
    <p class="mt-4 fs-2 text fw-bolder">no result found</p>
    <?php } ?>
  <?php  
  foreach ($Trips as $Trip) 
  {
  	echo "<tr>
    <td>".$Trip['id']."</td><td>".$Trip['departureStationTrip']."</td>
    <td>".$Trip['arrivalStationTrip']. "</td>
    <td>".$Trip['dateTrip']."</td>
    <td>".$Trip['priceTrip']."dh"."</td>
    <td>".$Trip['AvailableSeatsTrip']."</td>";
  ?>
    <!-- <td>
    <button class='btn btn-danger'> 
    <a style='width:100%;hight:100%' class='text-decoration-none link-light' href='http://localhost/trains/Trip/delete/<?php echo $Trip['id'] ?>'>delete</a>
    </button>
    </td> -->

    <td> <button class='btn btn-success'> <a class='text-decoration-none link-light' href='http://localhost/trains/Trip/edit/<?php echo $Trip['id'] ?>'>edit</a></button></td>

    <?php if($Trip['status'] == 'active') { ?>
    <td> <button class='btn btn-danger'> <a class='text-decoration-none link-light' href='http://localhost/trains/Trip/cancel/<?php echo $Trip['id'] ?>'>on</a></button></td>
  	</tr>
    <?php }?>

    <?php if($Trip['status'] == 'notActive') { ?>
    <td> <button class='btn btn-primary'> <a class='text-decoration-none link-light' href='http://localhost/trains/Trip/activate/<?php echo $Trip['id'] ?>'>off</a></button></td>
  	</tr>
    <?php }?>

    <?php }?>
</table>
<button class=" btn btn-primary">
  <a class="d-flex gap-1 align-items-center text-decoration-none link-light" href='http://localhost/trains/Trip/create'><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg> add new trip</a>
</button>
    </div>
  </section>
  <footer>
    <div class="text-center p-3 bg-secondary text-white">
    © 2023-2026, zouhair speed.com, Inc.
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
