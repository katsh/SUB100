<?php

if (isset($this->form_msg['error'])) {
	echo $this->form_msg['error'];exit;
} else if (isset($this->form_msg['success'])) {
	echo $this->form_msg['success'];
}

?>

This is a sample contact form. It won't actually mail anything, <br />
but it's here for demonstration purposes.

<br /><br />

<form method="post" id="contact">
<table border="0" width="100%">
	
	<tr>
		<td><input type="text" placeholder="Name" name="name" id="name" class="input-text" /></td>
		<td rowspan="2">
			<textarea placeholder="Message" class="input-text input-textarea" name="message" id="message"></textarea>
		</td>
	</tr>
	<tr>
		<td><input type="text" placeholder="E-mail" name="email" id="email" class="input-text" /></td>
	</tr>
	<tr>
		<td colspan="2">
        		<input type="submit" name="submit"  value="Send" class="button" />
	            <input type="text" name="lastname"  style="margin-left: -50000px;" /><!-- gotcha -->
		</td>
	</tr>
</table>
</form>
