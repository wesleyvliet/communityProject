<?php //require_once 'view/header.php'; ?>
<a href="overview-artiekelen">Terug</a>

<form action="?op=create-article" method="post">
    <label for="title">Titel</label>
    <input type="text" id="title" name="title">
    <label for="categorie">Categorie</label>
    <?php echo $articleform; ?>
    <label for="author">Auteur</label>
    <input type="text" name="author" id="author">
    <label for="content">Inhoudt</label>
    <textarea name="text" id="content" cols="30" rows="10"></textarea>
    <input type="submit" value="Send">
</form>

<?php //require_once 'view/footer.php'; ?>