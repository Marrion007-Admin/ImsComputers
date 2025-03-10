<?php 
    ob_start();
?>



<style>
    /* Style général */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
    }

    /* Carrousel des services */
    .carousel-container {
        position: relative;
        width: 100%;
        overflow: hidden;
        margin: 50px 0; /* Ajout de la marge */
        background-color: #f9f9f9; /* Fond pour le carrousel */
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    }

    .carousel {
        display: flex;
        transition: transform 0.5s ease;
    }

    .carousel .service-card {
        flex: 0 0 auto; /* Les cartes ne prennent que l'espace nécessaire */
        margin-right: 20px; /* Espacement entre les cartes */
        width: 300px; /* Largeur fixe des cartes */
    }

    /* Les boutons du carrousel */
    .carousel-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: #0066cc;
        color: white;
        border: none;
        font-size: 30px;
        padding: 15px;
        cursor: pointer;
        z-index: 10;
        border-radius: 50%;
        transition: background-color 0.3s ease;
    }

    .carousel-button.prev {
        left: 30px; /* Distance du bord gauche */
    }

    .carousel-button.next {
        right: 30px; /* Distance du bord droit */
    }

    .carousel-button:hover {
        background-color: #004080;
    }

    /* Section des images défilantes */
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 100%;
        height: 200px;
        margin-top: 20px;
    }

    .scrolling-images {
        display: flex;
        animation: scroll 15s linear infinite;
    }

    .scrolling-images img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }

    /* Texte résumé */
    .summary-text {
        text-align: center;
        background-color: #004080;
        color: white;
        padding: 20px;
        font-size: 20px;
        font-weight: bold;
        margin-top: 0px;
        border-radius: 0 0 15px 15px;
    }

    /* Services container */
    .services-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        padding: 40px;
    }

    .service-card {
        background: linear-gradient(to right, #004080, #0066cc);
        border-radius: 10px;
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 300px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
        color: white;
        padding-bottom: 20px;
    }

    .service-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.2);
        background: linear-gradient(to right, #0066cc, #004080);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        padding: 10px;
        transition: transform 0.5s ease;
    }

    .service-card:hover img {
        transform: scale(1.1);
    }

    .service-content {
        padding: 20px;
        background-color: #ffffff;
        color: #004080;
        border-radius: 0 0 10px 10px;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    .service-card:hover .service-content {
        color: white;
        background-color: #0066cc;
    }

    .service-content h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .service-content p {
        font-size: 14px;
        line-height: 1.6;
    }

    .service-content a {
        display: inline-block;
        margin-top: 10px;
        color: #009900;
        font-weight: bold;
        text-decoration: none;
        transition: color 0.3s ease;
        padding: 8px 20px;
        border: 2px solid #009900;
        border-radius: 5px;
    }

    .service-content a:hover {
        color: white;
        background-color: #009900;
        border-color: #009900;
        text-decoration: none;
    }

    /* Texte sur la fiabilité */
    .reliable-service {
        text-align: center;
        background: linear-gradient(to right, #004080, #0066cc);
        color: white;
        padding: 30px;
        margin-top: 0px;
        border-radius: 15px;
        font-size: 18px;
        font-weight: bold;
        line-height: 1.8;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .reliable-service strong {
        color: #FFD700;
    }

    @media (max-width: 768px) {
        .service-card {
            width: 100%;
        }

        .reliable-service {
            font-size: 16px;
            padding: 20px;
        }
    }
</style>

<body>
    <!-- Section images défilantes -->
    <div class="header">
        <div class="scrolling-images">
            <img src="../style/image/nosService.jpeg" alt="Image 1">
            <img src="../style/image/nosService.jpeg" alt="Image 2">
            <img src="../style/image/nosService.jpeg" alt="Image 3">
        </div>
    </div>

    <!-- Texte résumé -->
    <div class="summary-text">
        Découvrez l'ensemble de nos services : développement web, identité visuelle, vente de matériel informatique, et bien plus encore ! Nous offrons des solutions sur-mesure pour répondre à vos besoins spécifiques.
    </div>

    <!-- Carrousel des services -->
    <div class="carousel-container">
        <button class="carousel-button prev" onclick="moveCarousel(-1)">❮</button>
        <div class="carousel">
            <div class="service-card">
                <img src="../style/image/dev.png" alt="Développement Web & Applications">
                <div class="service-content">
                    <h3>Développement Web & Mobile</h3>
                    <p>Création de sites web et d’applications sur-mesure adaptées à votre activité.</p>
                    <a href="developpement.php">➜ Lire Plus</a>
                </div>
            </div>
            <div class="service-card">
                <img src="../style/image/logo.png" alt="Identité Visuelle">
                <div class="service-content">
                    <h3>Identité Visuelle</h3>
                    <p>Conception de logos, affiches et flyers pour une image de marque attrayante selon votre business.</p>
                    <a href="identite_visuelle.php">➜ Lire Plus</a>
                </div>
            </div>
            <div class="service-card">
                <img src="../style/image/vente.png" alt="Vente de Matériel Informatique">
                <div class="service-content">
                    <h3>Vente de Matériel Informatique</h3>
                    <p>Large choix d’équipements performants : ordinateurs, disques durs, etc.</p>
                    <a href="vente_materiel.php">➜ Lire Plus</a>
                </div>
            </div>
            <div class="service-card">
                <img src="../style/image/mainte.png" alt="Installation & Maintenance">
                <div class="service-content">
                    <h3>Installation & Maintenance</h3>
                    <p>Installation et activation de Windows et Microsoft Office avec partitionnement.</p>
                    <a href="installation_maintenance.php">➜ Lire Plus</a>
                </div>
            </div>
            <div class="service-card">
                <img src="../style/image/pro.png" alt="Créativité & Design">
                <div class="service-content">
                    <h3>Créativité & Design</h3>
                    <p>Activation de Canva Pro et CapCut Pro pour du contenu professionnel de qualité.</p>
                    <a href="creativite_design.php">➜ Lire Plus</a>
                </div>
            </div>
            <div class="service-card">
                <img src="../style/image/mainte.png" alt="Réparation & Maintenance">
                <div class="service-content">
                    <h3>Réparation & Maintenance</h3>
                    <p>Diagnostic rapide et réparation efficace de votre PC.</p>
                    <a href="reparation_maintenance.php">➜ Lire Plus</a>
                </div>
            </div>
        </div>
        <button class="carousel-button next" onclick="moveCarousel(1)">❯</button>
    </div>

    <!-- Texte sur la fiabilité -->
    <div class="reliable-service">
        <h2>🔹 Pourquoi Choisir <strong>IMS Computers</strong> ? 🔹</h2>
        <p>
            ✅ <strong>Expertise & Innovation</strong> : Nos solutions sont pensées pour garantir votre réussite.<br>
            ✅ <strong>Service de qualité</strong> : Nous offrons une assistance personnalisée, rapide et fiable.<br>
            ✅ <strong>Satisfaction garantie</strong> : Chaque service est conçu pour répondre à vos besoins spécifiques.
        </p>
    </div>

    <script>
        let currentIndex = 0;

        function moveCarousel(direction) {
            const carousel = document.querySelector('.carousel');
            const totalCards = document.querySelectorAll('.service-card').length;

            // Calcul du nouvel index
            currentIndex += direction;

            // Si on atteint la fin ou le début, on revient à l'autre côté
            if (currentIndex < 0) {
                currentIndex = totalCards - 1;
            } else if (currentIndex >= totalCards) {
                currentIndex = 0;
            }

            // Déplacement du carrousel
            const cardWidth = document.querySelector('.service-card').offsetWidth + 20; // +20 pour l'espacement entre les cartes
            carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    </script>
</body>

<?php
$contenu_page = ob_get_clean();
require_once('layout.php');
?>
