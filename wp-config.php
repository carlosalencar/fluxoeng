<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'fluxoeng');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'BR!@3456');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XD>(a(wl0|[3DSR?wG`X5z-{x,>zXxrX5P/exJrTpiNtWzAqNPbTX6x~E/&`[oB6');
define('SECURE_AUTH_KEY',  'V}_Ta|>xs{bRF{Q,]HYCAoAdt=W]VE8-g.V7f@Z.0V}|:A7~ &5w`b+.}!No6)Xd');
define('LOGGED_IN_KEY',    '?:o(C4fKltIVZo-y:z6R|Hi:X=EU,3aNO5cLEBX,;2c<0s|:kjNk C0>Rh,>{jp}');
define('NONCE_KEY',        'Py26N`#|B)xGDOw@lENv!yJ`%@1p:nkE>, Tf/?rTKp_q]_2[O5F)mTB1A>-<nya');
define('AUTH_SALT',        ')WVL#~|/6D~%W6@x[hDI2|qITe@=ifUWX4U={qd.)rXiN:JW*{+1w[g|6k=r_:da');
define('SECURE_AUTH_SALT', '&2W~huyo>ur:vqerF^@L~aWeCnI!)!!i&7t.9.$T?/X>##i&O|V3;$ZiF[A7ylI$');
define('LOGGED_IN_SALT',   'yF<P`0G.OLBd<MU5QvK{k|&<e20v!RWaH?cNDijamOj1aK9+CUZ`6Kb!$,g(ks-H');
define('NONCE_SALT',       'xKKtG5D7#]:9qwj42sU-UW[(D3YnT+l9,}{Y~N^#ycfZBb~sb}>,W}ERv KkBn+F');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
