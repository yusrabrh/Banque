<!DOCTYPE html>
<html lang="eng" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>BIENVENUE A VOTRE PAGE</title>
    </head>
    <body>
        <form method="POST" action="frontal.php" >
            <fieldset>
                <legend> Se Connecter</legend>
                     <p>
                     <label for="Login"> Login :</label>
                       <input type="text" id="Login" name="username" required><br>
                     </p>
                     <p>
                        <label for="mdp"> Mot de Passe :</label>
                          <input type="password" id="mdp" name="password" required><br>
                     </p>
                     
                     <p>
                     <input type="submit" value="connecter" name= "envoyer" />
                    </p>
					<?php echo $msg ?>
                
            </fieldset>
        </form>
    </body>
</html>