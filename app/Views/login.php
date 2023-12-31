<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1>Login</h1>
                <hr>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                <?php endif; ?>
                <form action="/login/auth" method="post">
                    <div class="mb-3">
                        <label for="inputforemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email') ;?>" />
                    </div>
                    <div class="mb-3">
                        <label for="inputforpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword" value="<?= set_value('password') ;?>" />
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <hr>
                    <a href="/register" class="btn btn-primary">Register Page</a>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>