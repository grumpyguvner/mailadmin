<?php
require_once("inc/header.inc.php");
$_SESSION['return_to'] = $_SERVER['REQUEST_URI'];
if (isset($_SESSION['mailcow_cc_role']) && $_SESSION['mailcow_cc_role'] == 'admin') {
	header('Location: /admin.php');
}
elseif (isset($_SESSION['mailcow_cc_role']) && $_SESSION['mailcow_cc_role'] == "domainadmin") {
	header('Location: /mailbox.php');
}
elseif (isset($_SESSION['mailcow_cc_role']) && $_SESSION['mailcow_cc_role'] == "user") {
	header('Location: /user.php');
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<div class="panel panel-default">
                            <div class="panel-heading">MailAdmin</div>
				<div class="panel-body">
					<center style="padding-top: 40px; padding-bottom: 40px;">
                                            <img src="img/logo.svg" alt="GrumpyGuvner" width="200" height="100">
					</center>
						<form method="post" autofill="off">
						<div class="form-group">
							<label class="sr-only" for="login_user"><?=$lang['login']['username'];?></label>
							<div class="input-group">
								<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
								<input name="login_user" autocorrect="off" autocapitalize="none" type="text" id="login_user" class="form-control" placeholder="<?=$lang['login']['username'];?>" required="" autofocus="">
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only" for="pass_user"><?=$lang['login']['password'];?></label>
							<div class="input-group">
								<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
								<input name="pass_user" type="password" id="pass_user" class="form-control" placeholder="<?=$lang['login']['password'];?>" required="">
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success" value="Login"><?=$lang['login']['login'];?></button>
<!--							<div class="btn-group pull-right">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="lang-sm lang-lbl" lang="<?=$_SESSION['mailcow_locale'];?>"></span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li <?=($_SESSION['mailcow_locale'] == 'de') ? 'class="active"' : ''?>><a href="#" onClick="setLang('de')"><span class="lang-xs lang-lbl-full" lang="de"></a></li>
									<li <?=($_SESSION['mailcow_locale'] == 'en') ? 'class="active"' : ''?>><a href="#" onClick="setLang('en')"><span class="lang-xs lang-lbl-full" lang="en"></a></li>
									<li <?=($_SESSION['mailcow_locale'] == 'pt') ? 'class="active"' : ''?>><a href="#" onClick="setLang('pt')"><span class="lang-xs lang-lbl-full" lang="pt"></a></li>
								</ul>
							</div> -->
						</div>
						</form>
						<?php
						if (isset($_SESSION['ldelay']) && $_SESSION['ldelay'] != "0"):
						?>
						<p><div class="alert alert-info"><?=sprintf($lang['login']['delayed'], $_SESSION['ldelay']);?></b></div></p>
						<?php
						endif;
						?>
				</div>
			</div>
		</div>
	</div>
</div> <!-- /container -->
<script src="js/index.js"></script>
<?php
require_once("inc/footer.inc.php");
?>
