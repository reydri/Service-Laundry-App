<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/menu'); ?>

<div id="content" class="col-md-10 col-xs-8 col-sm-9">

				<div id="panel" class="panel panel-info">
					<div class="panel-heading"> 
						<h3 class="panel-title"> 
						<span class="glyphicon glyphicon-user"></span>
						Tambah Data Rincian Pembelian
						</h3>
					 </div>
					 <div class="panel-body">

					 	<form action="<?=base_url();?>rincpembelian/proses_tambah" method="post">
					 		<table width="80%">
					 			<tr>
					 				<td> No Pembelian </td>
					 				<td>:</td>
					 				<td> 
					 			<select name="nopembelian" class="form-control" required>
                                        <?php
                                            foreach($pembelian as $pem) {
                                            echo "<option value='".$pem->nopembelian."'>".$pem->nopembelian."</option>";
                                                }
					 						?>										
					 					</select>
					 				</td>
					 			</tr>
					 			<tr>
					 				<td>&nbsp;</td>
					 			</tr>
					 			<tr>
					 				<td> Kode Barang</td>
					 				<td>:</td>
					 				<td> 
					 					<select name="kodebarang" class="form-control" required>
					 						<?php
                                            foreach($barang as $brg) {
                                            echo "<option value='".$brg->kodebarang."'>".$brg->kodebarang."</option>";
                                                }
					 						?>	
					 					</select>
					 				</td>
					 			</tr>
									<tr>
					 				<td>&nbsp;</td>
					 			</tr>
					 			<tr>
					 				<td> Jumlah </td>
					 				<td>:</td>
					 				<td> <input type="text" name="jumlah" class="form-control" required> </td>
					 			</tr>
					 	
					 			<tr>
					 				<td></td>
					 				<td></td>
					 				<td>
					 					<input id="btnn" class="btn btn-success" type="submit" name="simpan" value="Tambah">
					 				 </td>
					 			</tr>
					 		</table>
					 	</form>

					 </div>
				</div>

			</div> <!-- end content -->

<?php $this->load->view('template/footer'); ?>
