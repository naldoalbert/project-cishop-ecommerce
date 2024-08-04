<!-- Main Start-->
<main class="container">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">
					<span>Kategori</span>
					<a href="<?= base_url('category/create') ?>" class="btn btn-sm btn-secondary"
						>Tambah</a
					>
					<!-- Form cari/riset -->
					<div class="float-end">
						<?= form_open(base_url('category/search'), ['method' => 'POST']) ?>
							<div class="input-group">
								<!-- form cari -->
								<input
									type="text"
									name="keyword"
									class="form-control form-control-sm text-center"
									placeholder="Cari"
									value="<?= $this->session->userdata('keyword') ?>"
								/>
								<div class="input-group-append">
									<!-- tombol cari -->
									<button class="btn btn-sm btn-info" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<!-- tombol hapus -->
									<a href="<?= base_url('category/reset') ?>" class="btn btn-sm btn-info">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
							</div>
						<?= form_close() ?>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Slug</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0; foreach ($content as $row) : $no++;?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $row->title ?></td>
								<td><?= $row->slug ?></td>
								<td>
									<?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>
									<?= form_hidden('id', $row->id) ?>
										<!-- tombol edit -->
										<a href="<?= base_url("category/edit/$row->id") ?>" class="btn btn-sm">
											<i class="fas fa-edit text-info"></i>
										</a>
										<!-- tombol hapus -->
										<button
											class="btn btn-sm"
											type="submit"
											onclick="return confirm('Apakah anda yakin ingin menghapus?')"
										>
											<i class="fas fa-trash text-danger"></i>
										</button>
									<?= form_close() ?>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<nav aria-label="Page navigation example">
						<?= $pagination ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</main>
<!-- Main End-->
<!-- ============================= -->
