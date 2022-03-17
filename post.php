<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <?php 
                    $api_url="http://localhost:3000/post/$_GET[id]";
                    $curl=curl_init($api_url);
                    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
                    $curl_response=curl_exec($curl);
                    if($curl_response==false){
                        echo 'error';
                    }
                    else{
                    $jsonData=json_decode($curl_response);
                    }
                    
        ?>
    <?php include("include/header.php");?>
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?php echo $jsonData->title;?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on January 1</div>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="m-4"><img class="img-fluid rounded"
                            src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?php echo $jsonData->description;?></p>
                    </section>
                </article>
            </div>
        </div>
    </div>
    <?php include("include/footer.php"); ?>
</body>

</html>