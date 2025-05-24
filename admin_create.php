<?php
    include('_inc/partials/head.php');


    $auth->requireAdminLogin();

    $db=new Database();
    $pdo= $db->getConnection();
    $article= new Article($pdo);

    //after post method title content and rating are saved,and if they arent empty article is created
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $title= $_POST['title'] ?? '';
        $content= $_POST['content'] ?? '';
        $rating= $_POST['rating'] ?? null;
        
        //if everything is filled, create article andn then redireact back to admin main page
        if($title && $content && $rating !== null){
            if ($article->createArticle($title, $content, $rating)){
                header('Location: admin_main.php');
                exit;
            }else{
                $error= 'Failed to publish the article.';
            }
        }else{
            $error= 'Please fill out all fields.';
        }
    }


    $error = '';
?>

<body>
<div id="templatemo_content">
    <h2>Create New Article</h2>

    <!--form-->
    <form method="POST" action="">
    <div class="form_group">
        <label for="title">Title:</label>
        <input type="text" name="title" required/>
    </div>

    <div class="form_group">
        <label for="content">Content:</label>
        <textarea name="content" rows="15" required></textarea>
    </div>

    <div class="form_bottom_bar">
        <div class="rating_inline">
            <label for="rating">Rating:</label>
            <input type="number" name="rating" id="rating" min="0" max="10" required>
            <span>/10</span>
        </div>
        <input type="submit" class="submit_button" value="Publish Article"/>
    </div>
</form>

</div>
</body>
</html>