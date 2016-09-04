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
    <link rel="stylesheet" href="css/styles.css" />


</head>

<body ng-app="mbeApp" ng-controller="mbeCtrl">


<!-- Start navbar -->
<div class="containere header-top">
    <div class="row">
        <div class="col-md-12">
                <div>
                    <a class="nav-button"><i class="glyphicon glyphicon-menu-hamburger"></i></a>
                </div>
        </div>
    </div>
    <div class="left-navbar">
        <h1 class="c-white text-center">Simendo</h1>
        <br />
        <p class="text-center">Contact us @<br />(123) 123-1234</p>
        <br />
        <p class="text-center"><a href="add-new-vendor.php" class="c-white">Add new vendors</a></p>
        <p class="text-center"><a ng-click="logOut()" class="c-white">Logout</a></p>
    </div>
</div><!-- End navbar -->


<div class="container max-width">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="account-form">
                <h3>Add new vendor</h3>
                <br />
                <form enctype="multipart/form-data" ng-submit="submitAddVendor()">
                <p><input type="text" class="form-control" placeholder="Name" ng-model="av.name" /></p>
                <p><textarea class="form-control" placeholder="Summary" ng-model="av.summary"></textarea></p>
                <p><input type="text" class="form-control" placeholder="Tags" ng-model="av.tags" /></p>
                <p><input type="text" class="form-control" placeholder="Phone" ng-model="av.phone" /></p>
                <p><input type="email" class="form-control" placeholder="Email" ng-model="av.email" /></p>
                <p><input type="text" class="form-control" placeholder="Address Line 1" ng-model="av.location.address1" /></p>
                <p><input type="text" class="form-control" placeholder="Address Line 2" ng-model="av.location.address2" /></p>
                <div class="row">
                    <div class="col-sm-6"><input type="text" class="form-control" placeholder="City" ng-model="av.location.city" /></div>
                    <div class="col-sm-6"><input type="text" class="form-control" placeholder="State" ng-model="av.location.state" /></div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-sm-6"><input type="text" class="form-control" placeholder="Zip" ng-model="av.location.zip" /></div>
                    <div class="col-sm-6"><input type="file" onchange="angular.element(this).scope().selectFile(this.files)" placeholder="Vendor Image" /></div>
                </div>
                <br />
                <p><input type="submit" value="Add New Vendor" class="btn btn-default" /></p>
                </form>
                <p class="c-red">{{vendorMsg}}</p>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    
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