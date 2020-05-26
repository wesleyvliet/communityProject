<a href="overview-artiekelen">Terug</a>
<form action="?op=update-article" method="post" enctype='multipart/form-data'>
    <label for="title">Titel</label>
    <input type="text" id="title" name="title" value="<?php echo $article["title"]; ?>">
    <label for="categorie">Categorie</label>
    <?php echo $article["categorie"] ?>
    <label for="author">Auteur</label>
    <input type="text" name="author" id="author" value="<?php echo $article["author"]; ?>">
    <label for="content">Inhoudt</label>
    <textarea name="text" id="content" cols="30" rows="10"><?php echo $article["content"] ?></textarea>
    <label for="image">voorbeeldafbeelding</label>
    <input type="text" hidden name="id" value="<?php echo $article["id"] ?>">
    <input type="file" name="preview" id="image">
    <input type="text" name="image" hidden value="<?php echo $article["preview_image"] ?>">
    <input type="submit" value="Send">
</form>