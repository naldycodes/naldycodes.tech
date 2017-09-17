<?php 

	/**
	* 
	*/
	class Functions {


		// redirect to other pages
		public function redirect_to($url="") {
			header("location: $url");
		}

		 // show success
		public static function showsuccess($message) {
			?>	
			<script>
				window.onload = function () {
					alert("hahaha");
				}
			</script>
			<?php
		}





	}

	


 ?>