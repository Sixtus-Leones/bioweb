<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Font-Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
      integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous"
    />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css" />

    
    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />

    <!-- Media Queries -->
    <link
      rel="stylesheet"
      media="screen and (max-width: 768px)"
      href="assets/css/mobile.css"
    />
    <link
      rel="stylesheet"
      media="screen and (min-width: 1100px)"
      href="assets/css/widescreen.css"
    />
    <!-- boxicon cdn link -->
      <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">

      
    <title>Bioweb Tech</title>
  </head>

  <body id="home">
    <nav id="navbar" class="navbar navbar-expand-sm navbar-dark nav-color">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="assets/img/logo-light.png" alt="Bioweb Logo" class="brand-logo">
        </a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-light" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#what">What</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#who">Who</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar -->
    <!-- <nav id="navbar">
      <h1 class="logo">
        <span class="text-primary"> <i class="fas fa-book-open"></i> Edge</span
        >Ledger
      </h1>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#what">What</a></li>
        <li><a href="#who">Who</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav> -->
    <!-- Header: Showcase -->
    <header id="showcase">
      <div class="showcase-content">
        <div class="header-content">
          <h1>Bioweb Technology</h1>

          <h4>
            We specialize in
            <span
              class="txt-type"
              data-wait="3000"
              data-words='["Graphics Design", "UI/UX Design", "Website Development"]'
            ></span>
          </h4>
          <!-- <p class="lead showcase-text">
            We specialize in graphic design, UI/UX, Website development, and
            Videography.
          </p> -->
          <!-- <a href="work.html" class="btn-light">View My Work</a> -->
        </div>
        <a href="#what" class="btn showcase-btn bg-light mt-3">What we do</a>
      </div>
    </header>

    <!-- Section: What We Do -->
    <section id="what" class="bg-light py-1">
      <div class="container">
        <h2 class="m-heading text-center mt-4">
          <span class="text-primary">What</span> We Do
        </h2>
        <div class="items">
          <div class="item">
            <i class="fas fa-laptop-code fa-2x"></i>
            <div>
              <h3>Website Development</h3>
              <p>All kinds of websites like construction, school, hotel etc.</p>
            </div>
          </div>

          <div class="item">
            <i class="fas fa-palette fa-2x"></i>
            <div>
              <h3>Graphics Design</h3>
              <p>At Bioweb Tech, we offer all kinds of graphics design work</p>
            </div>
          </div>

          <div class="item">
            <i class="fas fa-pencil-alt fa-2x"></i>
            <div>
              <h3>UI/UX Design</h3>
              <p>We offer UI/UX Design work of all kinds</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Who We Are -->
    <section id="who">

    </section>

    <!-- Team -->
    <section id=" team">
      <div class="container">
        <h2 class="m-heading text-center mb-4">
          <span class="text-primary">Our</span> Team
        </h2>
        <div class="row">
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="image-flip">
              <div class="mainflip flip-0">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/Jude.jpg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title  main-color">OKORONKWO JUDE</h4>
                      <p class="card-text t-large">
                        Graphics Designer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <!-- <h4 class="card-title">EKEAGWU CHUKWUMA</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p> -->
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-skype"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-google"></i>
                          </a> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/benco.jpg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title main-color">EKEAGWU CHUKWUMA</h4>
                      <p class="card-text t-large">
                        Graphics Designer, Data Analyst <br>UI/UX Designer and Frontend Engineer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <!-- <h4 class="card-title">Sunlimetech</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p> -->
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-skype"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-google"></i>
                          </a> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/benedicta.jpg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title main-color">IWUEKE BENEDICTA</h4>
                      <p class="card-text t-large">
                        Graphics Designer and Videographer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <!-- <h4 class="card-title">Sunlimetech</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p> -->
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-skype"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-google"></i>
                          </a> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/johnkenedy.jpg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title main-color">JOHNKENNEDY</h4>
                      <p class="card-text t-large">
                        Frontend/Backend Engineer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <!-- <h4 class="card-title">Sunlimetech</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p> -->
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                        </li>
                        <li class="list-inline-item">
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/pc.jpg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title main-color">ANYANWU PETERCLAVER</h4>
                      <p class="card-text t-large">
                        Frontend/Backend Engineer <br>  UI/UX Designer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <!-- <h4 class="card-title">Sunlimetech</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p> -->
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-skype"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-google"></i>
                          </a> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/sixtus.jpg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title main-color">MADU SIXTUS</h4>
                      <p class="card-text t-large">
                        Frontend/Backend Engineer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <h4 class="card-title">Sunlimetech</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p>
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-skype"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-google"></i>
                          </a> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./Team member -->
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
            <div
              class="image-flip"
              ontouchstart="this.classList.toggle('hover');"
            >
              <div class="mainflip">
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p>
                        <img
                          class="img-fluid"
                          src="assets/img/team/louismaria.jpeg"
                          alt="card image"
                        />
                      </p>
                      <h4 class="card-title main-color">Emmanuel Louismaria</h4>
                      <p class="card-text t-large">
                       Graphics Designer
                      </p>
                    </div>
                  </div>
                </div>
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <!-- <h4 class="card-title">Sunlimetech</h4>
                      <p class="card-text">
                        This is basic card with image on top, title, description
                        and button.This is basic card with image on top, title,
                        description and button.This is basic card with image on
                        top, title, description and button.
                      </p> -->
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-facebook"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-twitter"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-skype"></i>
                          </a> -->
                        </li>
                        <li class="list-inline-item">
                          <!-- <a
                            class="social-icon text-xs-center"
                            target="_blank"
                            href="https://www.fiverr.com/share/qb8D02"
                          >
                            <i class="fa fa-google"></i>
                          </a> -->
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

    <!-- Team -->
    <!-- </section> -->

     <!-- Section: Contact -->
    <section id="contact" class="container0">
      <div class="container1">
        <div class="content">
          <div class="left-side">
            <div class="address details">
              <i class="bx bx-map"></i>
              <div class="topic">Address</div>
              <div class="text-one">MCC/URATTA OWERRI IMO STATE</div>
              <!-- <div class="text-two">Maybe WhatsApp</div> -->
            </div>

            <div class="phone details">
              <i class="bx bx-phone"></i>
              <div class="topic">Phone</div>
              <div class="text-one">+2349039070580</div>
            </div>

            <div class="email details">
              <i class="bx bx-envelope"></i>
              <div class="topic">email</div>
              <div class="text-one">biowebt@gmail.com</div>
            </div>
          </div>

          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>
              If you have any work for us or any type of queries related to our
              porfolio, you can send us a message or preferably give us a call with the phone number or write to us via our email. it's our pleasure to help you.
            </p>

            <form action="">
              <div class="input-box">
                <input type="text" placeholder="Enter your name"  name=""/>
              </div>

              <div class="input-box">
                <input type="text" placeholder="Enter your email"  name=""/>
              </div>

              <div class="input-box message-box">
                <textarea name=""></textarea>
              </div>
              <div class="button">
                <input type="button" value="Send Now" name="" />
              </div>
            </form>
          </div>
        </div>

      <!-- <div class="map"></div> -->
    </section>

    <!-- Footer -->
    <footer>
      <div class="content ">
        <div class="left box">
          <div class="upper">
            <div class="topic">About Us</div>
            <p>Bioweb-Tech is a team of developers who are dedicated to give you utmost satisfaction in your website.</p>
          </div>
        
       
          <div class="lower">
            <div class="topic">Contact Us</div>
            <div class="phone">
              <a href="#"><i class="bx bx-phone">+2349039070580</i></a>
            </div>

            <div class="email">
              <a href="#"><i class="bx bx-envelope">biowebt@gmail.com</i></a>
            </div>
          </div>
        </div>

        <div class="middle box">
          <div class="topic">Our Services</div>
          <div><a href="#">Web Development</a></div>
          <div><a href="#">Graphics Design</a></div>
          <div><a href="#">UI/UX Design</a></div>
        </div>

        <div class="right box">
          <div class="topic">Subscribe Us</div>
          <form action="#">
          <input type="text" placeholder="Enter email address">
          <input type="submit" name="" value="send">

          <div class="media-icons">
            <a href="https://www.facebook.com/profile.php?id=100089212540508"><i class="bx bxl-facebook"></i></a>
            <a href="http://wa.me//+2349039070580"><i class="bx bxl-whatsapp"></i></a>
            <a href="#"><i class="bx bxl-linkedin"></i></a>
            <a href="#"><i class="bx bxl-instagram"></i></a>
          </div>
          </form>
        </div>
      </div>
      <div class="bottom">
            <p>Copyright &copy; <span id="year"></span> <a href="#">Bioweb Technology</a> All Rights Reserved.</p>
      </div>
    </footer>

    <!-- JQuery CDN -->
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>

    <!-- Local JS File -->
    <script src="assets/js/main.js"></script>

    <!-- Google Maps -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoZg2Es_GrQHZf_52j2-xZ3cTfBCR0HII&callback=initMap"
      async
      defer
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"
      integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="assets/js/typewriter.js"></script>
  </body>
</html>
