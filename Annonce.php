<?php

$title = 'Annonces - Stuliday';

require 'includes/header.php';
?>

<div class="container">
<h3 class="field">Créer votre annonce</h3>


<div class="field">
  <label class="label">Nom de votre annonce</label>
  <div class="control">
    <input class="inputannonce" type="text" placeholder="tapez le nom de votre annonce" value="">
  </div>
</div>
<div class="field">
  <label class="label">Message</label>
  <div class="control">
    <textarea class="textarea" placeholder="Veuillez taper la description de votre annonce"></textarea>
  </div>
</div>
<div class="field">
  <label class="label">Ville ou est situé votre annonce</label>
  <div class="control">
    <input class="input " type="text" placeholder="Ex : France, Bordeaux , 33 000" value="">

</div>


<div class="field">
  <label class="label">Catégories</label>
  <div class="control">
    <div class="select">
      <select>
        <option>Maison</option>
        <option>Appartement</option>
        <option>immeuble</option>
        <option>chateau</option>
        <option>plage privée</option>
      </select>
    </div>
  </div>
</div>

<button type="submit" class="btn" name="upload_submit">Choissiez votre photo

<?php
function uploadFile(){
//Vérification Traitement Upload
    // Si le fichier est bien envoyé et qu'il n'y a pas d'erreur alors...
    if(isset($_FILES['uploadFile']) AND $_FILES['uploadFile']['error'] == 0) {
        // Si le fichier fait moins de 10Mo
        if ($_FILES['uploadFile']['size'] < 10000000 ) {
            // Renvoie un array contenant l'extension du fichier
            $infoUpload = pathinfo($_FILES['uploadFile']['name']);
            //stocke le résultat de l'array  dans la variable
            $extensionUpload = $infoUpload['extension'];
            // On crée un tableau d'extensions autorisées
            $extensionsAllowed = ['jpg', 'jpeg', 'gif', 'png'];
            if(in_array($extensionUpload, $extensionsAllowed)) {
                // On peut maintenant valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['uploadFile']['tmp_name'], 'uploads/' . basename($_FILES['uploadFile']['name']));
                echo "L'envoi a bien été effectué";
            } else {
                echo 'On a eu un soucis';
            }
        }
    }
  }
    ?>
    </div>

    

<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      J'accepte les <a href="#">termes et les conditions</a>
    </label>
  </div>
</div>

<div class="container">
            </div>
            <button type="submit" class="button is-primary" name="product_submit">Enregistrer votre annonce</button>
        </form>
    </div>
</div>
</div>
</div>
<div>
