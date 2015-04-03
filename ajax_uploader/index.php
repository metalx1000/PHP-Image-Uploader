<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>File Upload Form</title>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
	</head>

	<body>

		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="drop">
				Drop Here

				<a>Browse</a>
				<input type="file" name="fileToUpload" multiple />
                                <input type="hidden" name="pid" id="pid">
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		</form>

		<footer>
                </footer>
        
		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>

                <script>


                  $(document).ready(function(){
                    if(getUrlParameter('pid')){
                      var pid = getUrlParameter("pid");
                      $("#pid").val(getUrlParameter("pid"));
                    }else{
                      $("#pid").val("photos");//default folder
                    }
                

                    function getUrlParameter(sParam)
                    {
                        var sPageURL = window.location.search.substring(1);
                        var sURLVariables = sPageURL.split('&');
                        for (var i = 0; i < sURLVariables.length; i++) 
                        {
                            var sParameterName = sURLVariables[i].split('=');
                            if (sParameterName[0] == sParam) 
                            {
                                return sParameterName[1];
                            }
                        }
                    }  
                  }); 
                </script>

	</body>
</html>
