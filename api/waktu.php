	<?php 
			include_once 'koneksi.php';

			$now = date('Y-m-d');
			$day = date('D', strtotime($now));
			$dayList = array(
				'Sun' => 'Minggu',
				'Mon' => 'Senin',
				'Tue' => 'Selasa',
				'Wed' => 'Rabu',
				'Thu' => 'Kamis',
				'Fri' => 'Jumat',
				'Sat' => 'Sabtu'
			);
echo $fix_tgl = $dayList[$day].", ".Indonesia3Tgl($now);
			?>