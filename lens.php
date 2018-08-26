<!DOCTYPE html>
<html>
<head>
	<title>Blaiva System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<input type="file" id="fileUpload">
				<div class="mt-4">
					<div class="form-check d-inline">
						<input class="form-check-input" type="radio" name="mode" id="exampleRadios1" value="object" checked>
						<label class="form-check-label" for="exampleRadios1">Object</label>
					</div>
					<div class="form-check d-inline">
						<input class="form-check-input" type="radio" name="mode" id="exampleRadios2" value="text">
						<label class="form-check-label" for="exampleRadios2">Text</label>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-4">
				<div id="text"></div>
			</div>
		</div>
	</div>
	

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- NLP Section -->
	<script type="text/javascript" src="assets/js/mespeak.js"></script>
	<script type="text/javascript">
		meSpeak.loadConfig("assets/js/mespeak/mespeak_config.json");
		meSpeak.loadVoice('speech/en/en-us.json');
		// meSpeak.loadVoice('speech/fr.json');
		//meSpeak.speak('Following is: ID 1,7,3,4,5', {variant: 'f2', speed: 120});
		// meSpeak.speak('We detected: a cat and dog running', {variant: 'f2', speed: 180, wordgap:10});
	</script>

	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript">
		// $(document).ready(function(){
		// 	$("#text").html("there wea")
		// 	requestData = {"requests":[
		// 	    {
		// 	      "image":{
		// 	        "source":{
		// 	          "imageUri":
		// 	            "https://is4-ssl.mzstatic.com/image/thumb/Video2/v4/1e/00/69/1e00696c-33db-1326-30fc-5b8cee0b70f9/source/1200x630bb.jpg"
		// 	        }
		// 	      },
		// 	      "features":[
		// 	        {
		// 	        	"type":"LOGO_DETECTION",
		// 		        "maxResults":10		          
		// 	        },
		// 	        {
		// 	        	"type":"TEXT_DETECTION",
		// 		        "maxResults":10		          
		// 	        },
		// 	        {
		// 	        	"type":"LABEL_DETECTION",
		// 		        "maxResults":10		          
		// 	        },
		// 	        {
		// 	        	"type":"IMAGE_PROPERTIES",
		// 		        "maxResults":10		          
		// 	        }
		// 	      ]
		// 	    }
		// 	  ]
		// 	}
		// 	var apiURL = 'https://vision.googleapis.com/v1/images:annotate?key=AIzaSyBim0G53lKGfj8k909bA4nupei7aJGkJNw';
		// 	var request = new XMLHttpRequest();
		// 	request.onreadystatechange= function () {
		// 	    if (request.readyState==4) {
		// 	    	console.log("Done")
		// 	    	// console.log(request.response)

		// 	    	pred = JSON.parse(request.response).responses

		// 	    	trueRes = pred[0]

		// 	    	$("#text").html(JSON.stringify(pred))
		// 	    }
		// 	}
		// 	request.open("POST", apiURL, true);
		// 	request.setRequestHeader("Content-Type","application/json; charset=utf-8");
		// 	request.send(JSON.stringify(requestData));
		// 	// $.post('https://vision.googleapis.com/v1/images:annotate?key=AIzaSyBim0G53lKGfj8k909bA4nupei7aJGkJNw', JSON.stringify(request), function(data){
		// 	// 	alert("there we are")
		// 	// 	console.log(data)
		// 	// })
		// })
	</script>
</body>
</html>