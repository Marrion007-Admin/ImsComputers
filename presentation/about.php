<?php
ob_start();
?>

<br>
<section>
<section class="section1">
    <div class="container">
        <div class="col-md-12">
            <video class="hover-video w-100" muted loop>
                <source src="../style/image/mavideo.mp4" type="video/mp4 "  >
                Votre navigateur ne supporte pas les vidéos HTML5.
            </video>
        </div>
    </div>
</section>

<br>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6">
                <img src="../style/image/about2.jpeg" class="im" alt="Notre Histoire">
            </div>
            <div class="col-md-6">
                <h2>Notre Histoire</h2>
                <p>Fondée le 21 novembre 2023, IMS Computer est une entreprise innovante
                    et dynamique, spécialisée dans les solutions informatiques sur mesure, conçues pour répondre aux
                    enjeux technologiques d'aujourd'hui. Forts de l'expertise et de la passion de notre équipe, nous
                    proposons
                    une large gamme de services professionnels, visant à accompagner aussi bien les particuliers que les
                    entreprises
                    dans leur transformation numérique. Notre engagement : offrir des solutions de qualité, évolutives
                    et adaptées aux
                    besoins spécifiques de chaque client, afin de maximiser leur performance et leur efficacité dans un
                    monde de plus en
                    plus digitalisé.</p>
            </div>
        </div>

        <div class="row mb-4 flex-md-row-reverse">
            <div class="col-md-6">
                <img src="../style/image/about1.jpeg" class="im1" alt="Notre Mission">
            </div>
            <div class="col-md-6">
                <h2>Notre Mission</h2>
                <p>Chez IMS Computer, nous nous engageons à fournir des solutions innovantes et adaptées aux besoins de
                    nos clients.</p>
                <ul class="list-unstyled">
                    <li>🚀 <strong>Infographie :</strong> Création de visuels percutants qui captivent votre audience.
                    </li>
                    <li>💻 <strong>Développement Web :</strong> Conception et mise en ligne de sites performants.</li>
                    <li>🎨 <strong>Design Graphique :</strong> Identités visuelles uniques et professionnelles.</li>
                    <li>🔍 <strong>Stratégie Digitale :</strong> Mise en place de stratégies adaptées aux nouvelles
                        tendances.</li>
                </ul>
                <p>Nous croyons en une approche personnalisée pour garantir qualité et innovation.</p>
            </div>

        </div>

        <div class="row mb-4">
            <div class="col-md-6">
                <img src="../style/image/about3.jpeg" class="im2" alt="Nos Valeurs">
            </div>
            <div class="col-md-6">
                <h2>Nos Valeurs</h2>
                <p>Chez IMS Computer, nous plaçons l’innovation, la qualité
                    et la satisfaction client au cœur de notre démarche. Chaque projet est
                    guidé par notre engagement à offrir des solutions créatives et performantes.
                    Nous croyons en la transparence, la collaboration et l’excellence, afin d’accompagner
                    nos clients vers le succès. Ensemble, construisons l’avenir avec passion et professionnalisme. 🚀
                </p>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    let videos = document.querySelectorAll(".hover-video");

    videos.forEach((video) => {
        video.addEventListener("mouseenter", function () {
            video.play();
        });

        video.addEventListener("mouseleave", function () {
            video.pause();
            video.currentTime = 0; // Remet la vidéo au début
        });
    });
});

</script>

<?php
$contenu_page = ob_get_clean();
require_once('layout.php');
?>
