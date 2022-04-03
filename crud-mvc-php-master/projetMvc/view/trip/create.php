<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>create trip</title>
  </head>
  <body>
    
	
	<nav class="navbar navbar-light" style="background-color: #24edda;">
    <div class="container-xxl">
      <a href="http://localhost/projetmvc/Trip/index" class="navbar-brand"><strong>TrainSpeed</strong></a>
      <a href="http://localhost/projetmvc/trip/index" class="nav-link link-secondary text-dark"><strong>dashboard</strong> </a>
      </div>
    </div>
  </nav>

	<section style="min-height: calc(100vh - 56px - 56px); class="mb-5">
    <h4 class="my-5 text-center"><strong> Welcome Create Trip 😉</strong></h4>
    <div class="d-flex justify-content-center" style="width:100%">
      <div class="col-md-6">
        <form class='d-flex justify-content-center flex-column' action="http://localhost/projetmvc/Trip/save" method="POST">
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
								<label class="form-label">From</label>
		            <input type="text" name="departureStationTrip" class="form-control">
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
						   <label class="form-label">To</label>
		           <input type="text" name="arrivalStationTrip" class="form-control">
              </div>
            </div>
           </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
							<label class="form-label">date</label>
							<input type="datetime-local" name="dateTrip" class="form-control">
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
								<label class="form-label">price</label>
		            <input class="form-control" type="number" name="priceTrip">
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
								 <label class="form-label">available places</label>
		             <input class="form-control" type="number" name="AvailableSeatsTrip">
              </div>
							
              <!-- Submit button -->
              <button type="submit" class="btn broder-0 btn-block mb-5" style="background-color: #24edda;">
                save
              </button>
           </form>
					</div>
				</div>
</section>
	<footer></footer>
  <div class="text-center p-3 bg-secondary text-white" >
    © 2024-2026, trainspeed.com, copyrght 
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
