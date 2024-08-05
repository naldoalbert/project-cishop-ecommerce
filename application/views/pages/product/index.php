<!-- Main Start-->
<main class="container">
      <?php $this->load->view('layouts/_alert') ?>
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card">
				<div class="card-header">
					<span>Produk</span>
					<a href="<?= base_url('product/create') ?>" class="btn btn-sm btn-secondary"
						>Tambah</a
					>
					<!-- Form cari/riset -->
					<div class="float-end">
						<form action="<?= base_url('product/search') ?>" method="post">
							<div class="input-group">
								<!-- form cari -->
								<input
									type="text"
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
									<a href="<?= base_url('product/reset') ?>" class="btn btn-sm btn-info">
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
								<th scope="col">Produk</th>
								<th scope="col">Kategori</th>
								<th scope="col">Harga</th>
								<th scope="col">Stock</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
                                          <?php $no = 0; foreach($content as $row): $no++ ?>
							<tr>
								<!-- kolom no -->
								<td><?= $no ?></td>
								<!-- kolom produk  -->
								<td>
									<p>
										<img src="<?= $row->image ? base_url("images/product/$row->image") : base_url("images/product/default.png") ?>" alt="" height="50">
										<?= $row->product_title ?>
									</p>
								</td>
								<!-- kolom kategori -->
								<td>
									<span class="badge text-bg-primary text-decoration-none">
										<i class="fas fa-tags"></i>
										<?= $row->category_title ?>
									</span>
								</td>
								<!-- kolom harga -->
								<td>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
								<!-- kolom status stok -->
								<td><?= $row->is_available ? 'Tersedia' : 'Kosong' ?></td>
								<!-- kolom tombol edit dan hapus -->
								<td>
									<?= form_open(base_url("product/delete/$row->id"), ['method' => 'POST']) ?>
									<?= form_hidden('id', $row->id) ?>
									<a href="<?= base_url("/product/edit/$row->id") ?>" class="btn btn-sm">
										<!-- edit -->
										<i class="fas fa-edit text-info mx-2"></i>
										<!-- delete -->
										<button
											class="btn btn-sm"
											type="submit"
											onclick="return confirm('Apakah yakin ingin menghapus?')"
										>
											<i class="fas fa-trash text-danger"></i>
										</button>
										<?= form_close() ?>
									</a>
								</td>
							</tr>
                                          <?php endforeach ?>
						</tbody>
					</table>
					<!-- pagination -->
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
