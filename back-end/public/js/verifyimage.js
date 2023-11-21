// Set up video stream
navigator.mediaDevices.getUserMedia({video: true})
    .then(function(stream) {
        var video = document.getElementById('video');
        video.srcObject = stream;
        video.play();
    })
    .catch(function(err) {
        console.log('Error: ' + err);
    });

// capture image button
var startbutton = document.getElementById('startbutton');
var canvas = document.getElementById('canvas');
var video = document.getElementById('video');

startbutton.addEventListener('click', function(ev){
    takePicture();
    ev.preventDefault();
});

// Take picture function
function takePicture() {
    //console.log('Button clicked!');
    var context = canvas.getContext('2d');
    var width = video.videoWidth;
    var height = video.videoHeight;
    if (width && height) {
        canvas.width = width;
        canvas.height = height;
        context.drawImage(video, 0, 0, width, height);

        // convert canvas to base64 image data
        var imageData = canvas.toDataURL('image/png');

        // retrieve user's profile picture from database
        var profilePicture = '{{ Auth::user()->photo }}';

         // send two images to python api using AJAX
         $.ajax({
            // type: 'POST',
            // url: 'http://your-python-api-url.com/process-image',
            // data: { 
            //     image: imageData,
            //     profile_picture: profilePicture
            // },
            success: function(response) {
                // if (response.success) {
                //     // Set verified session key to true
                //     document.cookie = "imageVerified=true";
                //     // Redirect to exam page
                //     window.location.href = startbutton.getAttribute('data-url');
                // } else {
                //     console.log('Image verification failed.');
                //     // Display error message to user
                // }  
                document.cookie = "imageVerified=true";   //assuming the response from api is successfull
                //just for testing but the above commented code should be the one used
                window.location.href = startbutton.getAttribute('data-url');  
            },
            error: function(xhr, status, error) {
                console.log(error);
            }
        });
    }
}





