<!doctype html id="home">
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="My Web Portofolio">
    <meta name="keywords" content="FierzaXploit, Fierza, fierza, fierzaxploit">
    <meta name="author" content="FierzaXploit">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- google font Shippori Mincho -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@600&display=swap" rel="stylesheet">

    <!-- google font RocknRoll One -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    <!-- my css -->
    <link rel="stylesheet" href="style.css">

    <!-- link icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- animasi loading -->
    <link rel="stylesheet" href="animasi_loading.css">

    <title>Home</title><link rel="shortcut icon" href="img/favicon.ico">

     <!-- smooth scroll -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".nav-link").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
    <!--a khir smooth scroll -->
    
  </head>
  <body onload="myFunction()">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <font color="white" size="5"><i class="bi bi-list"></i></font>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item home">
                      <a class="nav-link active" aria-current="page" href="#home"><b>Home</b></a>
                      <svg class="garis garissatunya" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,320L1440,96L1440,0L0,0Z"></path></svg>
                      <svg class="garis2 garissatunya2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,32L1440,288L1440,0L0,0Z"></path></svg>
                    </li>
                    <li class="nav-item vis">
                      <a class="nav-link" href="#about">About Me</a>
                    </li>
                    <li class="nav-item vis">
                      <a class="nav-link" href="#skill">My Skill</a>
                    </li>
                    <li class="nav-item vis">
                      <a class="nav-link" href="#serti">My Certificate</a>
                    </li>
                    <li class="nav-item vis">
                      <a class="nav-link" href="#team">My Community</a>
                    </li>
                    <li class="nav-item vis">
                      <a class="nav-link" href="#kontakku">Contact</a>
                    </li>
                </ul>
                <a href="fx.html" class="FX btn btn-outline-light"><i class="bi bi-download"></i> FX Webshell</a>
                <br>
            </div>
        </div>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="darkred" fill-opacity="1" d="M0,0L720,192L1440,64L1440,0L720,0L0,0Z"></path></svg>
    <!-- akhir navbar -->
  <br>
  <br><br><br>
  <!-- efect loading -->
  <div id="loader">
    <div class="cssload-loader">
      <div class="cssload-inner cssload-one"></div>
      <div class="cssload-inner cssload-two"></div>
      <div class="cssload-inner cssload-three"></div>
    </div>
  </div>
  <!-- efect loading -->
    <div id="myDiv">

      <!-- jumbotron -->
    <div class="jumbotron">
        <div class="container justify-content- mt-4">
            <center>
              <img src="img/logo.png" alt="profile" class="gambar">
              <h1><b><span id="typed"></span></b></h1>
              <h3>Pentester || Frond End Dev</h3>
              <h5>"Mencoba Memperbaiki Diri"<br>- Fierza -</h5>
          </center>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="darkred" fill-opacity="1" d="M0,256L1440,64L1440,320L0,320Z"></path></svg>
    <!-- akhir jumbtron -->

    <!-- about -->
    <div id="about" class="about">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <br>
            <h2>About Me</h2>
            <center><hr size="5%" color="white" width="50%"></center>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Hi!, My name is Fierza, I live in Surabaya, Indonesia, I study at the Muhammadiyah University of Surabaya, my goal is to become a pentester or a web programmer, welcome to my personal site</p>
            </div>
            <div class="col-md-6">
              <p>I studied at Sman 18 Surabaya majoring in languages, I have been interested in the world of IT since high school and interested in studying IT</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="darkred" fill-opacity="1" d="M0,288L40,277.3C80,267,160,245,240,224C320,203,400,181,480,186.7C560,192,640,224,720,224C800,224,880,192,960,176C1040,160,1120,160,1200,144C1280,128,1360,96,1400,80L1440,64L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    <!-- akhir about -->
