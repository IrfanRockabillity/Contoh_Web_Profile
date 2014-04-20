<?php
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
						echo "Username and Password can not be empty!";
					} else if ($_GET['error'] == 2) {
						echo "Username can not be empty!";
					} else if ($_GET['error'] == 3) {
						echo "Password can not be empty!";
					} else if ($_GET['error'] == 4) {
						echo "Username and Password are not registered!";
					}
				}
?>