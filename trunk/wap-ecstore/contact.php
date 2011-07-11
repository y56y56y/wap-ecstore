<?php include 'header.php'?>
	<div id="Content">
		<br/>
		<header class="row">
			<h2>Contact Us</h2>
		</header>
		
		<form name="mailmaniac-form" method="post" action="http://www.mail-maniac.com/" enctype="multipart/form-data">
			<input name = "userid" type="hidden" value = "samygj">
			<table>
				<input type = "hidden" name = "mailto" value = "samygj(at)gmail.com">
				<input type = "hidden" name = "subject" value = "test">
				<input type = "hidden" name = "fromname" value = "samygj(at)sina.com">
				<input type = "hidden" name = "goto" value = "insproj.dyndns-home.com/dev/wap/home.php">
				<input type ="hidden" name ="required_fields" value = "email">
				<tr>
					<td><b>Your Name:&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><input type="text" name="Name"/></td>
				</tr>
				<tr>	
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Your Email:</b></td>
					<td>
						<input type="text" name="email"/>
					</td>
				</tr>
				<tr>	
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><b>Subject: </b></td>
					<td><input type="text" name="subject" /></td>
				</tr>
			</table>
			<br/>
			<p><b>Comments:</b></p>
			<input type="text" name="Comments" />
			<br/>
			<!--<input type="submit" class="button-primary" />-->
			<input type="submit" value="Submit"/>

		</form>
	</div>
			
<?php include 'footer.php'?>