<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <link href='css/style.css' rel='stylesheet' />
</body>
<?php include("include/header.php");?>
<div class="container my-3 p-3" style="width:70vw;margin:auto">
    <div class="row">
        <div class="col">
            <form method="post" action="/blog_app/add_post_request.php">
                <div class="form-group my-2">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title"
                        placeholder="title" required>
                </div>
                <div class="form-group my-2">
                    <label for="excerpt">Excerpt</label>
                    <input type="text" class="form-control" id="excerpt"
                        placeholder="Excerpt" required>
                </div>
                <div class="form-group my-2">
                    <label for="description">Enter Description</label>
                    <textarea class="form-control" id="description" rows="7" required></textarea>
                </div>
                <div class="form-group my-2">
                <button type="submit" name='add-post-submit' class="btn btn-success px-5">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>