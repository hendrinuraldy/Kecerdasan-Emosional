<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Edukasi Blog</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="icon" href="img/emotispace_logo.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
 <!-- Favicon -->
 <link href="img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


  
    <!-- CSS Libraries -->

    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
   

<!-- Libraries Stylesheet -->
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/edukasiblog6.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid position-relative p-0">
     <!-- Spinner Start -->
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
              <li class="nav-item d-flex align-items-center">
              <img src="emotispace_logo.png"  class="rounded-circle me-0" style="width: 40px; ">  
              </li>
              <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0">&nbsp;EQ Academy</h1>
                    </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <a href="welcome.php" class="nav-item nav-link">Home</a>
                        <a href="konseling1.php" class="nav-item nav-link">Konseling</a>
                        <a href="testemosional.php" class="nav-item nav-link">Test Kecerdasan</a>
                        <a href="edukasi.php" class="nav-item nav-link active">Edukasi</a>
                        
                    </div>
                      
                    <div class="navbar-nav ms-lg-5">
    <!-- Placeholder for user avatar/logo -->
    <li class="nav-item">
        <div class="d-flex align-items-center">
            <span id="greeting" class="me-2 nav-item nav-link">Halo, <?= $_SESSION['name']; ?></span>
            <div class="dropdown">
                <a href="#" class="btn btn-light rounded-circle text-info py-1 px-2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="img/profil.png" alt="Profile Picture" class="rounded-circle" style="width: 30px; height: 30px;">
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" id="logoutLink" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </li>
</div>

            </nav>
        </div>

        <div class="container-fluid hero-header">
                <div class="container">
                    <div class="row g-5 text-center justify-content-center align-items-center">
                        <div class=" text-center">
                            <h1 class="text-white mb-4 animated zoomIn">Edukasi Blog</h1>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        

        <!-- Service Start -->
        <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
   
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="mb-5">Dampak dari Menyembunyikan Emosi</h2>
            <p style="">Menyembunyikan emosi dapat memiliki dampak negatif yang signifikan pada kesejahteraan psikologis seseorang. 

</p>

        </div>
        <p>Berikut adalah penjelasan singkat mengenai dampak dari menyembunyikan emosi:


</p>
        <ul style="text-align:justify;">
  <li><strong>Stres yang Berkepanjangan:</strong> Menyembunyikan emosi seringkali membutuhkan upaya mental yang besar dan bisa menyebabkan stres yang berkepanjangan. Terus-menerus menahan emosi dapat meningkatkan tingkat stres dan menyebabkan ketegangan fisik dan mental.</li>

  <li><strong>Gangguan Kesehatan Mental:</strong> Menyembunyikan emosi secara terus-menerus dapat meningkatkan risiko gangguan kesehatan mental seperti depresi, kecemasan, dan masalah dalam mengatur emosi. Ini karena tekanan yang terus menerus dari menyembunyikan emosi dapat mengganggu keseimbangan psikologis seseorang.</li>

  <li><strong>Gangguan Hubungan Interpersonal:</strong> Ketika seseorang terbiasa menyembunyikan emosi, hal ini dapat menghambat kemampuan mereka untuk berkomunikasi dengan jujur ​​dan terbuka dalam hubungan interpersonal. Ini dapat menyebabkan konflik dan ketidaknyamanan dalam hubungan dengan orang lain.</li>

  <li><strong>Peningkatan Isolasi Sosial:</strong> Menyembunyikan emosi dapat menyebabkan seseorang merasa terisolasi karena mereka mungkin merasa sulit untuk terhubung secara emosional dengan orang lain. Ini dapat mengurangi dukungan sosial yang diperlukan untuk kesejahteraan psikologis yang baik.</li>

  <li><strong>Penurunan Kualitas Hidup:</strong> Secara keseluruhan, menyembunyikan emosi dapat mengakibatkan penurunan kualitas hidup seseorang karena mereka tidak dapat mengekspresikan diri dengan bebas dan menghadapi masalah emosional mereka secara sehat.</li>
</ul>
<hr style="border-top: 1px solid #dee2e6; border-radius: 20px;">

