<?php require('./components/nav-bar.php')?>
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To SV Foods!</div>
        <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        <div class="col-4 m-auto">
        <form method ="post">
            <div class="form-group">
              <input name="email" type="email" class="form-control" placeholder="Enter Email " require>
            </div>
            <div class="form-group">
              <input type="tel" name ="phone" class="form-control" placeholder="Enter phone " maxlength="10" require>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name"name="name" require>
            </div>
            <button type="submit" class="btn btn-primary" name="order">Order Food</button>
          </form>
        </div>
      </div>
    </div>
  </header>
  <?php require('./components/footer.php'); ?>

  