<?php
$action = 'add';
$display = '';
if (isset($_POST['action']))
	$action = $_POST['action'];
if ($action == 'update')
	$display = 'style="display: none;"'
?>
<div class="row justify-content-center">
	<div class="col-lg-10">
		<div class="row">
			<div class="col-lg">
				<div class="p-5">
					<?php echo $err ?>
					<h3 class="text-center"><b><?php echo strtoupper($title) ?></b></h3>
					<form method="post" enctype="multipart/form-data">
						<input type="hidden" name="pkey" value="">
						<input type="hidden" name="action" value="<?php echo $action ?>">

						<div class="form-group row">
							<label for="name" class="col-sm-3 col-form-label">Nama</label>
							<div class="col-sm">
								<input type="text" class="form-control" id="name" name="name" placeholder="Nama">
							</div>
						</div>
						<div class="form-group row">
							<label for="link" class="col-sm-3 col-form-label">Link Streaming</label>
							<div class="col-sm">
								<input type="text" class="form-control" id="link" name="link" placeholder="Link Streaming" value="https://94.237.69.116:443/hls/streamingkey.m3u8">
							</div>
						</div>
						<div class="form-group row">
							<label for="img" class="col-sm-3 ">Logo Streaming</label>
							<div class="col-sm">
								<input type="file" class="form-control-file" id="img" name="img" accept=".jpg,.png,.jpeg">
							</div>
						</div>
						<div class="form-group row">
							<label for="adsImg" class="col-sm-3 ">Iklan ads</label>
							<div class="col-sm-3">
								<input type="file" class="form-control-file" id="adsImg" name="adsImg" accept=".gif">
							</div>
							<div class="col-sm">
								<input type="text" class="form-control" id="linkAds" name="linkAds">
							</div>
						</div>

						<!-- detaile -->
						<div class="form-group row">
							<div class="col-sm">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Nama Tanyang</th>
											<th scope="col"></th>
										</tr>
									</thead>
									<tbody>
										<tr <?php echo $display ?>>
											<input type="hidden" name="detailKey[]">
											<td>
												<input type="text" class="form-control" name="detailName[]" placeholder="Nama Tanyang">
											</td>
											<td>
												<input type="datetime-local" class="form-control" name="dateTime[]">
											</td>
											<td><b class="text-danger btn closeDetail">X</b></td>
										</tr>
										<?php
										//jika update/edit
										if ($action == 'update') {
										?>
											<?php foreach ($dataDetail as $DetailKey => $detailValue) { ?>
												<!-- 2022-05-12T02:08 -->
												<tr>
													<input type="hidden" name="detailKey[]" value="<?php echo $detailValue['pkey'] ?>">
													<td>
														<input type="text" class="form-control" id="name" name="detailName[]" placeholder="Nama Tanyang" value="<?php echo $detailValue['name'] ?>">
													</td>
													<td>
														<input type="datetime-local" class="form-control" name="dateTime[]" value="<?php echo date("Y-m-d", $detailValue['datetime']) . 'T' . date("H:i", $detailValue['datetime']) ?>">
													</td>
													<td><b class="text-danger btn closeDetail">X</b></td>
												</tr>
											<?php } ?>
										<?php } //jika update/edit
										?>
									</tbody>
									<tfoot>
										<tr>
											<td><button type="button" class="btn btn-primary" name="addDetail">Tambah</button></td>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
						<!-- detaile -->

						<div class="form-group row mt-5">
							<div class="col-sm">
								<button type="submit" class="btn btn-primary btn-block">Submit</button>
							</div>
							<div class="col-sm">
								<a href="<?php echo base_url($baseUrl . 'List') ?>" class="btn btn-warning btn-block">Cancel</a>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>