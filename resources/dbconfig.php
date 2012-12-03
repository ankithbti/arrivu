
<?php
/*
#############################
##License Details
#############################
## If you are seeing this file, you are bound to follow the following temrs and conditions:
## No part of this source code may be disclosed or transferred outside Arrivu Systems or the current interested parties.
## No part of this publication may be reproduced or transmitted in any form or by any means, including photography and recording, without the written permission of Arrivu Systems, an application for which should be addressed to the organisation.
## Such written permission must also be obtained before any part of this publication is stored in a retrieval system of any nature.
#############################
## Copyright ©Arrivu Systems (2012). All Rights Reserved.
#############################
*/
	/* Local Database */	
	DEFINE('DBUSER','root');
	DEFINE('DBPW','saring');
	DEFINE('DBHOST','localhost');
	DEFINE('DBNAME','arrivu');
	
	
	/* Server Database 
	DEFINE('DBUSER','ankithbti');
	DEFINE('DBPW','saring');
	DEFINE('DBHOST','localhost');
	DEFINE('DBNAME','arrivu');
	*/
	
	if($dbc = mysql_connect(DBHOST, DBUSER, DBPW)){
		if(!mysql_select_db(DBNAME)){
			trigger_error("Could not select the database" . mysql_errno());
			exit();
		}
	}else{
		trigger_error("Could not connect to MYSQL");
		exit();
	}
	
	function escape_data($data){
		if(function_exists('mysql_real_escape_string')){
			global $dbc;
			$data = mysql_real_escape_string(trim($data),$dbc);
			$data = strip_tags($data);
		}else{
			$data = mysql_escape_string(trim($data));
			$data = strip_tags($data);			
		}
		return $data ;
	}
?>