</div>

<p>Daftar Pustaka</p>
<ol>
  <li>Gross, J. J. (2020). <em>Emotion regulation: Current status and future prospects</em>. Psychological Inquiry, 31(1), 1-15.</li>
  
  <li>Brackett, M. A., & Rivers, S. E. (2021). <em>Interpersonal emotional regulation: A framework for understanding how people affect one another’s emotions</em>. Current Directions in Psychological Science, 30(1), 9-14.</li>
  
  <li>Sin, N. L., & Lyubomirsky, S. (2020). <em>Enhancing well-being and alleviating depressive symptoms with positive psychology interventions: A practice-friendly meta-analysis</em>. Journal of clinical psychology, 76(3), 328-342.</li>
  
  <li>Ford, B. Q., & Gross, J. J. (2020). <em>Why beliefs about emotion matter: An emotion-regulation perspective</em>. Current Opinion in Psychology, 33, 1-6.</li>
  
  <li>Kashdan, T. B., & Rottenberg, J. (2022). <em>Psychological flexibility as a fundamental aspect of health</em>. Annual Review of Clinical Psychology, 18, 35-59.</li>
</ol>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Hubungi Kami</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Bekasi, Jawa Barat</p>
                        <p><i class="fa fa-phone-alt me-3"></i>08129712971927</p>
                        <p><i class="fa fa-envelope me-3"></i>raldyhend@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Jam Konsultasi</h5>
                        <p>Jam 09.00 - 16.00</p>
                        
                    </div>
                    <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4">Link Populer</h5>
                        <a class="btn btn-link" href="C/xampp/htdocs/Login and Register/edukasi.php">Edukasi</a>
                        <a class="btn btn-link" href="C/xampp/htdocs/Login and Register/testemonial.php">Tes Kecerdasan</a>
                        <a class="btn btn-link" href="C/xampp/htdocs/Login and Register/webinar.php">Webinar</a>
                        <a class="btn btn-link" href="C/xampp/htdocs/Login and Register/">Form Diskusi</a>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4">Bantuan</h5>
                        <p style="text-align:justify;">Jika anda masih bingung, bisa langsung bertanya kepada kami melalui whatsapp.</p>
                        <div class="position-relative w-100 mt-3">
                            
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Raldy Hendrianu</a>, All Right Reserved. 
							
							 <a class="border-bottom" >Penulisan Ilmiah</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-info btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- JavaScript Libraries -->
  
    <script src="lib/wow/wow.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
     <!-- JavaScript Libraries -->
     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <script src="lib/easing/easing.min.js"></script>
     <script src="lib/owlcarousel/owl.carousel.min.js"></script>
     <script src="lib/waypoints/waypoints.min.js"></script>
     <script src="lib/counterup/counterup.min.js"></script>
     <script src="lib/parallax/parallax.min.js"></script>
     
     <!-- Contact Javascript File -->
     <script src="mail/jqBootstrapValidation.min.js"></script>
     <script src="mail/contact.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>




  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <script>
    // Function to handle logout
    document.getElementById('logoutLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        Swal.fire({
            title: 'Logout',
            text: 'Apakah Anda yakin ingin keluar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to index.php
                window.location.href = 'index.php';
            }
        });
    });
</script>
<script>
function updateGreeting() {
    var greetingElement = document.getElementById("greeting");
    var now = new Date();
    var hour = now.getHours();
    var name = "<?php echo $_SESSION['name']; ?>"; // Assuming PHP is used to fetch session data
    
    var greeting;
    if (hour >= 5 && hour < 12) {
        greeting = "Selamat pagi, " + name;
    } else if (hour >= 12 && hour < 16) {
        greeting = "Selamat siang, " + name;
    } else if (hour >= 17 && hour < 18) {
        greeting = "Selamat sore, " + name;
    } else {
        greeting = "Selamat malam, " + name;
    }
    
    greetingElement.textContent = greeting;
}

// Update greeting initially
updateGreeting();

// Update greeting every minute
setInterval(updateGreeting, 60000);
</script>
</body>

</html>