<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
    <meta name='description' content='' />
    <meta name='author' content='' />
    <title>Blog</title>

   <!-- <link href='css/styles.css' rel='stylesheet' />-->
   <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
            <div class='container'>
                <a class='navbar-brand' href='#!'>Blog</a>
                <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span class='navbar-toggler-icon'></span></button>
                <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                    <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
                        <li class='nav-item'><a class='nav-link active' aria-current='page' href='#'>Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Page content-->
    <div class='container my-5'>
        <div class='row'>
            <!-- Blog entries-->
            <div class='col-lg-12'>
                <!-- Featured blog post-->
        
                <!-- Nested row for non-featured blog posts-->
                <div class='row'>
                <?php 
                    $api_url="http://localhost:3000/posts";
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
                                <a class='btn btn-primary' href='#!'>Read more →</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                    </div>";
                    }
                }
                curl_close($curl);
                ?>
                </div>
                <!-- Pagination-->

            </div>
            <!-- Side widgets-->

        </div>
    </div>
    <!-- Footer-->
    <footer class='py-5 bg-dark'>
        <div class='container'>
            <p class='m-0 text-center text-white'>Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js'></script>
    <!-- Core theme JS-->
    <script src='js/scripts.js'></script>
</body>

</html>