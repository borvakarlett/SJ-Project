<?php
    include('_inc/partials/head.php');

    $auth->requireAdminLogin();

    $db = new Database();
    $pdo = $db->getConnection();

    $articleData = new Article($pdo);
    //checks if id was set and if yes it fetches the id and passes it to class to get the article
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $article = $articleData->getArticleById($id);

        //after post request, gets all the new information and then those are edited into the database throgh editArtilce, redirects to main page
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title= $_POST['title'];
            $content= $_POST['content'];
            $rating= $_POST['rating'];
    
            if($articleData->editArticle($id, $title, $content, $rating)){
                header('Location: admin_main.php');
                exit;
            }else{
                echo "The article was not able to be edited.";
            }
        }
    }
?>

<body>
<div id="templatemo_content">
    <h2>Edit Article</h2>

    <!--shows the text that is part of article in the form-->
    <form method="POST">
        <div class="form_group">
            <label for="title">Title:</label>
            <input type="text" name="title" value="<?= htmlspecialchars($article['title']) ?>" required/>
        </div>

        <div class="form_group">
            <label for="content">Content:</label>
            <textarea name="content" rows="15" required><?= htmlspecialchars($article['content']) ?></textarea>
        </div>

        <div class="form_bottom_bar">
            <div class="rating_inline">
                <label for="rating">Rating:</label>
                <input type="number" name="rating" min="0" max="10" value="<?= $article['rating'] ?>" required>
                <span>/10</span>
            </div>
            <input type="submit" class="submit_button" value="Update Article"/>
        </div>
    </form>
</div>
</body>
</html>