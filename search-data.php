<?php 
$q='';
if(isset($_GET['query'])){
    $q=$_GET['query'];
}

 ?>
 
{"vendors":[{
			"name": "Searched vendor <?php echo $q; ?> 1",
			"summary": "I love cleaning so much",
			"tags": [
						"janitor",
						"cleaning",
						"enterprise",
						"residential"
					],		
			"phone": "1231231234",
			"email": "abcBusiness@gmail.com",
			"location": {
							"address1": "123 some ln",
							"address2": "apt 10B",
							"city": "San Fransisco",
							"state": "CA",
							"zip": "12293"
						},
			"image": "img/profile.jpg"
		},
        {
			"name": "Searched vendor <?php echo $q; ?> 1",
			"summary": "I love coding",
			"tags": [
						"janitor",
						"cleaning",
						"enterprise",
						"residential"
					],		
			"phone": "1231231234",
			"email": "abcBusiness@gmail.com",
			"location": {
							"address1": "123 some ln",
							"address2": "apt 10B",
							"city": "San Fransisco",
							"state": "CA",
							"zip": "12293"
						},
			"image": "img/profile.jpg"
		},
        {
			"name": "Searched vendor <?php echo $q; ?> 3",
			"summary": "I love to play music",
			"tags": [
						"janitor",
						"cleaning",
						"enterprise",
						"residential"
					],		
			"phone": "1231231234",
			"email": "abcBusiness@gmail.com",
			"location": {
							"address1": "123 some ln",
							"address2": "apt 10B",
							"city": "San Fransisco",
							"state": "CA",
							"zip": "12293"
						},
			"image": "img/profile.jpg"}]}