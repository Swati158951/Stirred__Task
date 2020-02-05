
<?php
?>

<script type="text/javascript">


function postToGoogle() {
                var field1 = $("#UserName").val();
                var field2 = $("#UserMobile").val();
                var field3 = $("#UserEmail").val();
                var field4 = $("#message").val();
                var field5 = $("#datepicker01").val();
                var field6 = $("#datepicker02").val();
                var field7 = $("#subject").val();
				var field8 = $("#EntryName").val();
               
                if(field1 == ""){
					alert('Please Fill Your Name');
					document.getElementById("UserName").focus();
					return false;
				}

        	if(field2 == "" || field2.length > 10 || field2.length < 10){
					alert('Please Fill Your Mobile Number');
					document.getElementById("UserMobile").focus();
					return false;
				}
				if(field3 == ""){
					alert('Please Fill Your Email');
					document.getElementById("UserEmail").focus();
					return false;
				}

        if(field4 == ""){
					alert('Please Fill Your Message');
					document.getElementById("message").focus();
					return false;
				}
			
        $.ajax({
                   // url: "https://docs.google.com/forms/d/e/1FAIpQLSfwwr_thxplsWYLLkeH1KiyId5KKvTDSfNnzPd3HTJm0Ee-lg/formResponse?",

                    //url: "https://docs.google.com/forms/d/e/1FAIpQLSe3kD_-R9KaMrASCFaHnfYvBrwkGmMOWjAr57e2OrRiSSRMbA/formResponse?",
                    url: "https://docs.google.com/forms/d/e/1FAIpQLSeWENhdKHjxPuBLlkLDFVqAKSvs7Zz-sGann1N0mo7a5wYMvA/formResponse?",
                    
					data: {"entry.1991883990": field1, "entry.1252157108": field2, "entry.997124440": field3, "entry.1256037243": field4,"entry.406489282": field5,"entry.357122546": field6,"entry.1774279902": field7, "entry.1960203969": field8 },
                    type: "POST",
                    dataType: "xml",
                    success: function(d)
					{
					},
					
                });
				return false;
            }

</script>

