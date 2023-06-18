<html>
  <head>
    <title>Les superglobales Get, Post et Files</title>
  </head>
  <body>
<?php
if (isset($_POST['submit']) && isset($_FILES['photo'])) {
    // récupérer des informations sur notre image
    $image_name = $_FILES['photo']['name']; // nom de notre fichier
    $image_tmp_name = $_FILES['photo']['tmp_name']; // dossier temporaire 
    $image_error = $_FILES['photo']['error']; // valeur d'erreur de notre image
    if ($image_error === 0) {
        // Enregistrer l'image dans notre dossier uploads
        $destination = "uploads/" . $image_name ; // uploads/1.png 
        move_uploaded_file($image_tmp_name, $destination);
        echo "L'image a bien été enregistrée";
    } else {
        echo "Il y a eu une erreur lors du téléchargement de l'image";
    }
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="image">Choisir une image :</label>
  <input type="file" name="photo" id="image">
  <button type="submit" name="submit">Envoyer</button>
</form>

  </body>
</html>