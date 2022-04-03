<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>trainspeed</title>
    <style>   
      .footer {
        background-color: rgba(0, 0, 0, 0.2);
      }
      .imageBackgound{
        background-image: url("https://media.istockphoto.com/photos/train-picture-id903338678?k=20&m=903338678&s=612x612&w=0&h=16f7fAXKQY3WUK0hiaRFweBM8Dpv7XznA8vZgWgcnas=");
        background-size: cover;
        background-position: center;
        /* background-size: cover; /////////no repeat////// */
      }
      @media(max-width: 600px){
        .form{
          margin-right: 9rem;
        }
        .input{
          width: 15rem;
        }
        .btnn{
        }
      }

    </style>
  </head>
  <body>
    <!-- ///////include header/////// -->
  <?php include 'header.php'; ?>
 
  <!-- /////////////////////////////////// / -->
  <?php if(isset($_SESSION['reserved'])){ ?> 
        <div style='background-color:#24edda;border-radius:4px;left: 50%;
    transform: translate(-50%, 0);
    z-index: 1;transition: All 300ms;' class='Successful-reserved position-absolute mx-auto mt-5 w-50 p-4'>
          <div>
            <div class='mx-3 d-flex mx-auto justify-content-center my-2'>
            <h2 class='text-dark px-4'>Successful reserved</h2>
             
              </div>
          </div>
        </div>
      <?php } ?>
  <!-- //////////////////////////////////// -->
  <section class="w-100 hero mt-5 d-flex justify-content-center align-items-center imageBackgound"  style= " background-color: aliceblue;" class="px-5">
   <form class='w-50 p-5 my-5 text-light d-flex justify-content-center flex-column form' action='http://localhost/projetmvc/user/index' method='POST'>
          <div class="row mb-5">
            <div class="col-12 col-md-6">
              <div class="form-outline">
								<label class="form-label text-dark">From</label>
		            <input type="text" name="departureStationTripSearch" class="form-control input">
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="form-outline">
						   <label class="form-label text-dark">To</label>
		           <input type="text" name="arrivalStationTripSearch" class="form-control input">
              </div>
            </div>
            <?php
            if(isset($_POST['submit']))
            {
            if(empty($_POST['departureStationTripSearch']) || empty($_POST['arrivalStationTripSearch']))
            {
              echo"<p class='pt-3 mb-0 text-dark text-center'>please complet the form</p>";
            }
          }
            ?>
           </div>
              <!-- Submit button -->
              <button id='pokos' type='submit' name='submit' class="btn border-0 btn-block mb-5 btnn" style="background-color: #24edda;">
                Search
                </button>
           </form> 
          
  </section>
  <section class="body-bg py-5 search text-center">
    <div class="container">
<table class="table table-striped rounded table-secondary ">
<?php

$Found = false;
$currentTime = date('Y-m-d H:i:s');


if(isset($_POST['submit']))
{
  if(!empty($_POST['departureStationTripSearch']) && !empty($_POST['arrivalStationTripSearch']))
    {
      $departureSearch = $_POST['departureStationTripSearch'];
      $arrivalSearch = $_POST['arrivalStationTripSearch'];

      // check if there is some trips between this city's
      foreach($Trips as $Trip)
      {
        if($departureSearch == $Trip['departureStationTrip'] && $arrivalSearch == $Trip['arrivalStationTrip'] && 
        $Trip['dateTrip'] > $currentTime)
        {
          $Found = true;
        }
      }
      
      
      if($Found == true)
      {
        echo "<h2 class='display-5 pb-5'>available trips</h2>";
      }

      foreach($Trips as $Trip)
      {
      if($departureSearch == $Trip['departureStationTrip'] && $arrivalSearch == $Trip['arrivalStationTrip'] && 
      $Trip['dateTrip'] > $currentTime)
        {
          echo "
          <form action='http://localhost/projetmvc/user/booking' method='POST'>
            <input type='hidden' name='departureStationTrip' value=".$Trip['departureStationTrip'].">
            <input type='hidden' name='arrivalStationTrip' value=".$Trip['arrivalStationTrip'].">
            <input type='hidden' name='dateTrip' value=".$Trip['dateTrip'].">
            <input type='hidden' name='priceTrip' value=".$Trip['priceTrip'].">
            <tr>
              <td> from : ".$Trip['departureStationTrip']."</td>
              <td> to : ".$Trip['arrivalStationTrip']. "</td>
              <td> date  : ".$Trip['dateTrip']."</td>
              <td> price : ".$Trip['priceTrip']."dh"."</td>
              <td> available places : ".$Trip['AvailableSeatsTrip']."</td>
              <td><input class='btn btn-success border-0' style='background-color: #24edda;' type='submit' value='reserve' name='reserve'></td>
            </tr>
          </form>
          ";
        }
      }
      if($Found == false)
      {
        echo " 
        <p class='mt-4 fs-2 text fw-bolder'>not founded</p> ";
      }
    }
}
?>

</table>
    </div>
  </section>
 
  <footer>
  <div class="text-center p-3 bg-secondary text-white" >
    © 2023-2026, weego.com, copyright
    </div>
  </footer>

  <script>
    const myTimeout = setTimeout(moveAndDisappear, 1000);

    function moveAndDisappear() {
      document.querySelector(".Successful-reserved").style.opacity = '0';
    }
  </script>
</body>
</html>
<?php
if(isset($_SESSION['reserved']))
{
  // emptying the session
  unset($_SESSION['reserved']);
}
?>