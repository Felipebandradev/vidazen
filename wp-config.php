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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'vidazen' );

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
define( 'AUTH_KEY',         '.A MnD+*[^HY=v%2wWQW)H:sPf<II~B!srkH1Ncm0hkD_L-TDIc!_Xp dR!u_$0a' );
define( 'SECURE_AUTH_KEY',  'UoS9U9${64;P0bV|1ojF&AcGyBhJ_.L-Z!]LNQArx Zs;(hSO5L,h+)WsC:I,Q0m' );
define( 'LOGGED_IN_KEY',    'hW~G&<sx/t1RX:3^J[!a8rC7bhrjCMcINFBj&yIjPB6@Ovc(6t>MVAtSnZ@p|$60' );
define( 'NONCE_KEY',        ']^QI=nHAHT/mpt[7J5V9.hE]=*ZaF-<e}]re$[?|U}N:LW[`8F^VX6axHiJ!`8x&' );
define( 'AUTH_SALT',        'B.nqI-jN60[u76V955STkN 4hH;fYi{Nb^n+BYL(^aK2R52;S<8!OV)0=6#d`cBW' );
define( 'SECURE_AUTH_SALT', 'Z8.)Pkwo(O$Cu_f.HGMN~8isp6h:;m;T^p0@%dOC$}sM+nA2B(S`)Eo]@_fGWj+K' );
define( 'LOGGED_IN_SALT',   ',L<_P0Rqs6BH0xBxym. %)XkP4E=h8C1`21NS5?lIYr)y%d%+n5@s(tuK%#-5@.r' );
define( 'NONCE_SALT',       'AcBxz>Vi[GE%f_wZr-ntq*YMa@<C{&dv*K7RsCkc`/Y[9pzUXiEL+o,C#D1R?Ir#' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
