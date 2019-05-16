<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #content{
            min-height: 600px;
        }
        #login-panel{
            font-weight:normal;
        }
        #fix{
            margin-top:100px;
        }
    </style>
</head>
<body>
    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-success" id="fix">
                        <div class="panel-heading">
                            <h4 style="color:black;">Enter details</h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="generation.php"  method="POST">
                                <div class="form-group">
                                    <input type="name" class="form-control"  placeholder="enter your name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="enter your email" name="email" required>
                                </div>
                                <button type="submit" name="submit" class="btn btn-success">submit</button><br><br>
                                </form><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>