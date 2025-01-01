<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link rel="stylesheet" href="styles.css">
    <!--Let browser know website is optimized for mobile-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
  </head>

  <body>

    <style>
            /* Styles spécifiques au formulaire de contact dans un conteneur */
        .contact-form-container {
          max-width: 600px;
          margin: 0 auto;
          padding: 30px;
          background-color: #f4f4f4;
          border-radius: 10px;
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        
        .contact-form h2 {
          text-align: center;
          font-size: 24px;
          margin-bottom: 20px;
          color: #333;
        }
        
        .contact-form label {
          font-weight: bold;
          margin-bottom: 8px;
          color: #555;
        }
        
        .contact-form input,
        .contact-form textarea {
          width: 100%;
          padding: 12px;
          margin-bottom: 15px;
          border: 1px solid #ffffff;
          border-radius: 5px;
          font-size: 16px;
          box-sizing: border-box;
        }
        
        .contact-form textarea {
          resize: vertical;
        }
        
        .contact-form button {
          padding: 12px;
          background-color: #007BFF;
          color: white;
          border: none;
          border-radius: 5px;
          font-size: 16px;
          cursor: pointer;
          width: 100%;
        }
        
        .contact-form button:hover {
          background-color: #0056b3;
        }
        
          </style>

    <header>

      <div class="header-left">
        <h5>Portfolio CHHEAK Ophelia</h5>
      </div>

      <div class="navbar">
        <a href="index.html">Accueil</a>
        <a href="apropos.html">À propos</a>
        <a href="parcours.html">Parcours</a>
        <a href="projet.html">Projet</a>
        <a href="veille.html">Veille Technologique</a>
        <a href="contact.php" class="active">Contact</a>
      </div>
    </header>

    <br>

    <main>

      <section>
        <h4>Formulaire de contact</h4>

        <div class="conteneur">
          <p>Pour toute demande ou question, merci de remplir le
            formulaire de contact afin que je puisse vous répondre
            rapidement et efficacement.</p>
        </div>

        <br>

        <div class="conteneur">

          <div class="contact-form-container">
            <form class="contact-form" action="traitement.php" method="POST">
              <h2>Contactez-nous</h2>

              <label for="name">Nom</label>
              <input type="text" id="name" name="name" required
                placeholder="Votre nom">

              <label for="email">Email</label>
              <input type="email" id="email" name="email" required
                placeholder="Votre email">

              <label for="sujet">Sujet</label>
              <input type="text" id="sujet" name="sujet" required
                placeholder="Le sujet de votre message">

              <label for="message">Message</label>
              <textarea type="text" id="message" name="message" rows="4" required
                placeholder="Votre message"></textarea>

              <button type="submit" value="envoyer" name="envoyer">Envoyer</button>
            </form>
          </div>

        </div>

        <br>
        <br>

      </section>

      <script src="script.js"></script>

    </main>

    <footer>
      <div class="footer-content">
        <div class="copyright">
          &copy; 2024 - Mon Portfolio. Tous droits réservés.
        </div>
      </div>
    </footer>
  </body>
</html>
