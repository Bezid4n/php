<?php
			
			$link=mysqli_connect("localhost","root","","wildlife");
			
			if (!$link){
			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
		 ?>