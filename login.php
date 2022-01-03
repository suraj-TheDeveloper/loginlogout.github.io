<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Jquery -->
        <script src="javascript/jquery-3.6.0.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div style="margin-top: 40px;" class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Login</h2>
                            <p class="text-center text-danger" id="display"></p>
                            <form id="form" action="#" method="POST">
                                <div class="md-3 mt-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email...">
                                </div>
                                <div class="md-3 mt-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password...">
                                </div>
                                <input type="button" style="margin: 10px;" class="btn btn-primary" id="register" name="register" value="Register">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="javascript/registerajax.js"></script>
</html>