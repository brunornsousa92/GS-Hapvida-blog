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
define( 'DB_NAME', 'hapvida' );

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
define( 'AUTH_KEY',         'Z!m+${0E|7*p_Ht#kF*dVwFa&|P#y2RpvqGRQuXLs(*@#3-*nS}W9m^8R=<.oetg' );
define( 'SECURE_AUTH_KEY',  'Q5{q 4-+WsysXASU<Tu.485J^E%V>(2c8,;`PdM-=P+B80`:#/fW.>m!,5t!S;o]' );
define( 'LOGGED_IN_KEY',    'E(-I;]5v3H4A,[Ck&.cn5>)mlqAQN7:R_z.?w^.s}Eo>iN}c`Z4ACPbMq^W%mYYL' );
define( 'NONCE_KEY',        'VgJ1_JfRf1v[V/xW)Zv_|iH*NkyG?wE,`EM%xZU-c~&Lo3W~DM0N:(?k!4n]?#JH' );
define( 'AUTH_SALT',        '2$a08Jieh#lMFOvz3cYJFT3J7f3H.V/4]`tE_hN.G=+79d}c(7[fPs#e8u+$~A,p' );
define( 'SECURE_AUTH_SALT', 'T0AY$n~Jm<;NgyTk< g7(hkN;mB_niN@n{&EM (6`MYU@gkb<3BV7PJ*/AVSJ)k$' );
define( 'LOGGED_IN_SALT',   'Y?Wevn.6*uW;))5W3n@V=0whlg]5m+R<HoWilr|M,h/<[ 5V:KrM.jLNt`0:xdpg' );
define( 'NONCE_SALT',       '$!D0vN*_$K~9xI{L<ywi.9![i0R^^sUaUHvGYrrteMr97uJ%g#PfU_jEx/:}|VXU' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'hvwp_';

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
