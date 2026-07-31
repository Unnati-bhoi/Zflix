<?php
include("header.php")
?>
<?php
include("config.php");
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
    $sql="insert into tbl_contact(name,email,subject,message) value('$name','$email','$subject','$message')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "detail inserted";
    }
}
?>
<div class="clearfix"> </div>
					<!---->
				</div>
				</div>
				</div>
					</div>
<!---->
<script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)|| (charCode == 32))
                    return true;
                else
                    return false;

            }
            catch (err) {
                alert(err.Description);
				
            }
        }

    </script>
	
</div>
		<!---->
		<div class="container">
			<div class="contact">
			
				<div class=" contact-top-in">
					<h3>View On Map</h3>
					<div style="overflow:hidden;max-width:100%;width:1000px;height:500px;"><div id="embed-ded-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=navarangpura+ahmedabad&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="my-codefor-googlemap" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="grab-map-info">premium bootstrap themes</a><style>#embed-ded-map-canvas .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;}</style></div>
					
					
				</div>
				<form method="post">
				<div class=" contact-top">
					<h3>Want to contact with me?</h3>
						<div>
							<span>Your Name </span>		
							<input type="text" name="name" value="" placeholder="Your Name(input only alphabets)"
							onKeyPress="return onlyAlphabets(event,this);" required >						
						</div>
						<div>
							<span>Your Email </span>		
							<input type="text" name="email"  value="" name="email" >						
						</div>
						<div>
							<span>Subject</span>		
							<input type="text" name="subject" value="" name="subject">	
						</div>
						<div>
							<span>Your Message</span>		
							<textarea name="message"> </textarea>	
						</div>
						<input type="submit" name="submit" value="SEND" >	
				</div>
					</form>
		</div>
	</div>

<!---->
	
<?php
include("footer.php");
?>
</body>
</html>