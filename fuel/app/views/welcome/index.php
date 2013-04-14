   <script>
      !function ($) {
      $(function(){
      $('#this-carousel-id').carousel()
      })
      }(window.jQuery)
    </script>
 
    <div id="this-carousel-id" class="carousel slide">

      <div class="carousel-inner">
        <div class="item active">
          <a href="">
              <?php echo Asset::img('1.1.png'); ?>
          </a>
          <div class="carousel-caption">
            <p>ProveYouOwnIt.com</p>
            <hr /> 
              <h4>Don't let disaster keep you away from the things you own!  ProveYouOwnIt can help in the event of lost, stolen, or damaged items.</h4>
          </div>
        </div>
        <div class="item">
          <a href="">
            <?php echo Asset::img('2.1.png'); ?>
          </a>
          <div class="carousel-caption">
            <p>Sign Up</p>
            <hr />
              <h4>Register directly with us, or use any of your social media accounts.  It's quick and easy and the benefits are overwhelming.</h4>
          </div>
        </div>
        <div class="item">
          <a href="">
            <?php echo Asset::img('3.1.png'); ?>
          </a>
          <div class="carousel-caption">
            <p>Who we're working with</p>
            <hr />
              <h4>The companies we are working with are the companies you are already making your purchases from. Proving you own it is about to get a whole lot easier.</h4>
          </div>
        </div>        
      </div>

        <!--next and previous controls here href values must reference the id for this carousel -->
      <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
      <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
    </div>

    <div class="row">
      <div class="span4">
        <h2>What is it...</h2>
        <p>ProveYouOwnIt.com is a place for you to keep records of all the items you can't live without. In the event of a lost or stolen item you can use ProveYouOwnIt to make insurance claims, or in some cases, even have your items returned to you. </p>
        <p>
          <a class="btn" href="about">Read more &raquo;</a>
        </p>
      </div>
      <div class="span4">
        <h2>Sign Up!</h2>
        <p>Sign up is quick and easy and the benefits are undeniable.  Sign up with your Facebook, Twitter, or any other social media site you already have.  What are you waiting for?</p>
        <p>
          <a class="btn" href="users/register.php">Sign up &raquo;</a>
        </p>
      </div>
      <div class="span4">
        <h2>Partners.</h2>
        <p>We are working hard with many respected businesses to make proving you own something as simple as possible.  So simple in fact that all you need is an account, and we'll handle the rest whenever you buy something from one of our partners.  Check out a few of the awesome places we're trying to work with.</p>
        <p>
          <a class="btn" href="partners">View Partners &raquo;</a>
        </p>
      </div>
    </div>

  <!-- /container -->

