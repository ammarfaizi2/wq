
<table id="table" class="table table-striped">
                <tbody>
                	<tr>
                 <th>Nama</th>
		<th>Nama Panggilan</th>
		<th>Nama Istri</th>
		<th>Aksi</th>
                </tr>
               <?php
	if( ! empty($data)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
		foreach($data as $data){ // Lakukan looping pada variabel siswa dari controller
			echo "<tr>";
			echo "<td>".$data->nama."</td>";
			echo "<td>".$data->panggilan."</td>";
			echo "<td>".$data->nama_istri."</td>";
			?>
			<td><a href='<?php echo base_url('turunan/search_by_id/'.$data->anak_dari);?>'  class='btn bg-green btn-flat margin'>  View Data</a></td>
		<?php	echo "</tr>";
		}
	}else{ // Jika data tidak ada
		echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
	}
	?>
              </tbody></table>