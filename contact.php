<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fansite.css" />
    <link rel="stylesheet" type="text/css" href="header/footer/header.css" />
    <link rel="stylesheet" type="text/css" href="header/footer/footer.css" />
    <title>Accueil</title>
</head>
<body>
    <header>
    <?php include "header/footer/header.html" ?>
    </header>

    <main>
    <h3>Contact Form</h3>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Prénom</label>
    <input type="text" id="fname" name="Prénom" placeholder="Votre nom">

    <label for="lname">Nom</label>
    <input type="text" id="lname" name="Nom" placeholder="Votre Nom">

    <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> -->

    <label for="subject">Votre demande</label>
    <textarea id="subject" name="subject" placeholder="" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
      
    </main>

    <footer>
    <?php include "header/footer/footer.html" ?>
    </footer>
</body>
</html>