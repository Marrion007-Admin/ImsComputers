<?php 
    ob_start();
?>


    <div class="p-4 line-after-header row justify-content-evenly text-center m-0">
        <h3 class="fw-bold text-uppercase text-white">Besoins de nos Services ?</h3>
        <a href="tel:+221775969897"
            class=" text-decoration-none col-lg-2 col-md-3 col-sm-7 col-10 bg-success text-white py-2 mt-2 border border-white rounded-3 fw-bold ">
            <i class="bi bi-telephone-forward-fill text-white h5 me-2"></i> Contact us
        </a>

        <a href="sms:+221775969897"
            class="text-decoration-none col-lg-2 col-md-3 col-sm-7 col-10 bg-info text-white border border-white py-2 mt-2 rounded-3 fw-bold">
            <i class="bi bi-chat-dots-fill text-white h5 me-2"></i> Ecriver nous
        </a>
        <a href="mailto:contact@imscomputers.com" target="_blank"
            class="text-decoration-none col-lg-2 col-md-3 col-sm-7 col-10 bg-primary border border-white text-white py-2 mt-2 rounded-3 fw-bold">
            <i class="bi bi-envelope-at-fill h5 text-white me-2"></i> Ecriver nous
        </a>
    </div>

    <section class="row m-0 bg-light pt-4 p-2">
        
    <div class="container contact-container col-11  bg-white p-4">
        <h5 class="text-center text-primary text-uppercase">Contactez IMS Computers</h5> <hr>
        <br>
        <form id="contactForm" class="row">
            <div class="mb-3 col-md-6">
                <!-- <label for="firstName" class="form-label">Prénom :</label> -->
                <input type="text" class="form-control" id="firstName" placeholder="Votre prénom">
                <div id="firstNameFeedback" class="form-text"></div>
            </div>
            <div class="mb-3 col-md-6">
                <!-- <label for="lastName" class="form-label">Nom :</label> -->
                <input type="text" class="form-control" id="lastName" placeholder="Votre nom">
                <div id="lastNameFeedback" class="form-text"></div>
            </div>
            <div class="mb-3">
                <!-- <label for="email" class="form-label">Adresse Email :</label> -->
                <input type="email" class="form-control" id="email" placeholder="Votre adresse email">
                <div id="emailFeedback" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre Message :</label>
                <textarea class="form-control form-control-text" id="message" rows="5" placeholder="Écrivez votre message ici..."></textarea>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary w-75" id="submitButton">Envoyer</button>
            </div>
        </form>
        <div class="info text-center mt-4">
            <p>Appelez-nous : <a href="tel:+221775969897">+221 77 596 98 97</a> | <a href="tel:+221778031579">+221 77 803 15 79</a></p>
            <p>Adresse : Dakar, Sénégal</p>
        </div>
    </div>
    </section>





    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const firstName = document.getElementById('firstName');
        const lastName = document.getElementById('lastName');
        const email = document.getElementById('email');
        const firstNameFeedback = document.getElementById('firstNameFeedback');
        const lastNameFeedback = document.getElementById('lastNameFeedback');
        const emailFeedback = document.getElementById('emailFeedback');
        const submitButton = document.getElementById('submitButton');

        submitButton.addEventListener('click', () => {
            let isValid = true;

            // Validate first name
            if (firstName.value.trim().length < 3) {
                firstNameFeedback.textContent = 'Prénom incorrect : minimum 3 caractères.';
                firstNameFeedback.className = 'error';
                firstNameFeedback.style.display = 'block';
                isValid = false;
            } else {
                firstNameFeedback.textContent = 'Prénom correct.';
                firstNameFeedback.className = 'success';
                firstNameFeedback.style.display = 'block';
            }

            // Validate last name
            if (lastName.value.trim().length < 3) {
                lastNameFeedback.textContent = 'Nom incorrect : minimum 3 caractères.';
                lastNameFeedback.className = 'error';
                lastNameFeedback.style.display = 'block';
                isValid = false;
            } else {
                lastNameFeedback.textContent = 'Nom correct.';
                lastNameFeedback.className = 'success';
                lastNameFeedback.style.display = 'block';
            }

            // Validate email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email.value)) {
                emailFeedback.textContent = 'Adresse email invalide.';
                emailFeedback.className = 'error';
                emailFeedback.style.display = 'block';
                isValid = false;
            } else {
                emailFeedback.textContent = 'Adresse email valide.';
                emailFeedback.className = 'success';
                emailFeedback.style.display = 'block';
            }

            // Display an alert if the form is valid
            if (isValid) {
                alert('Formulaire soumis avec succès !');
            }
        });
    </script>

<?php
    $contenu_page = ob_get_clean();
    require_once('layout.php');
?> 
