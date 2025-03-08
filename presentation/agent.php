<?php 
    ob_start();
?>
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .team-intro {
            text-align: center;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .team-intro p {
            font-size: 1.2em;
            line-height: 1.6;
        }
        .team-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }
        .team-card {
            background-color: #0080ff;
            color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 119, 255, 0.571);
            width: 300px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .team-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .team-card-content {
            padding: 15px;
            text-align: center;
        }
        .team-card-content h3 {
            margin: 10px 0;
            font-size: 1.5em;
        }
        .team-card-content p {
            margin: 5px 0;
            color: #e1e1e1;
        }
        .team-card-links {
            margin-top: 15px;
        }
        .team-card-links a {
            text-decoration: none;
            color: #fff200;
            margin: 0 10px;
            font-size: 0.9em;
        }
        .team-card-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- En-tête -->
    <header>
        <h1>Notre Équipe IMS Computeur</h1>
    </header>

    <!-- Introduction -->
    <section class="team-intro">
        <p>
            Chez IMS Computeur, notre équipe est notre plus grande force. Composée de professionnels passionnés et experts, nous repoussons les limites de l'innovation pour offrir des solutions technologiques de pointe. Découvrez les membres de notre équipe ci-dessous.
        </p>
    </section>

    <!-- Grille des membres de l'équipe -->
    <section class="team-grid">
        <!-- Carte 1 -->
        <div class="team-card">
            <img src="../style/image/pama.jpg" alt="Photo de l'agent 1">
            <div class="team-card-content">
                <h3>Marrion SETH</h3>
                <p>Développeur Full-Stack</p>
                <div class="team-card-links">
                    <a href="https://www.linkedin.com/in/jeandupont" target="_blank">LinkedIn</a>
                    <a href="mailto:jean.dupont@imscomputeurl.com">Email</a>
                </div>
            </div>
        </div>

        <!-- Carte 2 -->
        <div class="team-card">
            <img src="../style/image/anis.png" alt="Photo de l'agent 1">
            <div class="team-card-content">
                <h3>Anis GOFAK</h3>
                <p>Designer graphique</p>
                <div class="team-card-links">
                    <a href="https://www.linkedin.com/in/mariemartin" target="_blank">LinkedIn</a>
                    <a href="mailto:marie.martin@imscomputeurl.com">Email</a>
                </div>
            </div>
        </div>

        <!-- Carte 3 -->
        <div class="team-card">
            <img src="../style/image/Jude.jpg" alt="Photo de l'agent 1">
            <div class="team-card-content">
                <h3>Jude BELA</h3>
                <p>Développeur Front-End</p>
                <div class="team-card-links">
                    <a href="https://www.linkedin.com/in/pierrelambert" target="_blank">LinkedIn</a>
                    <a href="mailto:pierre.lambert@imscomputeurl.com">Email</a>
                </div>
            </div>
        </div>

        <!-- Carte 4 -->
        <div class="team-card">
            <img src="../style/image/Vianney.jpg" alt="Photo de l'agent 1">
            <div class="team-card-content">
                <h3>vianney DOUMBENENY</h3>
                <p>Admin Reseau|Systeme</p>
                <div class="team-card-links">
                    <a href="https://www.linkedin.com/in/sophieleroy" target="_blank">LinkedIn</a>
                    <a href="mailto:sophie.leroy@imscomputeurl.com">Email</a>
                </div>
            </div>
        </div>

        <!-- Carte 5 -->
        <div class="team-card">
            <img src="../style/image/Youch.png" alt="Photo de l'agent 1">
            <div class="team-card-content">
                <h3>Youch BOUYOBA</h3>
                <p>Community Manager</p>
                <div class="team-card-links">
                    <a href="https://www.linkedin.com/in/luciepetit" target="_blank">LinkedIn</a>
                    <a href="mailto:lucie.petit@imscomputeurl.com">Email</a>
                </div>
            </div>
        </div>
    </section>


</body>

   

<?php
    $contenu_page = ob_get_clean();
    require_once('layout.php');
?>
