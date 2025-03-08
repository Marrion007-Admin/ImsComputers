<?php 
    ob_start();
?>

<section>
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <img src="../style/image/about2.jpeg" class="im" alt="Notre Histoire">
                </div>
                <div class="col-md-6">
                    <h2>Notre Histoire</h2>
                    <p>Fondée le 21 novembre 2023, IMS Computer est une entreprise innovante 
                        et dynamique, spécialisée dans les solutions informatiques sur mesure, conçues pour répondre aux 
                        enjeux technologiques d'aujourd'hui. Forts de l'expertise et de la passion de notre équipe, nous proposons 
                        une large gamme de services professionnels, visant à accompagner aussi bien les particuliers que les entreprises 
                        dans leur transformation numérique. Notre engagement : offrir des solutions de qualité, évolutives et adaptées aux 
                        besoins spécifiques de chaque client, afin de maximiser leur performance et leur efficacité dans un monde de plus en
                        plus digitalisé.</p>
                </div>
            </div>
            
            <div class="row mb-4 flex-md-row-reverse">
                <div class="col-md-6">
                    <img src="../style/image/about1.jpeg" class="im1" alt="Notre Mission">
                </div>
                <div class="col-md-6">
                    <h2>Notre Mission</h2>
                    <p>Chez IMS Computer , nous nous engageons à fournir des solutions innovantes et adaptées aux besoins de nos clients. Notre mission est de transformer vos idées en réalité grâce à une expertise pointue dans plusieurs domaines :

                        🚀 Infographie : Nous créons des visuels percutants et engageants qui captivent votre audience et renforcent votre image de marque.
                        
                        💻 Développement Web : De la conception à la mise en ligne, nous développons des sites web performants et sur-mesure, optimisés pour offrir une expérience utilisateur exceptionnelle.
                        
                        🎨 Design Graphique : Notre équipe de designers talentueux imagine des identités visuelles uniques qui reflètent l’essence de votre marque et vous démarquent de la concurrence.
                        
                        🔍 Stratégie Digitale : Nous accompagnons nos clients dans la mise en place de stratégies digitales efficaces, en combinant créativité et technologies de pointe.
                        
                        Notre priorité est de garantir qualité, innovation et satisfaction à chacun de nos projets. Nous croyons en une approche personnalisée, où chaque client est unique et mérite une attention particulière pour réussir dans un monde digital en constante évolution.</p>
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
                           nos clients vers le succès. Ensemble, construisons l’avenir avec passion et professionnalisme. 🚀</p>
                </div>
            </div>
        </div>
    </section>

<?php
$contenu_page = ob_get_clean();
require_once('layout.php');
?>
