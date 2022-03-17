<?php session_start();?>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <div class='container'>
        <a class='navbar-brand' href='/blog_app/index.php'>Blog</a>
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent'
            aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'><span
                class='navbar-toggler-icon'></span></button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav ms-auto mb-2 mb-lg-0'>
                <?php
                        if(isset($_SESSION['user'])){
                            echo "
                            <li class='nav-item'><a class='nav-link' aria-current='page' href='/blog_app/user_post.php'>MyPost</a></li>
                            <li class='nav-item'><a class='nav-link' aria-current='page' href='/blog_app/add_post.php'>Add Post</a></li>
                            <li class='nav-item'><a class='nav-link' aria-current='page' href='/blog_app/Logout.php'>Logout</a></li>";
                        }else{
                            echo "<li class='nav-item'><a class='nav-link active' aria-current='page' href='/blog_app/login.php'>Login/Register</a></li>";
                        }
                        ?>
            </ul>
        </div>
    </div>
</nav>