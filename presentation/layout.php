<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - IMS COMPUTERS</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/icons/font/bootstrap-icons.min.css">
    <script src="../style/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="../style/css/style.css">
    <link rel="icon" href="../style/image/LOGOIMS.png">
</head>

<body class="bg-white">
    <section class="section-header">

        <div class="clobe">
            <header class="navbar navbar-expand-lg mx-3">
                <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="bi bi-list h2"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-center mt-4 p-2 div1-collapse" id="navbarNav">
                    <ul class="navbar-nav justify-content-center border border-white border-2 rounded-2 p-1">
                        <li class="nav-item px-4 ps-4 text-white active">
                            <a class="nav-link text-white" aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item px-4 text-white">
                            <a class="nav-link text-white" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item px-4 ">
                            <a class="nav-link text-white" href="services.php">Services</a>
                        </li>
                        <li class="nav-item px-4 ">
                            <a href="about.php" class="nav-link text-white">A Propos</a>
                        </li>
                        <li class="nav-item px-3 ps-4 ">
                            <a href="agent.php" class="nav-link text-white ">Agents</a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="justify-content-center text-center mt-1">
                <a href="" class="navbar-brand">
                    <img src="../style/image/LOGOIMS.png" class="" alt="">
                </a> <br>
                <div class="mt-3">
                    <h5 class="text-white text-uppercase">Bienvenue sur IMS COMPUTERS</h5>
                    <p class="text-white transformer p-2">Transformez vos idées en réalité numérique avec des solutions
                        innovantes, <br>
                        fiables et adaptées à vos besoins. <span class="fw-bold">IMS COMPUTERS</span></p>
                </div>
                <div class="social-links pb-2">
                    <a href="https://facebook.com" target="_blank" class="facebook" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="instagram" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="twitter" title="Twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="https://whatsapp.com" target="_blank" class="whatsapp" title="WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" class="youtube" title="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <main>
        <?php echo $contenu_page; ?>
    </main>    

    <footer>
        
    </footer>

</body>

</html>
