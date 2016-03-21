<?php
        session_start();
		
        session_destroy();
		session_start();
		$_SESSION['q']=0;
		$_SESSION['total']=0;
        header( 'Location: index.php' ) ;
?>