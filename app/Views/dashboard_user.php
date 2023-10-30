<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
            background-color: #EFE9DD;
        }
        .navbar{
            position: fixed;
            z-index: 3;
            width: 100%;
            top: 0;
            padding: 15px;
            padding-right: 50px;
            /* background-color: #E4CEA0; */
            background-color: wheat;
            border-radius: 0px 0px 15px 15px;
        }
        .nav-link{
            color: black;
        }
        .carousel-inner img{
            height:85vh; 
            object-fit: cover;
        }
        .wrapper{
            width: 100%;
            /* background-color: #D1B990; */
            background-color: #E4CEA0;
            margin-top: 100px;
            padding-top: 25px;
            padding-bottom: 35px;
        }
        
        .text_link a{
            color: lightslategrey;
            text-decoration: none;
        }
        #product-card{
            width:300px;
            height:400px; 
            border-radius:15px;
        }

        #product-card img{
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius:15px;
        }
        footer{
            margin-top:120px; 
            /* background-color:#E4CEA0; */
            /* background-color:whitesmoke; */
            background-color: wheat;
            border-radius: 15px 15px 0px 0px;
        }
    </style>

</head>
<body>

    <!-- start navbar -->
    <nav class="navbar">
        <div class="container-fluid" >
            <a class="navbar-brand" href="#" style="font-size:32px;">
                <img src="https://www.creativefabrica.com/wp-content/uploads/2020/09/01/Dog-paw-vector-icon-logo-design-heart-Graphics-5223218-1-1-580x387.jpg"
                alt="Logo" width="70" height="50" class="d-inline-block align-text-top" style="margin-right:-20px; margin-top: -5px;">
                PetCare
            </a>
            <ul class="nav nav-underline justify-content-end" style="font-size: 18px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- start banner -->
    <div id="carouselExampleCaptions" class="carousel slide"style="margin-top:75px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?= base_url('/assets/img/banner1.jpg') ?>" class="d-block w-100" alt="banner 1">
            </div>
            <div class="carousel-item">
            <img src="<?= base_url('/assets/img/banner2.jpg') ?>" class="d-block w-100" alt="banner 2">
            </div>
            <div class="carousel-item">
            <img src="<?= base_url('/assets/img/banner3.jpg') ?>" class="d-block w-100" alt="banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end banner -->

    <!-- start appoinment section -->
    <div class="container" style="margin-top:100px;">
        <div class="row align-items-center">
            <div class="col">
                <img src="<?= base_url('assets/img/appoinmentImg.jpg') ?>" alt="" class="img-fluid" style="border-radius:25px;">
            </div>
            <div class="col">
                <p>Anda dapat segera mengamankan tempat dengan cara membuat perjanjian atau booking sekarang. Dengan mengikuti langkah-langkah sederhana ini, Anda dapat memastikan bahwa jadwal Anda teratur dan tidak akan terlewatkan. Booking sekarang tidak hanya memberikan Anda kenyamanan, tetapi juga memastikan bahwa Anda mendapatkan layanan atau fasilitas yang Anda inginkan sesuai dengan waktu yang Anda inginkan. Dengan demikian, Anda dapat menghindari kerumitan dan ketidakpastian, serta memastikan pengalaman yang mulus dan memuaskan. Jadi, jangan tunda lagi, buatlah perjanjian sekarang untuk menikmati semua manfaatnya.
                </p>
                <button type="button" class="btn btn-info" style="color:whitesmoke; padding:8px;">Make an Appoinment Now!</button>
            </div>
        </div>
    </div>
    <!-- end appoinment section -->

    <!-- start our services section -->
    <div class="wrapper">
        <div class="container text-center">
            <h2>Our Services</h2>
            <div class="row cards" style="width:100%">
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('/assets/img/img-service-petcare.png') ?>" alt="" class="icon">
                            <h5 class="card-title">Pet Care</h5>
                            <p class="card-text" >Layanan pet care adalah rangkaian layanan yang mencakup perawatan kesehatan, kebersihan, dan kesejahteraan hewan peliharaan. Ini meliputi pemberian vaksinasi, pemeriksaan kesehatan rutin, dan pengobatan medis untuk memastikan bahwa hewan peliharaan Anda tetap sehat, bahagia, dan dalam kondisi terbaiknya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('/assets/img/img-service-pettraining.png') ?>" alt="" class="icon">
                            <h5 class="card-title">Pet Training</h5>
                            <p class="card-text">Layanan pet training adalah program yang dirancang untuk membantu pemilik hewan peliharaan dalam melatih dan mendidik binatang kesayangan mereka. Ini mencakup pelatihan kepemilikan, perintah dasar, perilaku, dan keterampilan sosial yang diperlukan untuk memastikan bahwa hewan peliharaan Anda menjadi patuh, ramah. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('/assets/img/img-service-combing.png') ?>" alt="" class="icon">
                            <h5 class="card-title">Combing</h5>
                            <p class="card-text">Layanan combing adalah proses perawatan hewan peliharaan yang melibatkan penyisiran atau penyikatan bulu. Ini bertujuan untuk menjaga kebersihan, kesehatan, dan kenyamanan hewan peliharaan Anda. Penyisiran secara teratur membantu menghilangkan bulu mati, mencegah masalah kulit, serta meminimalkan rambut yang berjatuhan di rumah Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                    <div class="card" style="width:18rem;">
                        <div class="card-body">
                            <img src="<?= base_url('/assets/img/img-service-teethbrush.png') ?>" alt="" class="icon">
                            <h5 class="card-title">Teeth Brush</h5>
                            <p class="card-text">Layanan teeth brush adalah tindakan membersihkan gigi hewan peliharaan Anda untuk menjaga kesehatan mulut mereka. Ini melibatkan penggunaan sikat gigi khusus dan pasta gigi yang dirancang untuk hewan peliharaan. Membersihkan gigi secara teratur membantu mencegah masalah gigi dan mulut seperti plak, tartar, bau mulut, dan peradangan gusi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text_link" style="margin-top:50px;">
                <a href="#">See the details</a>
            </div>
        </div>
    </div>
    <!-- end our services section -->

    <!-- start our products section -->
    <div class="container text-center" style="margin-top:100px;">
        <h2 style="margin-bottom:10px;">Our Products</h2>
        <div class="row cards justify-content-center" style="width:100%">
            <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" id="product-card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                        <img src="/assets/img/product1.png"
                        class="w-100"/>
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5><span class="badge bg-primary ms-2">Terlaris</span></h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Whiskas 80gr</h5>
                        <p>Makanan Kucing</p>
                        <h6 class="mb-3">Rp35.000</h6>
                    </div>
                    <button type="button" class="btn" style="background-color: #816234;color:whitesmoke; padding:8px; border-radius:0px 0px 15px 15px;">Buy Now!</button>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" id="product-card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                        <img src="/assets/img/product2.jpeg"
                        class="w-100" />
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5><span class="badge bg-primary ms-2">Terlaris</span></h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">Wishkas kering 7kg</h5>
                        <p>Makanan Kucing</p>
                        <h6 class="mb-3">Rp500.000</h6>
                    </div>
                    <button type="button" class="btn" style="background-color: #816234;color:whitesmoke; padding:8px; border-radius:0px 0px 15px 15px;">Buy Now!</button>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center" style="margin-top:15px;">
                <div class="card" id="product-card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
                    data-mdb-ripple-color="light">
                        <img src="/assets/img/product3.png"
                        class="w-100" />
                        <div class="mask">
                            <div class="d-flex justify-content-start align-items-end h-100">
                                <h5><span class="badge bg-primary ms-2">Terlaris</span></h5>
                            </div>
                        </div>
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-3">MissingLink vitamin</h5>
                        <p>Vitamin Kucing</p>
                        <h6 class="mb-3">Rp125.000</h6>
                    </div>
                    <button type="button" class="btn" style="background-color: #816234;color:whitesmoke; padding:8px; border-radius:0px 0px 15px 15px;">Buy Now!</button>
                </div>
            </div>
        </div>
        <div class="text_link" style="margin-top:50px;">
            <a href="#">Show more products</a>
        </div>
    </div>
    <!-- end our products section -->


    <!-- start footer -->
    <footer class="text-dark text-center py-3">
        <div class="container">
            <p>&copy; 2023 PetCare. All rights reserved.</p>
        </div>
    </footer>
    <!-- end footer -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</body>
</html>