<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php
	$id = $_GET[ 'id' ];
	$DB->query( "DELETE FROM tbl_users WHERE id = $id" );
	header( "Location: " . SITE_URL . "/?page=users" );
