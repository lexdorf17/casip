<form method="post" action="<?php echo $base_url;?>/Proses/Management.php" enctype="multipart/form-data">

<fieldset>
<legend>Form Management</legend>

<div class="row">
<div class="four columns">
Username<br /><br /><input type="text" name="username"/>
</div>
<div class="eight columns">
Password<br /><br /><input type="password" name="password"/>
</div>
</div>

<div class="row">
<div class="eight columns">
Email<br /><br /><input type="email" name="email"/>
</div>
</div>

<br /><br />
<p><input type="submit" name="simpan" value="Simpan" class="button small secondary"/></p>
</fieldset>

</form>