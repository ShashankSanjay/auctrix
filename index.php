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
        <div class="col-md-6">
            <div class="col-xs-2">
                <ul class="search-characters">
                    <li><a ng-click="clickedChar('a')">A</a></li>
                    <li><a ng-click="clickedChar('b')" >B</a></li>
                    <li><a ng-click="clickedChar('c')">C</a></li>
                    <li><a ng-click="clickedChar('d')">D</a></li>
                    <li><a ng-click="clickedChar('e')">E</a></li>
                    <li><a ng-click="clickedChar('f')">F</a></li>
                    <li><a ng-click="clickedChar('g')">G</a></li>
                    <li><a ng-click="clickedChar('h')">H</a></li>
                    <li><a ng-click="clickedChar('i')">I</a></li>
                    <li><a ng-click="clickedChar('j')">J</a></li>
                    <li><a ng-click="clickedChar('k')">K</a></li>
                    <li><a ng-click="clickedChar('l')">L</a></li>
                    <li><a ng-click="clickedChar('m')">M</a></li>
                    <li><a ng-click="clickedChar('n')">N</a></li>
                    <li><a ng-click="clickedChar('o')">O</a></li>
                    <li><a ng-click="clickedChar('p')">P</a></li>
                    <li><a ng-click="clickedChar('q')">Q</a></li>
                    <li><a ng-click="clickedChar('r')">R</a></li>
                    <li><a ng-click="clickedChar('s')">S</a></li>
                    <li><a ng-click="clickedChar('t')">T</a></li>
                    <li><a ng-click="clickedChar('u')">U</a></li>
                    <li><a ng-click="clickedChar('v')">V</a></li>
                    <li><a ng-click="clickedChar('w')">W</a></li>
                    <li><a ng-click="clickedChar('x')">X</a></li>
                    <li><a ng-click="clickedChar('y')">Y</a></li>
                    <li><a ng-click="clickedChar('z')">Z</a></li>
                </ul>
            </div>
            <!-- Start Search -->
            <div class="col-xs-10">
                <div class="input-group">
                  <input type="text" class="form-control query-input" ng-change="searchResult()" ng-model="searchQuery" placeholder="Search company/tags here" />
                  <span class="input-group-btn">
                    <button ng-click="searchResult()" class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
                  </span>
                </div>
                <div class="search-results">
                    <ul ng-repeat="vendor in vendors" class="results">
                        <li>
                            <a ng-click="showProfile($event)">{{vendor.name}}</a>
                            <div class="profile-content">
                                <p class="text-center"><img class="profile-pic" src="{{vendor.image}}" /></p>
                                <p class="profile-details">{{vendor.summary}}</p>
                                <br />
                                <p class="font-small">
                                    <span ng-repeat="tag in vendor.tags"><i class="glyphicon glyphicon-tag"></i> {{tag}} &nbsp;&nbsp;</span>
                                </p>
                                <p class="font-small"><i class="glyphicon glyphicon-earphone"></i> {{vendor.phone}} &nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-envelope"></i> {{vendor.email}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- End Search-->
            
        </div>
        <div class="col-md-6 col-xs-9">
            <div id="profile"></div>
        </div>
        
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