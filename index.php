<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>coffee shop</title>

  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
</head>

<body>
  <!-- header section starts  -->

  <header class="header">
    <a href="index.html" class="logo">
      <img src="images/logo.png" alt="" />
    </a>

    <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#menu">menu</a>
      <a href="#products">products</a>
      <a href="#review">review</a>
      <a href="#contact">contact</a>
      <a href="#blogs">blogs</a>
    </nav>
    <div class="navbar2">
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
      </div>
      <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
      </div>
    </div>
  </header>

  <!-- Home section   -->

  <section class="home" id="home">
    <div class="content">
      <h3>fresh coffee in the morning</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat
        labore, sint cupiditate distinctio tempora reiciendis.
      </p>
      <a href="#" class="btn">get yours now</a>
    </div>
  </section>

  <!-- About section   -->

  <section class="about" id="about">
    <h1 class="heading"><span>about</span> us</h1>

    <div class="row">
      <div class="image">
        <img src="images/about-img.jpeg" alt="" />
      </div>
      <div class="content">
        <h3>what makes our coffee special?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae
          ratione a officiis id temporibus autem? Quod nemo facilis
          cupiditate. Ex, vel?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet
          enim quod veritatis, nihil voluptas culpa! Neque consectetur
          obcaecati sapiente?
        </p>
        <a href="#" class="btn">learn more</a>
      </div>
    </div>
  </section>

  <!-- menu section  -->

  <section class="menu" id="menu">
    <h1 class="heading">our <span>menu</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="images/menu-1.png" alt="" />
        <h3>tasty and healty</h3>
        <div class="price">₹15.99 <span>20.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="images/menu-2.png" alt="" />
        <h3>tasty and healty</h3>
        <div class="price">₹15.99 <span>20.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="images/menu-3.png" alt="" />
        <h3>tasty and healty</h3>
        <div class="price">₹15.99 <span>20.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="images/menu-4.png" alt="" />
        <h3>tasty and healty</h3>
        <div class="price">₹15.99 <span>20.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="images/menu-5.png" alt="" />
        <h3>tasty and healty</h3>
        <div class="price">₹15.99 <span>20.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>

      <div class="box">
        <img src="images/menu-6.png" alt="" />
        <h3>tasty and healty</h3>
        <div class="price">₹15.99 <span>20.99</span></div>
        <a href="#" class="btn">add to cart</a>
      </div>
    </div>
  </section>

  <!-- products section -->

  <section class="products" id="products">
    <h1 class="heading">our <span>products</span></h1>

    <div class="box-container">
      <div class="box">
        <div class="icons">
          <a href="#" class="fas fa-shopping-cart"></a>
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
          <img src="images/product-1.png" alt="" />
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₹15.99 <span>₹20.99</span></div>
        </div>
      </div>

      <div class="box">
        <div class="icons">
          <a href="#" class="fas fa-shopping-cart"></a>
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
          <img src="images/product-2.png" alt="" />
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₹15.99 <span>₹20.99</span></div>
        </div>
      </div>

      <div class="box">
        <div class="icons">
          <a href="#" class="fas fa-shopping-cart"></a>
          <a href="#" class="fas fa-heart"></a>
          <a href="#" class="fas fa-eye"></a>
        </div>
        <div class="image">
          <img src="images/product-3.png" alt="" />
        </div>
        <div class="content">
          <h3>fresh coffee</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <div class="price">₹15.99 <span>₹20.99</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- review section   -->

  <section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="images/quote-img.png" alt="" class="quote" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla
          sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi
          quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.
        </p>
        <img src="images/pic-1.png" class="user" alt="" />
        <h3>Jany</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="box">
        <img src="images/quote-img.png" alt="" class="quote" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla
          sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi
          quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.
        </p>
        <img src="images/pic-2.png" class="user" alt="" />
        <h3>Lucy</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>

      <div class="box">
        <img src="images/quote-img.png" alt="" class="quote" />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla
          sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi
          quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.
        </p>
        <img src="images/pic-3.png" class="user" alt="" />
        <h3>Jack</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
      </div>
    </div>
  </section>

  <!-- contact section   -->


  <section class="contact" id="contact">
    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">
      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28130.17943485648!2d76.61997525!3d28.1990345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d50719ae37551%3A0xe4c45afc4faedcee!2sRewari%2C%20Haryana%20123401!5e0!3m2!1sen!2sin!4v1668423009974!5m2!1sen!2sin" allowfullscreen="" loading="lazy">
      </iframe>

    </div>

    <form id="myForm" class="needs-validation" method="POST" autocomplete="off">
      <h3>get in touch</h3>
      <div class="inputBox">
        <span class="fas fa-user"></span>
        <input type="text" id="name" name="name" placeholder="name" required data-parsley-pattern="^[a-zA-Z\s]+$" data-parsley-trigger="keyup" />
      </div>
      <div class="inputBox">
        <span class="fas fa-envelope"></span>
        <input type="email" id="email" name="email" placeholder="email" required data-parsley-type="email" data-parsley-trigger="keyup" />
      </div>
      <div class="inputBox">
        <span class="fas fa-phone"></span>
        <input type="number" id="phone" name="phoneNo" placeholder="number" required data-parsley-length="[10,12]" data-parsley-trigger="keyup" />
      </div>
      <button type="submit" class="btn" id="submit">Submit</button>
    </form>
    <div id="demo" style="color:white;">
      <div class="response"></div>
    </div>
  </section>

  <!-- blogs section   -->

  <section class="blogs" id="blogs">
    <h1 class="heading">our <span>blogs</span></h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/blog-1.jpeg" alt="" />
        </div>
        <div class="content">
          <a href="#" class="title">tasty and refreshing coffee</a>
          <span>by admin / 10 November, 2021</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            dicta.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/blog-2.jpeg" alt="" />
        </div>
        <div class="content">
          <a href="#" class="title">tasty and refreshing coffee</a>
          <span>by admin / 10 November, 2021</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            dicta.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/blog-3.jpeg" alt="" />
        </div>
        <div class="content">
          <a href="#" class="title">tasty and refreshing coffee</a>
          <span>by admin / 10 November, 2021</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Non,
            dicta.
          </p>
          <a href="#" class="btn">read more</a>
        </div>
      </div>
    </div>
  </section>

  <!-- footer section   -->

  <section class="footer">
    <div class="share">
      <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
      <a href="https://www.twiter.com" class="fab fa-twitter"></a>
      <a href="https://www.instagram.com" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com" class="fab fa-linkedin"></a>
      <a href="https://youtube.com/@monuranoliya" class="fab fa-youtube"></a>
    </div>

    <div class="links">
      <a href="#">home</a>
      <a href="#">about</a>
      <a href="#">menu</a>
      <a href="#">products</a>
      <a href="#">review</a>
      <a href="#">contact</a>
      <a href="#">blogs</a>
    </div>

    <div class="credit">
      created by <span>mr bhart singh</span> | all rights reserved
    </div>
  </section>

  <!-- js file link  -->
  <!-- <script src="script.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<script>
  $(document).ready(function() {

    // validating form data using data-parsley

    $('#myForm').parsley();
    $('#myForm').on('click', '#submit', function(event) {
      event.preventDefault();
      if ($('#myForm').parsley().isValid()) {

        // Getting input fields values entered by user

        var Name = $('#name').val();
        var emailId = $('#email').val();
        var mobileNo = $('#phone').val();

        // Sending request through the ajax 

        $.ajax({
          type: 'POST',
          url: 'contactDetails.php',
          data: {
            'name': Name,
            'email': emailId,
            'phoneNo': mobileNo,
          },
          dataType: "JSON",

          // After completion of request getting response data
          success: function(data) {
            if (data.response != undefined) {
              alert(data.response);
            }
            if (data.status == true) {
              alert("Ragistration successfully");
            } else {
              alert('Ragistration Failed.');
            }
          },
        });
      }
    });
  });
</script>


</html>