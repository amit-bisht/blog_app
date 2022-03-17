
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <title>Blog</title>
    <link href='css/style.css' rel='stylesheet' />
</head>

<body>
    <!-- Responsive navbar-->
    <?php include("include/header.php");?>
    <!-- Page content-->
    <div class='container my-5'>
        <div class='row'>
            <!-- Blog entries-->
            <div class='col-lg-12'>

                <!-- Nested row for non-featured blog posts-->
                <div class='row'>
                    <?php 
                    $user_id=$_SESSION['userId'];
                    $api_url="http://localhost:3000/user/post/$user_id";
                    $curl=curl_init($api_url);
                    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
                    $curl_response=curl_exec($curl);
                    if($curl_response==false){
                        echo 'error';
                    }
                    else{
                    $jsonData=json_decode($curl_response);
                    foreach($jsonData as $jsonObj){

                        echo "<div class='col-lg-4'>
                        <div class='card mb-4'>
                            <a href='#!'><img class='card-img-top'
                                    src='https://dummyimage.com/700x350/dee2e6/6c757d.jpg' alt='...' /></a>
                            <div class='card-body'>
                                <div class='small text-muted'>January 1, 2021</div>
                                <h2 class='card-title h4'>$jsonObj->title</h2>
                                <p class='card-text'>$jsonObj->excerpt
                                    Reiciendis aliquid atque, nulla.</p>
                                <form method='post' action='/blog_app/delete_post.php'>
                                    <input type='hidden' value='$jsonObj->id' name='post-id'/>
                                    <input type='submit' value='delete' name='delete-submit' class='btn btn-danger'/>
                                </form>
                            </div>
                        </div>
                        <!-- Blog post-->
                    </div>";
                    }
                }
                curl_close($curl);
                ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <?php include("include/footer.php"); ?>
</body>

</html>