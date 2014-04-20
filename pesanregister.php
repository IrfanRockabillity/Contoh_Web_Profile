<?php
				//kode php ini kita gunakan untuk menampilkan pesan dari form register
				if (!empty($_GET['message'])) {
					if ($_GET['message'] == 'success') {
						echo "Thank's For Register";
					} else if ($_GET['message'] == 'error') {
						echo "Sory, user has been used";
					} 
				}
?>