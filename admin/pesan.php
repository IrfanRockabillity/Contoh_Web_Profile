<?php
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['pesan'])) {
					if ($_GET['pesan'] == 'userdeleted') {
						echo "User Berhasil Dihapus";
					} else if ($_GET['pesan'] == 'articledeleted') {
						echo "Artikel Telah Dihapus";
					} else if ($_GET['pesan'] == 'commentdeleted') {
						echo "Komentar Telah Dihapus";
					} else if ($_GET['pesan'] == 'gambardeleted') {
						echo "gambar Telah Dihapus";
					}   
				}
?>