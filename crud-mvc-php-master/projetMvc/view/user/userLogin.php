<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>create trip</title>
  </head>
  <body>
	
	<nav class="navbar navbar-light " style="background-color: #24edda;">
    <div class="container-xxl">
      <a href="http://localhost/projetmvc/user/index" class="navbar-brand text-dark"><strong>TrainSpeed</strong></a>
      <a href="http://localhost/projetmvc/user/index" class="nav-link link-secondary text-dark"><strong> Home</strong> </a>
      </div>
    </div>
  </nav>


      <?php if(isset($_SESSION['signUp'])){ ?>
        <div style='background-color:#24edda;border-radius:4px;' class='mx-auto mt-5 w-50 d-flex justify-content-center flex-column p-4'>
          <div>
            <div class='mx-3 d-flex mx-auto justify-content-center my-2'>
            <h2 class='text-dark px-4'> Added Successful </h2>
              </div>
          </div>
            <h4 class='text-dark mx-auto'>Welcome <?php echo $_SESSION['signUp'] ?></h4>
        </div>
      <?php } ?>


	  <section style="min-height: calc(100vh - 56px - 56px);" class="mb-5">
      <h4 class="mt-5 pt-5 pb-3 text-center"><strong>User Log in</strong></h4>
      <div class="d-flex justify-content-center" style="width:100%">
        <div class="col-md-6">
          <form class='d-flex justify-content-center flex-column mx-auto w-50' action="http://localhost/projetmvc/User/userLogin" method="POST">
            <div class="row mb-4">

              <div class="form-outline py-3">
								<label class="form-label pb-2">email address</label>
		            <input type="email" name="emailSearch" class="form-control">
              </div>
              <div class="form-outline py-3">
						   <label class="form-label pb-2">password</label>
		           <input type="password" name="passwordSearch" class="form-control">
              </div>

              <?php
            if($inccorect == true)
            {
              echo"<p class='text-danger'>email or password is incorrect</p>";
            }
            ?>

            </div>
              <!-- Submit button -->
              <button name='submit' type="log in" class="btn border-0 btn-block mb-3 w-50 mx-auto" style="background-color: #24edda;">
                log in
              </button>
           </form>

           
           <div class='d-flex justify-content-center'>
             <p class='px-2'>you don't have account ?</p>
             <a class="link-secondary text-decoration-none" href="http://localhost/projetmvc/user/userSignUp"><strong>Sign Up</strong></a>
           </div>

				</div>
			</div>
</section>
	<footer>
    <div class="text-center p-3 bg-secondary text-white" >
    © 2024-2026, weego.com, copyright
    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
