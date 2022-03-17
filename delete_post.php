<?php
if($_POST['delete-submit']){
    $data=array(
        "id"=>$_POST['post-id']
    );
    $api_url="http://localhost:3000/user/post/delete";
    $curl=curl_init($api_url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($data));
    $curl_response=curl_exec($curl);
    if($curl_response==false){
        header("Location: /blog_app/index.php");
    }
    else{
        header("Location: /blog_app/user_post.php");
    }
}
?>