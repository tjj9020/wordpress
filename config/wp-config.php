<?php

$_SERVER['HTTPS'] = 'on';

define( 'USERS_HOST', 'users<%=@env%>.petfinder.com' );
define( 'PDSDAT_HOST', '<%=@pdsdat_host%>' );
define( 'PET_PHOTO_HOST', '<%=@pet_photo_host%>' );

define( 'WP_HOME', 'https://www<%=@env%>.petfinder.com' );
define( 'WP_SITEURL', WP_HOME );
define( 'WP_CONTENT_DIR', realpath( '<%=@wordpress_dir%>/wp-content' ) );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );
define( 'WP_PLUGIN_DIR', realpath( '/petfinder/wp-con/wp-content/plugins' ) );
define( 'WP_PLUGIN_URL', WP_HOME . '/wp-content/plugins' );
define( 'WP_THEMES_DIR', realpath( '/petfinder/wp-con/wp-content/themes' ) );
define( 'WP_THEMES_URL', WP_HOME . '/wp-content/themes' );
define( 'NGINX_NO_CACHE_SLUGS', 'pet-search|www<%=@env%>.petfinder.com');

define( 'DB_NAME', '<%=@db_name%>' );
define( 'DB_USER', '<%=@db_user%>' );
define( 'DB_PASSWORD', '<%=@db_password%>' );
define( 'DB_HOST', '<%=@db_host%>' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', <%=@disable_cron%>);

define( 'AUTH_KEY', 'Iv?V|hvf{MCF$.B36(NgUz-sy_At%ld#qL@K32K*Bw?4*VBVE`ansOj/}iVgxWwb' );
define( 'SECURE_AUTH_KEY', '/mmmVf{^-*p2y0PoT-HlY`x<{jb.lI|J&=UfAMaHeucjAFt0B#]#ve-H0ppjXFi6' );
define( 'LOGGED_IN_KEY', '}>s3{S.y=J8pAV,62k5EYx[Ps6K2-j[A):dSZI81?f.Y6S3nO<&| &CuvLR|%%B]' );
define( 'NONCE_KEY', 'Y~/Vq|)_:,+Gxat-}j1xSl+m{qsJY LF^|a%e|2p.L^1W${Y)jAaS!Ga =$m_86I' );
define( 'AUTH_SALT', '%]eO,a?%o~uKYY9b|ym&}gEz[-)aJ|d/kcFp8V]75(=Kg8dQt6` -^#mtg#%y/.W' );
define( 'SECURE_AUTH_SALT', '((nW=2Dz%ypYjk-:G+8}6&/`T#;C)L|D>){XuAU+9ML|$lVq)p4)|bT9i[A,<=og' );
define( 'LOGGED_IN_SALT', '?v,-dC1O?UP^.iR(49$UU70E%@A=JESioL6D[#D*}O:@.~Xgdfh::F~sQ|N)=^q`' );
define( 'NONCE_SALT', 'bm|/raJJ}w`f|*|,M=}wP+cU> yzuH952^U1qpmpd7xUciR]GOL&ejdga|^KpxWc' );

$table_prefix = 'wp_';

define( 'WPLANG', '' );

// Disable the theme and plugin file editor in wp-admin for security
define( 'DISALLOW_FILE_EDIT', true );

// Disable all WP core updates
define( 'WP_AUTO_UPDATE_CORE', false );

define('WP_DEBUG', !true);
if (WP_DEBUG) {
      define('WP_DEBUG_DISPLAY', !true);
          define('WP_DEBUG_LOG', true);
          define('SAVEQUERIES', !true);
              define('SCRIPT_DEBUG', true);
              define('CONCATENATE_SCRIPTS', false);
}

if ( ! defined( 'ABSPATH' ) ) {
          define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );
