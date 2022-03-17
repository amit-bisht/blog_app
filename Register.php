<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <?php include("include/header.php");?>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <form action="/blog_app/register_user.php" method="post">
                                <div class="form-group row my-3">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="username" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">email</label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row my-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group row my-3">
                                    <label for="confirm-password"
                                        class="col-md-4 col-form-label text-md-right">confirm-Password</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control" name="confirm-password" required>
                                    </div>
                                </div>


                                <div class="col-md-6 offset-md-4 my-3">
                                    <input type="submit" name="submit" class="btn btn-primary">
                                    </input>
                                    <a href="/blog_app/login.php" class="btn btn-link">
                                        Already a member
                                    </a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</body>

</html>