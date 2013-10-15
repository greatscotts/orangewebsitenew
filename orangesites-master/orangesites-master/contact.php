<form action="email.php" method="post">
<table border="0" width="500">
	<tr>
			<td><label>Name:</label></td>
			<td><input name="contactname"></td>
	</tr>
	<tr>
		<td>
			<label>School:</label></td>
			<td>
					<input name="school" type="text">
				</td>
		</tr>
		<tr>	
			<td>
				<label>Contact Number:</label>
			</td>

			<td>	
				<input name="contactnum" type="text">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="left">
			<label>Message:</label></td>

		</tr>
		<tr>	
			<td colspan="2" align="left">
					
				<textarea name="message" rows="10" cols="30">Put your message here</textarea>
			</td>
		</tr>

		<tr>
			<td align="center" colspan="2">
				<input type="submit" value="submit"></td>
		</tr>
</table>
</form>