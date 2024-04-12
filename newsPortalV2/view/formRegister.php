<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Register</h3></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="registerAnswer">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="name" name="name" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">E-Mail Address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirm" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password-confirm" name="confirm" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="save">Register</button>
                                </div>
                            </div>
                            <P style="padding-top:10px;"><a href="./">Web site</a></P>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>