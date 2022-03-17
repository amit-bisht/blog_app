<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $data=array(
        "username"=>$username,
        "email"=>$email,
        "password"=>$password
    );
    $api_url="http://localhost:3000/register";
    $curl=curl_init($api_url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl,CURLOPT_POST,true);
    curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($data));
    $curl_response=curl_exec($curl);
    if($curl_response==false){
        header("Location: /blog_app/register.php");
    }
    else{
        header("Location: /blog_app/login.php");
    }
}
?>