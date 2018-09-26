<!-- CGN yazılım &amp; bilişim hizmetleri - içerik yönetim sistemi - cgn[cms]_v3 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CGN | cms v3.3</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="css/admin.css" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">CGN İçerik Yönetim Sistemi -  Admin Paneli</h3></div>
                    <div class="panel-body">
                        <form role="form"  action="std/checkUser.php" method="post" enctype="application/x-www-form-urlencoded">                            
							<fieldset>
                                <div class="form-group"><input class="form-control" placeholder="kullanıcı adı" name="username" type="text" autofocus></div>
                                <div class="form-group"><input class="form-control" placeholder="şifre" name="password" type="password" value=""></div>
                                <input name="_login_button" type="submit" class="btn btn-lg btn-success btn-block"	dir="ltr" lang="tr" value="Login" />
                            </fieldset>							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>