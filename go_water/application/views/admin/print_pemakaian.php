<link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css1/themify-icons.css">

<div class="row">
	<style>
		button {
			background-color: Transparent;
			background-repeat: no-repeat;
			border: none;
			cursor: pointer;
			overflow: hidden;
			outline: none;

		}

		@media print {
			#clear {
				display: none;
			}
		}

	</style>

	<div class="col-lg-2">
        <div class="ti it-"
	</div>
	<div class="col-lg-8">
		<div class="card">
			<img src="<?php echo base_url().'assets/img/logo_admin.png'?>" style="width:120px;margin:20px;margin-left:90px;position:absolute">
			<h2 class="box-title" style="text-align:center;font-size:25px;margin-top:70px">Data Pemakaian Customer </h2>
			<h4 class="box-title" style="text-align:lrft;margin-bottom:50px;margin-left:30px">Tanggal :
				<?php echo date("d m Y") ?>
			</h4>

			<table class=" table table-light " id="member">
				<thead class="thead-dark">
					<tr class="text-center">
						<th>No</th>
						<th>ID</th>
						<th>Nama</th>
						<th>Tanggal</th>
						<th> Bulan Lalu</th>
						<th> Bulan ini</th>


					</tr><br>
				</thead>
				<?php
                                   foreach ($member as $hasil) {
                                            ?>
				<tr class="text-center">
					<td>
						<?php echo $hasil->No ?>
					</td>
					<td>
						<?php echo $hasil->Customer_ID ?>
					</td>
					<td>
						<?php echo $hasil->nama ?>
					</td>
					<td>
						<?php echo $hasil->Tanggal ?>
					</td>
					<td>
						<?php echo $hasil->Pemakaian_Bulan_Lalu ?>
					</td>
					<td>
						<?php echo $hasil->Pemakaian_Bulan_Ini ?>
					</td>
				</tr>
				<?php
                                    }
                                    ?>
			</table>
		</div> <!-- /.row -->
	</div>



	<div class="col-lg-2">
		<button onClick="print()" id="clear"><img src="<?php echo base_url() ?>assets/images/print.png" style="margin:40px;"></button>
	</div> <!-- /.row -->


	<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
	<script>
		$("#myElementId").print({
			addGlobalStyles: true,
			stylesheet: null,
			rejectWindow: true,
			noPrintSelector: ".no-print",
			iframe: true,
			append: null,
			prepend: null
		});

	</script>


</div>
</div>
</div>
</div>
