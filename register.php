<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div style="margin-top: 40px;" class="card">
                        <div class="card-body">
                            <h2 class="card-header text-center">Register</h2>
                            <form action="phpscripts/insert.php" method="POST">
                                <div class="md-3 mt-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name...">
                                </div>
                                <div class="md-3 mt-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email...">
                                </div>
                                <div class="md-3 mt-3">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter Phone number...">
                                </div>
                                <div class="md-3 mt-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password...">
                                </div>
                                <div class="md-3 mt-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" name="confirmpassword" class="form-control" placeholder="Re - Enter Password...">
                                </div>
                                <input type="submit" style="margin: 10px;" class="btn btn-primary" name="register" value="Register">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>