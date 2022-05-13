<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Community Auth - Login Form View
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */



if (!isset($on_hold_message)) {
	if (isset($login_error_mesg)) {
		echo '
			<div style="border:1px solid red;">
				<p>
					Login Error #' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Invalid Username, Email Address, or Password.
				</p>
				<p>
					Username, email address and password are all case sensitive.
				</p>
			</div>
		';
	}

	if ($this->input->get(AUTH_LOGOUT_PARAM)) {
		echo '
			<div style="border:1px solid green">
				<p>
					You have successfully logged out.
				</p>
			</div>
		';
	}

	echo form_open($login_url, ['class' => 'std-form']);
?>

	<div class="input-group mb-3">
		<input type="text" class="form-control" placeholder="Email/Username" name="login_string" id="login_string" autocomplete="off" maxlength="255">
		<!-- <input type="text" name="login_string" id="login_string" class="form_input" autocomplete="off" maxlength="255" /> -->
		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-envelope"></span>
			</div>
		</div>
	</div>
	<div class="input-group mb-3">
		<input type="password" class="form-control" placeholder="Password" name="login_pass" id="login_pass" <?php
																												if (config_item('max_chars_for_password') > 0)
																													echo 'maxlength="' . config_item('max_chars_for_password') . '"';
																												?> autocomplete="off" readonly="readonly" onfocus="this.removeAttribute('readonly');" />



		<div class="input-group-append">
			<div class="input-group-text">
				<span class="fas fa-lock"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<!-- /.col -->
		<div class="col-12">
			<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
		</div>
		<!-- /.col -->
	</div>
	</form>
	<!-- /.social-auth-links -->
	<p class="mb-1">
		<a href="forgot-password.html">Olvidé mi contraseña</a>
	</p>

<?php

} else {
	// EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
	echo '
			<div style="border:1px solid red;">
				<p>
					Excessive Login Attempts
				</p>
				<p>
					You have exceeded the maximum number of failed login<br />
					attempts that this website will allow.
				<p>
				<p>
					Your access to login and account recovery has been blocked for ' . ((int) config_item('seconds_on_hold') / 60) . ' minutes.
				</p>
				<p>
					Please use the <a href="/examples/recover">Account Recovery</a> after ' . ((int) config_item('seconds_on_hold') / 60) . ' minutes has passed,<br />
					or contact us if you require assistance gaining access to your account.
				</p>
			</div>
		';
}

/* End of file login_form.php */
/* Location: /community_auth/views/examples/login_form.php */
