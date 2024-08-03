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
						<form action="">
							<div class="input-group">
								<!-- form cari -->
								<input
									type="text"
									class="form-control form-control-sm text-center"
									placeholder="Cari"
								/>
								<div class="input-group-append">
									<!-- tombol cari -->
									<button class="btn btn-sm btn-info" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<!-- tombol hapus -->
									<a href="#" class="btn btn-sm btn-info">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
							</div>
						</form>
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
									<form action="">
										<a href="#">
											<button class="btn btn-sm">
												<i class="fas fa-edit text-info"></i>
											</button>
											<button
												class="btn btn-sm"
												type="submit"
												onclick="return confirm('Are you sure?')"
											>
												<i class="fas fa-trash text-danger"></i>
											</button>
										</a>
									</form>
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
