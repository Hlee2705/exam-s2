
<section class="uploader">
    <div class="upload-container">
    <h2>Ajouter un objet</h2>
    <form action="../controleur/t_pub.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nom_objet">Nom de l'objet</label>
        <input type="text" id="nom_objet" name="nom_objet" placeholder="Nom de l'objet" required>
      </div>

      <div class="form-group">
        <label for="media">Fichier (image ou vidéo)</label>
        <input type="file" id="media" name="fichier" accept="image/*,video/*" required>
      </div>
      <button type="submit" class="btn-upload">Ajouter</button>
    </form>
    <div class="back-link">
      <a href="list_object.php">⬅ Retour </a>
    </div>
  </div>
</section>