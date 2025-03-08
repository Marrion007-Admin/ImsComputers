<?php 
    ob_start();
?>



  <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .header {
            position: relative;
            text-align: center;
            color: white;
        }
        .header img {
            width: 100%;
            height: auto;
        }
        .header-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            color: #fff;
        }
        .header-text h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .header-text p {
            font-size: 16px;
        }

        .services-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px; /* Espacement entre les cartes */
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
            padding: 10px; /* Padding autour de l'image */
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

        @media (max-width: 1200px) {
            .service-card {
                width: 45%;
            }
        }

        @media (max-width: 768px) {
            .service-card {
                width: 100%;
                margin-bottom: 20px;
            }
            .header-text h1 {
                font-size: 24px;
            }
            .header-text p {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .header-text h1 {
                font-size: 20px;
            }
            .header-text p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    
    <div class="services-container">
        <div class="service-card">
            <img src="../style/image/dev.png" alt="Développement Web & Applications">
            <div class="service-content">
                <h3>Développement Web & Mobile</h3>
                <p>Création de sites web et d’applications sur-mesure adaptées à votre activité.</p>
                <a href="#">➜ Lire Plus</a>
            </div>
        </div>
        <div class="service-card">
            <img src="../style/image/logo.png" alt="Identité Visuelle">
            <div class="service-content">
                <h3>Identité Visuelle</h3>
                <p>Conception de logos, affiches et flyers pour une image de marque attrayante selon votre business.</p>
                <a href="#">➜ Lire Plus</a>
            </div>
        </div>
        <div class="service-card">
            <img src="../style/image/vente.png" alt="Vente de Matériel Informatique">
            <div class="service-content">
                <h3>Vente de Matériel Informatique</h3>
                <p>Large choix d’équipements performants : ordinateurs, disques durs, etc.</p>
                <a href="#">➜ Lire Plus</a>
            </div>
        </div>
        <div class="service-card">
            <img src="../style/image/mainte.png" alt="Installation & Maintenance">
            <div class="service-content">
                <h3>Installation & Maintenance</h3>
                <p>Installation et activation de Windows et Microsoft Office avec partitionnement.</p>
                <a href="#">➜ Lire Plus</a>
            </div>
        </div>
        <div class="service-card">
            <img src="../style/image/pro.png" alt="Créativité & Design">
            <div class="service-content">
                <h3>Créativité & Design</h3>
                <p>Activation de Canva Pro et CapCut Pro pour du contenu professionnel de qualité.</p>
                <a href="#">➜ Lire Plus</a>
            </div>
        </div>
        <div class="service-card">
            <img src="../style/image/mainte.png" alt="Réparation & Maintenance">
            <div class="service-content">
                <h3>Réparation & Maintenance</h3>
                <p>Diagnostic rapide et réparation efficace de votre PC.</p>
                <a href="#">➜ Lire Plus</a>
            </div>
        </div>
    </div>
</body>


<?php
$contenu_page = ob_get_clean();
require_once('layout.php');
?>
