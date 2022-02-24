
<?php  include(VIEWS.'inc'.DS.'header.php'); ?>
 
 
 <section id="contact">
    <div class="contact-us bg-primary p-1">
      <h3 class="m-heading py-1">Feel free to ask anything </h3>

      <form  >
        <div class="form-group">
          <input type="text" id="name" placeholder="Name">
          <input type="email" id="email" placeholder="email">
        </div>
        <div>
          <input type="text" id="subject" placeholder="Subject">
          <textarea id="message" placeholder="Message" cols="10" rows="10"></textarea>
        </div>
        <input class="btn btn-dark" onclick="validateForm()" type="submit" value="Submit">
      </form>
    </div>

    <!-- <div class="map"></div> -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107926.38186450233!2d-9.306733236503312!3d32.29305801633302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac212049843597%3A0x6b618c47dfd85d40!2sSafi!5e0!3m2!1sen!2sma!4v1640792517904!5m2!1sen!2sma" width="50%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </section>

 
  

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/f5264f338f.js" crossorigin="anonymous"></script>
  <!-- Main js -->
  <script src="js/main.js"></script>

<?php  include(VIEWS.'inc'.DS.'footer.php'); ?>
