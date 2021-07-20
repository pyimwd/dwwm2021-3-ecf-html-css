<?php $page='contact';
$title='Contactez-nous'; ?>

<?php include('parts/header.php'); ?>

<main>
    <section class="contact">
        <div class="container">
            <h2 class="section-title">Nous contacter</h2>
            <form class="contact-form">
                <div class="form-group">
                    <label for="name">Votre nom</label>
                    <input type="text" id="name" placeholder="Entrez votre nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Votre e-mail</label>
                    <input type="email" id="email" placeholder="Entrez votre adresse e-mail" required>
                </div>
                <div class="form-group grid-full-width">
                    <label for="msg">Votre message</label>
                    <textarea id="msg" placeholder="Entrez votre message" required></textarea>
                </div>
                <div class="form-group grid-full-width">
                    <button class="btn-contact">Envoyer</button>
                </div>
            </form>
        </div>
    </section>
</main>

<?php include('parts/footer.php'); ?>