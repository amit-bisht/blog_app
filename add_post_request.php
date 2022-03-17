<?php
session_start();
if(isset($_POST['add-post-submit'])){
    $data=array(
        "title"=>$_POST['title'],
        "excerpt"=>$_POST['excerpt'],
        "description"=>$_POST["description"],
        "userId"=>$_SESSION['userId']
    );
    $api_url="http://localhost:3000/user/post/add";
    $curl=curl_init($api_url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($data));
    $curl_response=curl_exec($curl);
    if($curl_response==false){
        header("Location: /blog_app/add_post.php");
    }
    else{
        header("Location: /blog_app/user_post");
    }
}
?>