<!DOCTYPE html>
<html>
<head>
<title>Login - Pugb</title>
<meta name="viewport" content="width=devic­­e-width, initial-scale=1">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link href="styles.css" rel="stylesheet" media="screen" />

<body>
    <main>
        <div class="contact-form">
            <form action="formulaire_process.php" method="post" class="form-style" enctype="multipart/form-data">
                <h1>Contact</h1>
                <div class="row">
                    <label for="name">Nom:</label>
                    <input type="text" name="firstname" id="name" autocomplete="off" placeholder="Votre nom">
                    <span class="border-focus"></span>
                </div>
                <div class="row">
                    <label for="lname">Prenom</label>
                    <input type="text" name="lastname" id="lname" autocomplete="off" placeholder="Votre prenom">
                    <span class="border-focus"></span>
                </div>
                <div class="row">
                    <label for="mail">Email:</label>
                    <input type="email" name="mail" id="mail" autocomplete="off" placeholder="Votre Email">
                    <span class="border-focus"></span>
                </div>
                
                <div class="row">
                    <label for="infos">Fichier d'informations :</label> 
                    <input type="file" name="userfile" id="infos"   /><br>
                    <span class="border-focus"></span>
                    <input type="file" name="userfile" id="infos"   /><br>
                    <span class="border-focus"></span>
                    <input type="file" name="userfile" id="infos"   /><br>
                    <span class="border-focus"></span>
                </div>

                <div class="row-button">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </main>
</body>
</html>
