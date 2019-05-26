<!DOCTYPE html>

<html>

<head>
    <title>
        Hands-on.com
    </title> 
    
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="normalize.css" >
    <link rel="stylesheet" href="hands-on.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- <input type="button" id='translator' name="scriptbutton" value=" Run Script " onclick="exec('classify_webcam.py');"> -->

    <script>
        function goToTranslator() {
    $.ajax({
        type: "GET",
        url: "./classify_webcam.py"
    }).done(function( o ) {
        //do something
        console.log("done");
    });
}
    </script>
<body>
    <div id="header">
        <img src="img/logo.png" id="logo" />
       <h1>
        Hands-On
        </h1>
    </div>

    <p id="message">
        Hands-on is a website devoted to helping those who are deaf or hearing impaired. In order to allow them to speak to those who do not know sign language, it translates a video of them speaking sign language into English text.
    </p>

    <div class="row" onclick="goToTranslator()">
     <p id="translator" class="item">
        TO
        <br/> 
        TRANSLATOR
     </p>
    
    <img src="img/arrow.png" id="arrow" />  


    </div>
</body>

</html>