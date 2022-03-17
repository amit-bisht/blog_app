<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <link href="css/login.css" rel="stylesheet">
</head>
<body>
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
                                    <input type="email"  class="form-control" name="email" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row my-3">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row my-3">
                                <label for="confirm-password" class="col-md-4 col-form-label text-md-right">confirm-Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="confirm-password" required>
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4 my-3">
                                <input type="submit" name="submit" class="btn btn-primary">
                                   Register
                                </input>
                                <a href="#" class="btn btn-link">
                                    Click here to Register
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