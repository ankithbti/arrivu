<?php
  ob_start();
  session_start();
  include('headerHome.html');
  require_once('../resources/dbconfig.php');
?>
<body>
<!--
#############################
##License Details
#############################
## If you are seeing this file, you are bound to follow the following temrs and conditions:
## No part of this source code may be disclosed or transferred outside Arrivu Systems or the current interested parties.
## No part of this publication may be reproduced or transmitted in any form or by any means, including photography and recording, without the written permission of Arrivu Systems, an application for which should be addressed to the organisation.
## Such written permission must also be obtained before any part of this publication is stored in a retrieval system of any nature.
#############################
## Copyright �Arrivu Systems (2012). All Rights Reserved.
#############################
-->
<div class="coverup">
<div class="container">
	<center>
		<?php
		  include('headernavigation.php');
		?>
	</center>
</div>
<div class="container" align="center">
<div class="fullscreen" align="center">
	<?php
		include('slideshow.php')
	?>
</div>
</div>

<div class="container">
	<center>
	<div class="row">
	    <div class="span8">
	    	
	    	<div class="well">
                    <h1>Learn in a smart way</h1>
                    <p class="well-text">
                    	Arrivu Systems is an emerging start-up in the higher education environment.<br/>
						We offer innovative services for students, universities and companies in the field of higher education and training.
                    </p>

                    
            </div>

            <div class="well">
                    

                    <h1>Our Vision</h1>
                    <p class="well-text">
						Our vision is to make education accessible to every world.
                    </p>
            </div>


	    </div>
	    <div class="span4" align="center">
	    	
	    	<div class="well-subscribe">
                    <h3>Subusribe to us!!</h3>
                    <p>Get updated by email:</p>
                    <form action="#" method="post">
                        <input type="text" name="EMAIL" class="span3" placeholder="Email address">
                        <br/>
                        <input class="btn btn-primary fill-width" type="submit" name="subscribe" value="Subscribe">
                    </form>
            </div>

            
	    	<div class="clearfix"></div>


	    </div>
	</div>
	</center>
</div>
<div class="clearfix"></div>
<div class="container">
	<center>
		<?php
			include('footer.php');
		?>
	</center>
</div>
<div class="clearfix"></div>
</div>
</body>
</html>



