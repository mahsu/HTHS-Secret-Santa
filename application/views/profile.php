<html>
<body>
<?php //echo validation_errors('<p style="color:red;">', '</p>'); ?>
<div style="margin: 50px 10px 10px">
<h3>My groups </h3>
<table style="font-size:12px;" border="1" cellpadding="5">
	<tr style="font-weight:bold;">
		<th>Group Name</th>
		<th>Group Code</th>
		<th># of Members</th>
	</tr>
	<?php echo $this->datamod->drawMemberGroups($this->session->userdata('name'));?>
</table>
</div>

<?php echo form_open('profile/groupcode'); ?>
<div style="margin: 50px 10px 10px">
<h3>Join a group</h3>
<p>Enter a group code below to join a group.</p>
<form>
<?php if (isset($success_code) && $success_code == true) echo '<div style="color:green;margin-top:10px;font-size:12px;text-indent:5px">You have successfully joined the group <b>'.$this->datamod->getGroupName(set_value('group')).'</b>!</div>';?>
<?php echo form_error('group'); ?>
Group Code: <input type="text" maxlength="4" size="4" name="group" /> <span>&nbsp;&nbsp;&nbsp;
<input value="add group" type="submit">
</form>
</div>
<?php echo form_close();?>

<br />
<br />

<?php echo form_open('profile/addgroup'); ?>
<div style="margin: 0px 10px 10px">
<h3>Create a group</h3>
<p>Create a group to gift exchange with some friends.</p>
<form>
<?php if (isset($success_name) && $success_name == true) echo '<div style="color:green;margin-top:10px;font-size:12px;text-indent:5px">You have successfully created the group <b>'.set_value('group_name').'</b>! Your group code is <b>'.$this->datamod->getGroupCode(set_value('group_name')).'</b>. Write this down in a safe place.</div>';?>
<?php echo form_error('group_name'); ?>
Group Name: <input type="text" maxlength="50" size="50" name="group_name" /> <span>&nbsp;&nbsp;&nbsp;
<input value="create group" type="submit">
</form>
</div>
<?php echo form_close();?>

</html>