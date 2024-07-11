<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" type="image/x-icon" href="/images/icon.png" />

        <title>Rotab HRM</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="style/style.css" rel="stylesheet"/>
        <link href="style/responsive.css" rel="stylesheet"/>
    </head>
    <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/home')}}">
        <img src="images/logo_nav_bar.png"  height="30" class="d-inline-block align-top" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
     @if (Route::has('login'))
         @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">{{__('Home')}}</a>
            </li>
         @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
          @endif
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
            </li>
          @endif
          @endauth
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tutorials</a>
            </li>
        </ul>
    </div>
</nav>
  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="images/slider-bg-1.jpg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-6 ml-auto">
        <div class="detail-box">
          <h1>Welcome To <br>Rotab HRM</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda obcaecati fuga nulla ipsa dolores quisquam at illum ipsam rerum. Officia odio exercitationem illum deserunt! Veritatis harum similique autem corrupti laboriosam!

          </p>

        </div>
      </div>
    </div>
  </section>
  <!-- End of slider section -->

  <!-- Special section -->
  <section class="spcl_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="detail-box">
              <img src="images/opensourcesblue.png" alt="logo of open source but blue">
              <h5>Open Source</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolores qui quisrum vel ad voluptates vero earum quos esse

              </p>
            </div>
            <div class="detail-box">
              <img src="images/gearblue.png" alt="customization icon">
              <h5>Customize</h5>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In blanditiis accusanfugit recusandae itaque fugiat ex praesentium,

              </p>
            </div>
            <div class="detail-box">
              <img src="images/License_icon-gpl-generalblue.png" alt="">
              <h5>GPLv3 License</h5>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate eveniet consectetur quasi perspiciatis modi consequuntur quasi perspiciatis modi consequuntur

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ml-auto">
          <div class="img-box">
            <img src="images/banner1.jpg" alt="">
          </div> </div>
      </div>
    </div>
  </section>
  <!-- End of special section -->

  <!-- about section -->
  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/banner2.jpg" alt="">

          </div>
        </div>
        <div class="col-md-6"><div class="detail-box">
          <div class="heading_container">
            <h2>About Us</h2>
          </div>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam cum consequuntur aliquid, asperiores accusamus, rem explicabo perferendis, dolor repellat numquam adipisci esse. Nobis quisquam, recusandae iusto perferendis porro libero vel.

          </p>
          <a href="">Read More</a>
        </div></div>
      </div>
    </div>
  </section>
<!-- End of about us page -->


<!-- Testimonial section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>About Programmers</h2>
      </div>
      <div class="carousel slide" id="carouselExampleControls" data-ride:="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>Mohammed Alnahdi</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit nulla nemo voluptates nisi voluptatibus ullam similique tempore sapiente sint autem ratione ex nihil cupiditate exercitationem, quo, ipsa modi? Autem, veniam!

                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a href="#carouselExampleControls" class="carousel-control-prev" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#carouselExampleControls" class="carousel-control-next" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of client section -->

  <!-- start of footer -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_content">
            <h4>{{__('Contact Us')}}</h4>
            <div class="contact_link_box">
              <a href=""><i class="fa fa-envelop" aria-hidden="true"></i>
              <span>m.kh.alnahdi@gmail.com</span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              {{ __('Rotab HRM') }}
            </a>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.  excepturi corporis nisi magnam quod ullam magni dolorum.

            </p>
            <div class="footer_social">
              <a href=""><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
              <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
              <a href=""><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
              <a href=""><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
              <a href=""><i class="fa-brands fa-pinterest" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
            <h5>Donation</h5>
        </div>
      </div>
      <div class="footer-info">
        <p>&copy; <span id="displayYear"></span>All Rights Reserved By
        <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">GPLv3</a></p>
      </div>
    </div>
  </footer>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
