<?php
//** MySQL-Einstellungen **//
define('DB_NAME', 'blog_en');    // Der Name der Datenbank
define('DB_USER', 'twickitblog_en');     // Ihr MySQL-Benutzername
define('DB_PASSWORD', 'xxxxxx'); // Sowie das MySQL-Passwort
define('DB_HOST', 'localhost');    // Diesen Parameter müssen Sie in den allermeisten Fällen nicht ändern
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Wenn Sie mehrere WordPress-Installationen in einer Datenbank haben,
// muss jede Installation ein eigenes "Tabellenpräfix" bekommen
$table_prefix  = 'wp_';   // Bitte nur Zahlen, Buchstaben und Unterstriche

// Setzen Sie für AUTH_KEY, SECURE_AUTH_KEY und LOGGED_IN_KEY ein Passwort oder
// einen langen Satz ein. Sie werden ihn später nicht mehr benötigen, daher
// machen Sie ihn ruhig lang und kompliziert. Unter http://api.wordpress.org/secret-key/1.0/
// können Sie einen langen Passwortsatz automatisch generieren lassen.
define('AUTH_KEY', 'Or^gM;`LT[Z\"ysl_M^[3[z6hk#v&WAYHIjlM Z>G%MESk&`,!kAlgk]Y<{aX9Et\"');
define('SECURE_AUTH_KEY', '`I=,11}KJ2~]M]C#PI_[cD7.(<9H*ZnUnr^]~aN7S%-._G>2d2L?Nwu\'r05xcd|>');
define('LOGGED_IN_KEY', '7V6E9WRr,/YGEcJMo=T!U<t237+[9j-)>c$+<Fa\"t$1cNFC#iVR\'R{v>HyS7yErI');


// Ändern Sie den folgenden Parameter, wenn Sie eine übersetzte Version von
// WordPress nutzen. Für die gewünschte Sprache muss eine MO-Datei in
// wp-content/languages liegen.
// Installieren Sie beispielsweise de_DE.mo in wp-content/languages und
// setzen Sie WPLANG auf 'de_DE', um WordPress auf deutsch zu haben.
define ('WPLANG', 'en_UK');

/* Ab hier sind keine weiteren Änderungen notwendig. Viel Spaß beim Bloggen! */

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH.'wp-settings.php');
?>
