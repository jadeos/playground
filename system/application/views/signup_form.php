
	
<div id="signup_form">
	
	<p class="heading">New User Signup</p>
	
	<?php echo form_open('signup/submit'); ?>
	
	<?php echo validation_errors('<p class="error">','</p>'); ?>
	
	<p>
		<label for="username">Username: </label>
		<?php echo form_input('username',set_value('username')); ?>
	</p>
	<p>
		<label for="password">Password: </label>
		<?php echo form_password('password'); ?>
	</p>
	<p>
		<label for="passconf">Confirm Password: </label>
		<?php echo form_password('passconf'); ?>
	</p>
	<p>
		<label for="email">E-mail: </label>
		<?php echo form_input('email',set_value('email')); ?>
	</p>
	<p>
		<?php echo form_submit('submit','Create my account'); ?>
	</p>
	<?php echo form_close(); ?>
	<p>
		<?php echo anchor('login','Login Form'); ?>
	</p>
	<div>

		<p>
			Return to the <?php echo anchor('/','home'); ?> page
		</p>

	</div>

</div>

