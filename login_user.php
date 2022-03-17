<?php
if(isset($_POST['login-submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $data=array(
        "email"=>$email,
        "password"=>$password
    );
    $api_url="http://localhost:3000/login";
    $curl=curl_init($api_url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($data));
    $curl_response=curl_exec($curl);
    if($curl_response==false){
        header("Location: /blog_app/register.php");
    }
    else{
        $jsonData=json_decode($curl_response);
        session_start();
        $_SESSION["user"]=$jsonData->email;
        $_SESSION["userId"]=$jsonData->id;
        header("Location: /blog_app/index.php");
    }
}
?>