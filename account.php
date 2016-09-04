<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width" />
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>MBE</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <!-- Style css file -->
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/styles.css" />


</head>

<body ng-app="mbeAccount" ng-controller="accountCtrl">


<!-- Start navbar -->
<div class="containere header-top">
    <br /><br />
</div><!-- End navbar -->


<div class="container max-width">
    <h1 class="text-right c-white font-too-large animated bounce">Simendo</h1>
    <div class="row">
        <div class="col-md-6">
            <br /><br /><br />
            <div class="account-form login-frm">
                <h3>Login to your account</h3>
                <br />
                <form ng-submit="submitLogin()">
                <p><input type="email" class="form-control" placeholder="Email" ng-model="login.email" /></p>
                <p><input type="password" class="form-control" placeholder="Password" ng-model="login.password" /></p>
                <p><input type="submit" value="Login" class="btn btn-default" /> <a class="font-small" ng-click="showLogin()">Create an account</a></p>
                </form>
                <p class="c-red">{{loginMsg}}</p>
            </div>
            
            <div class="account-form registration-frm" style="display: none;">
                <h3>Create an account</h3>
                <br />
                <form ng-submit="submitRegistration()">
                <p><input type="email" class="form-control" placeholder="Email" ng-model="registration.email" /></p>
                <p><input type="password" class="form-control" placeholder="Password" ng-model="registration.password" /></p>
                <p><input type="submit" value="Registration" class="btn btn-default" /> <a class="font-small" ng-click="showRegistration()" >Already have an account</a></p>
                </form>
                <p class="c-red">{{registrationMsg}}</p>
            </div>
            
        </div>
        
        <div class="col-md-6"></div>
        
    </div>
    <div><br /><br /><br /><p class="text-right c-white">&copy; Copyright 2016-2017</p></div>
</div>

<!-- Latest minified jQuery -->
<script src="js/jquery-3.1.0.min.js" ></script>
<!-- Latest minified angularjs -->
<script src="js/angular.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Custom Script -->
<script type="text/javascript" src="js/design.js"></script>
<script type="text/javascript" src="js/controller.js"></script>
</body>
</html>