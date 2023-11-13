<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/css/form.css") ?>">

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
                    <a class="nav-link" href="<?= base_url("user/") ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("user/services") ?>">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("user/products") ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("logout") ?>">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->
    <div class="navbar-extend"></div>

    <?= $this->renderSection('content') ?>

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