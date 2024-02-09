<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wave Cafe HTML Template by Tooplate</title>
  <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
  <link rel="stylesheet" href="css/tooplate-wave-cafe.css">
  <script src="httos://kit.fontawesome.com/ae61999827.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!--
Tooplate 2121 Wave Cafe
https://www.tooplate.com/view/2121-wave-cafe
-->
</head>

<body>
  <div class="tm-container">
    <div class="tm-row">
      <!-- Site Header -->
      <div class="tm-left">
        <div class="tm-left-inner">
          <div class="tm-site-header">
            <i class="fas fa-coffee fa-3x tm-site-logo"></i>
            <h1 class="tm-site-name">Wave Cafe</h1>
          </div>
          <nav class="tm-site-nav">
            <ul class="tm-site-nav-ul">
              <li class="tm-page-nav-item">
                <a href="#drink" class="tm-page-link active">
                  <i class="fas fa-mug-hot tm-page-link-icon"></i>
                  <span>Drink Menu</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#about" class="tm-page-link">
                  <i class="fas fa-users tm-page-link-icon"></i>
                  <span>About Us</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#special" class="tm-page-link">
                  <i class="fas fa-glass-martini tm-page-link-icon"></i>
                  <span>Special Items</span>
                </a>
              </li>
              <li class="tm-page-nav-item">
                <a href="#contact" class="tm-page-link">
                  <i class="fas fa-comments tm-page-link-icon"></i>
                  <span>Contact</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="tm-right">
        <main class="tm-main">
          <div id="drink" class="tm-page-content">
            <!-- Drink Menu Page -->
            <nav class="tm-black-bg tm-drinks-nav">
              <ul>
                @foreach($cat as $category)
                <li>
                  <a href="/index/{{$category->id}}" class="tm-tab-link active" data-id="{{$category->id}}">{{$category->category_name}}</a>
                </li>
                @endforeach
              </ul>
            </nav>
            @foreach($cat1 as $category)
            <div id="{{$category->id}}" class="tm-tab-content">
              <div class="tm-list">
                @foreach($ber1 as $bers)
                <div class="tm-list-item">
                  <img src="{{asset('/uploads/'.$bers->image)}}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">{{$bers->title}}<span class="tm-list-item-price">${{$bers->price}}</span></h3>
                    <p class="tm-list-item-description">{{$bers->content}}.</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endforeach

            @foreach($cat2 as $category)
            <div id="{{$category->id}}" class="tm-tab-content">
              <div class="tm-list">
                @foreach($ber2 as $bers)
                <div class="tm-list-item">
                  <img src="{{asset('/uploads/'.$bers->image)}}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">{{$bers->title}}<span class="tm-list-item-price">${{$bers->price}}</span></h3>
                    <p class="tm-list-item-description">{{$bers->content}}.</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endforeach

            @foreach($cat3 as $category)
            <div id="{{$category->id}}" class="tm-tab-content">
              <div class="tm-list">
                @foreach($ber3 as $bers)
                <div class="tm-list-item">
                  <img src="{{asset('/uploads/'.$bers->image)}}" alt="Image" class="tm-list-item-img">
                  <div class="tm-black-bg tm-list-item-text">
                    <h3 class="tm-list-item-name">{{$bers->title}}<span class="tm-list-item-price">${{$bers->price}}</span></h3>
                    <p class="tm-list-item-description">{{$bers->content}}.</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
            @endforeach
            <!-- end Drink Menu Page -->
          </div>
          <!-- About Us Page -->
          <div id="about" class="tm-page-content">

            <div class="tm-black-bg tm-mb-20 tm-about-box-1">
              <h2 class="tm-text-primary tm-about-header">About Me</h2>
              <div class="tm-list-item tm-list-item-2">
                <img src="img/me.jpeg" alt="Image" class="tm-list-item-img tm-list-item-img-big">
                <div class="tm-list-item-text-2">
                  <p>Hello, I am Hind Mohsen</p>
                  <p>I am jounior PHP Laravel Developer, i have strong background in various technical domains such as HTML, CSS, JavaScript, PHP, MySql and Laravel and I am Seeking an entry-level position to begin my career in a high-level professional environment.</p>
                </div>
              </div>
            </div>
            <div class="tm-black-bg tm-mb-20 tm-about-box-2">
              <div class="tm-list-item tm-list-item-2">
                <div class="tm-list-item-text-2">
                  <h2 class="tm-text-primary">My Expertise</h2>
                  <ul>
                    <li>
                      HTML
                    </li>
                    <li>
                      CSS
                    </li>
                    <li>
                      JavaScript
                    </li>
                    <li>
                      PHP
                    </li>
                    <li>
                      MySql
                    </li>
                    <li>
                      Laravel
                    </li>
                  </ul>
                  <h2 class="tm-text-primary tm-about-header">Contact Me</h2>
                </div>
              </div>
              <div class="social-icon">
                <ul>
                  <li> <a href="https://www.facebook.com/hend.amer3?mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook"></i></a></li>
                  <li> <a href="mailto:hindmohsen2001@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                <li> <a href="http://wa.me/+01007019005" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                <li> <a href="https://github.com/hindamer" target="_blank"><i class="fab fa-github"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end About Us Page -->

          <!-- Special Items Page -->
          <div id="special" class="tm-page-content">

            <div class="tm-special-items">
              @foreach($special as $specials)
              <div class="tm-black-bg tm-special-item">
                <img src="{{asset('/uploads/'.$specials->image)}}" width="320" height="160"  alt="Image">
                <div class="tm-special-item-description">
                  <h2 class="tm-text-primary tm-special-item-title">{{$specials->title}}</h2>
                  <p class="tm-special-item-text">{{$specials->content}}.</p>
                </div>
              </div>
              @endforeach
            </div>

          </div>
          <!-- end Special Items Page -->

          <!-- Contact Page -->
          <div id="contact" class="tm-page-content">
            <div class="tm-black-bg tm-contact-text-container">
              <h2 class="tm-text-primary">Contact Wave</h2>
              <p>Wave Cafe Template has a video background. You can use this layout for your websites. Please contact Tooplate's Facebook page. Tell your friends about our website.</p>
            </div>
            <div class="tm-black-bg tm-contact-form-container tm-align-right">
              <form action="{{route('storee')}}" method="POST" id="contact-form">
                @csrf
                <div class="tm-form-group">
                  <input type="text" name="name" class="tm-form-control" placeholder="Name" required="" />
                </div>
                @error('name')
							<div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
							@enderror
                <div class="tm-form-group">
                  <input type="email" name="email" class="tm-form-control" placeholder="Email" required="" />
                </div>
                @error('email')
							<div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
							@enderror
                <div class="tm-form-group tm-mb-30">
                  <textarea rows="6" name="message" class="tm-form-control" placeholder="Message" required=""></textarea>
                </div>
                @error('message')
							<div class="alert alert-danger" style="width: 49%; margin-left:305px;">{{$message}}</div>
							@enderror
                <div>
                  <button type="submit" class="tm-btn-primary tm-align-right">
                    Submit
                  </button>
                </div>
              </form>
              @if(Session::has('message'))
              <script>
                swal("Message", "{{Session::get('message')}}", 'success', {
                  button: true,
                  button: "Ok",
                  timer: 3000
                })
              </script>
              @endif
            </div>
          </div>
          <!-- end Contact Page -->
        </main>
      </div>
    </div>
    <footer class="tm-site-footer">
      <p class="tm-black-bg tm-footer-text">Copyright 2020 Wave Cafe

        | Design: <a href="https://www.tooplate.com" class="tm-footer-link" rel="sponsored" target="_parent">Tooplate</a></p>
    </footer>
  </div>

  <!-- Background video -->
  <div class="tm-video-wrapper">
    <i id="tm-video-control-button" class="fas fa-pause"></i>
    <video autoplay muted loop id="tm-video">
      <source src="video/wave-cafe-video-bg.mp4" type="video/mp4">
    </video>
  </div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script>
    function setVideoSize() {
      const vidWidth = 1920;
      const vidHeight = 1080;
      const windowWidth = window.innerWidth;
      const windowHeight = window.innerHeight;
      const tempVidWidth = windowHeight * vidWidth / vidHeight;
      const tempVidHeight = windowWidth * vidHeight / vidWidth;
      const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
      const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
      const tmVideo = $('#tm-video');

      tmVideo.css('width', newVidWidth);
      tmVideo.css('height', newVidHeight);
    }

    function openTab(evt, id) {
      $('.tm-tab-content').hide();
      $('#' + id).show();
      $('.tm-tab-link').removeClass('active');
      $(evt.currentTarget).addClass('active');
    }

    function initPage() {
      let pageId = location.hash;

      if (pageId) {
        highlightMenu($(`.tm-page-link[href^="${pageId}"]`));
        showPage($(pageId));
      } else {
        pageId = $('.tm-page-link.active').attr('href');
        showPage($(pageId));
      }
    }

    function highlightMenu(menuItem) {
      $('.tm-page-link').removeClass('active');
      menuItem.addClass('active');
    }

    function showPage(page) {
      $('.tm-page-content').hide();
      page.show();
    }

    $(document).ready(function() {

      /***************** Pages *****************/

      initPage();

      $('.tm-page-link').click(function(event) {

        if (window.innerWidth > 991) {
          event.preventDefault();
        }

        highlightMenu($(event.currentTarget));
        showPage($(event.currentTarget.hash));
      });


      /***************** Tabs *******************/

      $('.tm-tab-link').on('click', e => {
        e.preventDefault();
        openTab(e, $(e.target).data('id'));
      });

      $('.tm-tab-link.active').click(); // Open default tab


      /************** Video background *********/

      setVideoSize();

      // Set video background size based on window size
      let timeout;
      window.onresize = function() {
        clearTimeout(timeout);
        timeout = setTimeout(setVideoSize, 100);
      };

      // Play/Pause button for video background      
      const btn = $("#tm-video-control-button");

      btn.on("click", function(e) {
        const video = document.getElementById("tm-video");
        $(this).removeClass();

        if (video.paused) {
          video.play();
          $(this).addClass("fas fa-pause");
        } else {
          video.pause();
          $(this).addClass("fas fa-play");
        }
      });
    });
  </script>
</body>

</html>