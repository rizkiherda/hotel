<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title"><?=$title?></h3>
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>No. KTP</th>
							<th>Nama Lengkap</th>
							<th class="hidden-sm hidden-xs">E-mail</th>
							<th class="hidden-sm hidden-xs">Telepon / HP</th>
							<th>Grup Tamu</th>
							<th>Diskon</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1; ?>
						<?php foreach($tamu as $list): ?>
						<?php if($list['check'] == 0){ ?>
						<tr>
							<td><?=$no++?></td>
							<td><?=$list['no_ktp']?></td>
							<td><?=$list['nama_depan']?> <?=$list['nama_belakang']?> </td>
							<td class="hidden-sm hidden-xs"><?=$list['email']?></td>
							<td class="hidden-sm hidden-xs"><?=$list['telepon']?></td>
							<td><?=$list['nama']?></td>
							<td><?php if($list['diskon']>0){ echo $list['diskon']; echo ' %';} else { echo '-'; }?></td>
							<td>
								<button class="btn btn-success btn-sm" onclick="pilihData('<?=$list["id"]?>')">Pilih</button>
							</td>
						</tr>
						<?php } endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
		function pilihData(id){
			window.location.assign("<?=site_url('admin/check/viewCreate/')?>"+id)
		}
</script>