<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <h1>Sign up</h1>
                <hr>
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                <form action="/register/save" method="post">
                    <div class="mb-3">
                        <label for="inputforname" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="inputforname" value="<?= set_value('name') ;?>" />
                    </div>
                    <div class="mb-3">
                        <label for="inputforemail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="inputforemail" value="<?= set_value('email') ;?>" />
                    </div>
                    <div class="mb-3">
                        <label for="inputforpassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="inputforpassword" value="<?= set_value('password') ;?>" />
                    </div>
                    <div class="mb-3">
                        <label for="inputforconfpassword" class="form-label">Confirm Password</label>
                        <input type="password" name="confpassword" class="form-control" id="inputforconfpassword" />
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <hr>
                    <a href="/login" class="btn btn-primary">Login Page</a>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>