<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <meta http-equiv="X-UA-Compatible" contac="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription</title>
    </head>

<body>

    <form method="POST" action="traitement.php">
            <label for="nom">Votre nom*</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
        <br>
            <label for="prenom">Votre prénom*</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom" required>
        <br>
            <label for="pseudo">Votre pseudo*</label>
            <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required>
        <br>
            <label for="mail">Votre adresse email*</label>
            <input type="mail" id="mail" name="mail" placeholder="Entrez votre adresse email" required>
        <br>
            <label for="password">Votre mot de passe*</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
        <input type="submit" value ="M'inscrire" name="ok">
    </form>

</body>
</html>