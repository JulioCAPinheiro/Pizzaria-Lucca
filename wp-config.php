<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'LuccaPizzaria' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BQ0=qHG*KiGO&/5oKHro#?i|@wiChrQwr3K)A.Z1|0{ #]V|~+A-GAJzdWD,pvn&' );
define( 'SECURE_AUTH_KEY',  'wg{a0^#8BJ(3j>^],Si,jYEKRcN1|`^+/5_Bh>wDoP2|Q4=)t&w:K+yGFWylBz|H' );
define( 'LOGGED_IN_KEY',    'uFe(&3KS0;#jQ^QCgnbDt~~J3}CB3Pm_eV3u=I=<qrhJdN<BhU,,X*_]=#D:-ZXI' );
define( 'NONCE_KEY',        'CUl#*?H8hRzUzXuOC[Vc_NU0e>oR_YK8ES G{8;QNcXWIcN7:y{2C?u@3ezp.>bu' );
define( 'AUTH_SALT',        'vaEjkr,p/wG[Vf|CH+q.mzuUkbX3c<Jn;0^2mm7EyDDg4(2c=^.8Hc u5#}!x|Zn' );
define( 'SECURE_AUTH_SALT', '<7@<AR0_T~;bjolt`lGc596*B`+|o*`wCei<I#aPwFb()!b+V;!^?7<yy46)&#9G' );
define( 'LOGGED_IN_SALT',   'i]Nczh!Qs!fltKyW =pUI7,ov|e3z&$OEqg=5TCVc,C5:Ij^;Sg={,eW:^k !j+E' );
define( 'NONCE_SALT',       ':^Ys_8jsx3%Ezy]SgS8  71sRev2&;Yc9Ss?JPgfjx8]+NPL`?wQuLm4dGbtSOup' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
