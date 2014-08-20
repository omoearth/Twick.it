<?php
/*
 * Created at 25.05.2009
 *
 * @author Markus Moeller - Twick.it
 */
require_once("util/inc.php"); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo(getLanguage()) ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php loc('resend.title')?> | <?php loc('core.titleClaim') ?></title>
	<meta property="og:title" content="<?php loc('resend.title') ?>" />
    <meta name="description" content="<?php loc('resend.title')?> | <?php loc('core.titleClaim')?>" />   
    <meta name="keywords" content="<?php loc('resend.title')?>" />
	<?php include("inc/inc_global_header.php"); ?>
</head>

<body>
	<?php include("inc/inc_header.php"); ?>
	
    <div id="contentFrame">

		
		<!-- Ergebnis-Feld -->
		<div class="header-ergebnisfeld" id="header-ergebnisfeld">
			<h1><?php loc('resend.headline') ?></h1>
		</div>
		
		<!-- Content-Bereich | START -->
		<div class="content">
			
			<!-- Linke Haelfte | START -->
			<div class="inhalte-links">
				<!-- Kasten | START -->
				<div class="blog-kasten">
					<div class="blog-head"><h1><?php loc('resend.subline') ?></h1></div>
					<div class="blog-body">
						<br />
						<?php loc('resend.text') ?><br />
						<br />
						<form action="resend_registration_mail.php" method="post" name="userForm" id="userForm">
							<label for="username"><?php loc('resend.label') ?>:</label> <input type="text" name="username"/><br />
							<br />
							<a href="javascript:;" onclick="$('userForm').submit()" id="createLink"><img src="<?php echo(STATIC_ROOT) ?>/html/img/pfeil_weiss.gif" width="15" height="9"/><?php loc('resend.button') ?></a>
						</form>
					</div>
					<div class="blog-footer"></div>
				</div>
				<!-- Kasten | ENDE -->
			</div>
			<!-- Linke Haelfte | ENDE -->
			
			
			<!-- Rechte Haelfte | START -->
			<div class="inhalte-rechts">
			
				<!-- Info | START -->
			    <div class="teaser">
			    	<div class="teaser-head"><h2><?php loc('resend.info.title') ?></h2></div>
			        <div class="teaser-body">
			        	<div>
			        		<?php loc('resend.info.text') ?><br />
			        		<br />
			        		<?php loc('resend.info.howto') ?><br />
							<ol>
								<li><?php loc('resend.info.howto.1') ?></li>
								<li><?php loc('resend.info.howto.2') ?></li>
								<li><?php loc('resend.info.howto.3') ?></li>
							</ol>
			            </div>
			        </div>
			        <div class="teaser-footer"></div>                        
			    </div>
			    <!-- Info | ENDE -->  
		
				<?php include(DOCUMENT_ROOT . "/inc/inc_bookmarks.php") ?>    
			
			<br /></div>
			<!-- Rechte Haelfte | ENDE -->
			
			<div class="clearbox"></div>
		</div>
		<!-- Content-Bereich | ENDE -->
	
	</div>
	
	<?php include(DOCUMENT_ROOT . "/inc/inc_footer.php"); ?>

</body>
</html>