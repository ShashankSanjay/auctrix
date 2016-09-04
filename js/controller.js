// Configuration
var mainPage      = 'index.php';
var accountPage   = 'account.php';
var addVendorPage = 'addVendor.php';

var loginUrl        = 'processor.php';
var registrationUrl = 'processor.php';
var allVendorUrl = 'search-data.php';
var addVendorUrl = 'processor.php';




// Check user login status
var isLogin = function(){
                var result = false;
                if (typeof(Storage) !== "undefined") {
                    if(localStorage.isLogin==1){ result = true;}
                }
                return result;
            };



// Account page
var account = angular.module('mbeAccount',[]);
account.controller('accountCtrl',function($scope, $http){
    
    // Check login status
    if(isLogin()){location.href=mainPage;}

    // Show Login Form
    $scope.showLogin = function(){
        $('.login-frm').slideToggle(400);
        $('.registration-frm').slideToggle(400);
    };
    
    
    // Show Registration Form
    $scope.showRegistration = function(){
        $('.login-frm').slideToggle(400);
        $('.registration-frm').slideToggle(400);
    };
    
    
    // Submit Login Form
    $scope.submitLogin = function(){
        var formData = {
            'email'       : $scope.login.email,
            'password'    : $scope.login.password
        };
        $http.post(loginUrl,formData).success(function(data) {
            if(data.auth==1){
                localStorage.isLogin=1;
                location.href=mainPage;
            }else{
                $scope.loginMsg = 'Login failed!';
            }
        });
    }
    
    
    
    // Submit Registration Form
    $scope.submitRegistration = function(){
        var formData = {
            'email'       : $scope.registration.email,
            'password'    : $scope.registration.password
        };
        $http.post(registrationUrl,formData).success(function(data) {
            if(data.status==200){
                $scope.registrationMsg="Signup successful";
                $scope.registration = '';
            }else if(data.status==400){
                $scope.registrationMsg="Signup failed";
            }else{
                $scope.registrationMsg="Signup failed";
            }
            
        });
    }
    
    
    
});





//Main page
var app = angular.module('mbeApp', []);
app.controller('mbeCtrl', function($scope, $http) {
    
    // Check login status
    if(!isLogin()){location.href=accountPage;}
    
    // Update all vendos
    $http.get(allVendorUrl).then(function(response) {
        $scope.vendors = response.data.vendors;
    });
    
    
    
    // Characters clicked event handler
    $scope.clickedChar = function(character){
        $scope.searchQuery=character;
        $scope.searchResult();
    };
    
    
    
    // Update Search Result
    $scope.searchResult = function(){
        $http.get(allVendorUrl+"?query="+$scope.searchQuery).then(function(response) {
            $scope.vendors = response.data.vendors;
            $('#profile').html('');
        });
    };
    
    
    // Show Profie 
    $scope.showProfile = function($event){
        $('#profile').html($($event.currentTarget).parent('li').children('.profile-content').clone().show());
    };
    
    
    $scope.selectFile = function(file){
        $scope.selectedFile=file[0];
    }
    
    // Add new vendor
    $scope.submitAddVendor = function(){
        
        $scope.location='';
        var fd = new FormData();
        fd.append('name',$scope.av.name);
        fd.append('summary',$scope.av.summary);
        if($scope.av.tags != undefined){
            var tagString = $scope.av.tags.split(',');
            $.each(tagString,function(key,val){
                fd.append('tags[]',val);
            });
        }
        fd.append('phone',$scope.av.phone);
        fd.append('email',$scope.av.email);
        fd.append('location["address1"]',$scope.location.address1);
        fd.append('location["address2"]',$scope.location.address2);
        fd.append('location["city"]',$scope.location.city);
        fd.append('location["state"]',$scope.location.state);
        fd.append('location["zip"]',$scope.location.zip);
        fd.append('image', $scope.selectedFile);
        
        $http.post(addVendorUrl, fd, {
            withCredentials: true,
            headers: {'Content-Type': undefined },
            transformRequest: angular.identity
        }).success(function(data){
            $scope.vendorMsg='Vendor added successfully!';
        });
        
    };
    
    
    // Logout
    $scope.logOut = function(){
        localStorage.isLogin=0;
        location.href=accountPage;
    }
    
    
});