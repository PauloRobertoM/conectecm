<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'conec247_conecte');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'conec247_luan');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Dot43)Nf*-rX');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q5(-J*!jybc2&bDJ8KW@,F|Nf6BDO?{7cRM?2&ItT)[yws=IF&6CDNNk`p4QS&Vo');
define('SECURE_AUTH_KEY',  'fX]0txd&k^!,>50.OW^AI&lGWW4,EOJu*-!vstML:5WWWI$-1@P|]p[-9v+|TME@');
define('LOGGED_IN_KEY',    'F|88q~7A1wBUqSQStf2r$y)4a/6^8evzvIZ}S)WxRe,K3JfFblyB=hbV-r:QG81}');
define('NONCE_KEY',        '#zFECj1c>TCg%H<T<OiIB3KH1NkOF.Jk!+E=a8hR@EKf9<Q|*~tP>}W#4i:G#L{w');
define('AUTH_SALT',        'MD_ B>3{e!^eM#tg|T[K=u}Coo#Z+aFM8~-3hkn*iPPYnh2Uxxit-(8? Ao}^^lt');
define('SECURE_AUTH_SALT', ':ClyTN_+I!;A=yU+IcM[J-!vMmZ@uK|Q Oi9^CkF,);kE1h-lQ5de7Xr|$*L@+Pb');
define('LOGGED_IN_SALT',   'e$48]U,@={7M&j%h+~DUZ@QLCt_opukbp-n`59mXJ;mpuEKsHA0z),o*fc_B?ts[');
define('NONCE_SALT',       'V_+.H}--!rS;-C[1OoEBPf80rLI@jR~gMhE2utNB+D>^Nx3#OE]yl6*+>:0G/w}U');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'conectecm_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');