<br><br>
    <!--my skill-->
    <div id="skill" class="skill">
      <div class="container-fluid">
        <div class="row">
          <div class="col text-center">
            <br>
            <h2>My Skill</h2>
            <center><hr size="5%" color="white" width="50%"></center>
          </div>
          <br>
          <center>
            <ul class="sm">
              <li>
                <p class="tulisan fs-5"><img class="icon" src="img/hacker.png" width="50" height="50">Pentester</p>
              </li>
              <li>
                <p class="tulisan fs-5"><img class="icon" src="img/frontend.png" width="50" height="50">Front End Developer</p>
              </li>
            </ul>
          </center>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="darkred" fill-opacity="1" d="M0,96L720,288L1440,128L1440,320L720,320L0,320Z"></path></svg>
    <!-- akhir my skill -->

    <!-- my certificate -->
    <div id="serti" class="sertifikat">
      <div class="container-fluid">
        <br>
       <div class="row">
          <div class="col text-center">
            <br>
            <h2>My Certificate</h2>
            <center><hr size="5%" color="white" width="50%"></center>
          </div>
          <div class="row">
            <div class="col-md-4">
              <center><img class="serti" src="img/1.jpg" width="300" height="200"></center>
            </div>
            <div class="col-md-4">
              <center><img class="serti" src="img/2.jpg" width="313" height="200"></center>
            </div>
            <div class="col-md-4">
              <center><img class="serti" src="img/serti-3.jpeg" width="300" height="200"></center>
            </div>
          </div>
      </div>
    </div>
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="darkred" fill-opacity="1" d="M0,256L288,32L576,192L864,128L1152,320L1440,192L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path></svg>
    <!-- akhir my certificate -->
<br><br>
    <!-- my community -->
    <div id="team" class="komunitas">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <br>
            <h2>My Community</h2>
            <center><hr size="5%" color="white" width="50%"></center>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3 team">
              <div class="card">
                <img src="img/d3c.jpg" class="card-img-top" alt="Dark 3xploit Cyber">
                <div class="card-body">
                  <p class="card-text">Dark 3xploit Cyber</p>
                  <p class="card-text">Founder : Andy / Mr.V4mp1r3</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 team">
              <div class="card">
                <img src="img/bs.jpg" class="card-img-top" alt="Dark 3xploit Cyber">
                <div class="card-body">
                  <p class="card-text">Buitenzorg Syndicate</p>
                  <p class="card-text">Founder : Gilang / Tuan Badut</p>
                </div>
              </div>
            </div>

            <div class="col-md-3 team">
              <div class="card">
                <img src="img/clanx12.jpeg" class="card-img-top" alt="Dark 3xploit Cyber">
                <div class="card-body">
                  <p class="card-text">Clan X12</p>
                  <p class="card-text">Founder : Muhammad Ibnu / Black_X12</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- akhir my community -->
<br><br><br>
    <!-- contact -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="darkred" fill-opacity="1" d="M0,64L1440,320L1440,320L0,320Z"></path></svg>
    <div id="kontakku" class="kontak">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
              <center>
                <h4 class="mt-3">Social Media</h4>
                <hr size="5%" color="white" width="50%">
              </center>
              <br>
                <ul class="sm">
                  <br>
                  <li>
                    <img class="serti ig" src="img/ig.png" width="50" height="50">zero_byte_forum
                  </li>
                  <br>
                  <li>
                    <img class="serti ig" src="img/wa.png" width="60" height="60">-
                  </li>
                  <br>
                  <li>
                    <img class="serti ig" src="img/gmail.png" width="50" height="50">eriezfierza@gmail.com
                  </li>
                  <br>
              </ul>
            </div>

            <div class="col-md-6">
            <center>
                <h4 class="mt-3">Message</h4>
                <hr size="5%" color="white" width="50%">
              </center>
              <br>
              <form method="POST">
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email :</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subject :</label>
                    <input type="text" name="subjek" class="form-control" id="exampleFormControlInput1" placeholder="Subject" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message :</label>
                    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="7" required></textarea>
                  </div>  
                  <button type="submit" class="tombol btn btn-dark">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir contact -->
  <br><br><br><br>
    <!-- footer -->
    <div class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <br><br>
            <p class="text-center mt-5 fs-6">Design & Developed By FierzaXploit<br> Copyright &copy; 2021</p>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir footer -->
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->

    <!-- animasi loading -->
    <script >
        var myVar;

        function myFunction() {
          myVar = setTimeout(showPage, 1000);
        }

        function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("myDiv").style.display = "block";
        }
    </script>
    <!-- akhir animasi loading -->

    <!-- efect ngetik -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <script>
      new Typed('#typed',{
        strings : ["I'M Fierza","I'M Fierza"],
        typeSpeed : 200,
        delaySpeed : 100,
        loop : true
      });
    </script>
    <!-- akhir efect ngetik -->
  </body>
</html>