$("#fileUpload").on('change', function(){
	//here file is uploaded
	file = this.files[0]

	//file reader
	var reader = new FileReader();
	fileCont = reader.readAsDataURL(file);
	base64 = fileCont

	reader.onload = function () {
		//Here we have got image
    	imageCont = reader.result.split(',')[1];
    	processImg(imageCont)
   };
});

function processImg(img){
	requestData = {"requests":[
			    {
			      "image":{
			      	'content':img,
			        // "source":{
			        //   "imageUri":
			        //     "https://is4-ssl.mzstatic.com/image/thumb/Video2/v4/1e/00/69/1e00696c-33db-1326-30fc-5b8cee0b70f9/source/1200x630bb.jpg"
			        // }
			      },
			      "features":[
			        // {
			        // 	"type":"LOGO_DETECTION",
				       //  "maxResults":10		          
			        // },
			        {
			        	"type":"TEXT_DETECTION",
				        "maxResults":10		          
			        },
			        {
			        	"type":"LABEL_DETECTION",
				        "maxResults":10		          
			        },
			        {
			        	"type":"IMAGE_PROPERTIES",
				        "maxResults":10		          
			        },
			        ,
			        {
			        	"type":"FACE_DETECTION",
				        "maxResults":10		          
			        }
			      ]
			    }
			  ]
			}
	var apiURL = 'https://vision.googleapis.com/v1/images:annotate?key=AIzaSyBim0G53lKGfj8k909bA4nupei7aJGkJNw';
	var request = new XMLHttpRequest();
	request.onreadystatechange= function () {
	    if (request.readyState==4) {
	    	// console.log(request.response)

	    	pred = JSON.parse(request.response).responses

	    	trueRes = pred[0]

	    	//send the data to analyzer
	    	analyzeReturn(trueRes);
	    	console.log(trueRes)
	    }
	}
	request.open("POST", apiURL, true);
	request.setRequestHeader("Content-Type","application/json; charset=utf-8");
	request.send(JSON.stringify(requestData));
}

function analyzeReturn(data){
	// this analyzes data from google vision API

	//CHECK THE SELECTED MODE
	mode = $("input[name='mode']:checked").val()


	if(mode == 'text'){
		//check text anotations
		if(data.fullTextAnnotation !== undefined){
			response = data.fullTextAnnotation.text;
		}else{
			response = 'No found text'
		}
	}else if(mode == 'object'){
		//check label annotations
		labels = data.labelAnnotations;
		response = ''
		console.log(labels)
		if(labels !== undefined && Array.isArray(labels)){
			nObjects = 4; //maximum number of objects to tell
			for (var i = 0; i < labels.length && i<nObjects; i++) {
				label = labels[i]
				

				if(label.score>.5){
					if (response < 1) {
						response = label.description
					}else{
						//check if we are at last elem to describe
						if(i == nObjects-1){
							//here we add and 
							response = response + ' and ' + label.description
						}else{
							response = response + ', ' + label.description
						}
						
					}
				}else{
					//skip objects with less accuracy
				}
			}
		}

		// output the objects
		response = "We detected: "+response+"."

		// check if there is text
		text = checkText(data);
		if(text){
			response = response + "\nand found this text: "+ text+"."
		}

		// check if there are faces
		faces = checkFaces(data);
		if(faces){
			response = response + "\n There is also "+faces
		}
	}

	//outputing the text
	console.log(response)
	$("#text").html(response);
	meSpeak.speak(response, {variant: 'f2', speed: 180, wordgap:10});

	function checkText(data){
		var response =''
		//extraxts text from images
		if(data.fullTextAnnotation !== undefined){
			response = data.fullTextAnnotation.text;
		}else{
			response = ''
		}
		return response
	}
	function checkFaces(data){
		var response
		//extraxts faces from images
		if(data.faceAnnotations !== undefined){
			nFaces  = data.faceAnnotations.length
			response = nFaces+" face"+(nFaces==1?'':'s');
		}else{
			response = ''
		}
		return response
	}
}