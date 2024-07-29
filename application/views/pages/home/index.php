    <!-- Main -->
    <main role="main" class="container">
      <?php $this->load->view('layouts/_alert') ?>
      <div class="row">
        <!-- Kiri (Komponen mengurutkan & menampilkan Data ) -->
        <div class="col-md-9">
          <!-- kolom mengurutkan produk -->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  Kategori: <strong>Semua Kategori</strong>
                  <span class="float-sm-end">
                    <!-- class badge badge-primary sudah tidak ada pada bootstrap 5.3 hanya di 4.3 -->
                    Urutkan Harga:
                    <a
                      href="#"
                      class="badge text-bg-primary text-decoration-none"
                      >Termurah</a
                    >
                    |
                    <a
                      href="#"
                      class="badge text-bg-primary text-decoration-none"
                      >Termahal</a
                    >
                  </span>
                </div>
              </div>
            </div>
          </div>
          <!-- kolom menampilkan produk -->
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-3">
                <!-- Card img -->
                <img
                  src="http://placehold.co/100x70"
                  alt=""
                  class="card-img-top"
                />
                <!-- Isi Card -->
                <div class="card-body">
                  <h5 class="card-tittle">Product Title</h5>
                  <p class="card-text"><strong>Rp100.000,-</strong></p>
                  <p class="card-text">
                    Some quick example to build product card.
                  </p>
                  <a
                    href="#"
                    class="badge text-bg-primary text-decoration-none"
                  >
                    <i class="fas fa-tags"></i>
                    Category
                  </a>
                </div>
                <div class="card-footer">
                  <form action="">
                    <div class="input-group">
                      <input type="number" class="form-control" />
                      <div class="input-group-append">
                        <button class="btn btn-primary">Add to Cart</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3">
                <!-- Card img -->
                <img
                  src="http://placehold.co/100x70"
                  alt=""
                  class="card-img-top"
                />
                <!-- Isi Card -->
                <div class="card-body">
                  <h5 class="card-tittle">Product Title</h5>
                  <p class="card-text"><strong>Rp100.000,-</strong></p>
                  <p class="card-text">
                    Some quick example to build product card.
                  </p>
                  <a
                    href="#"
                    class="badge text-bg-primary text-decoration-none"
                  >
                    <i class="fas fa-tags"></i>
                    Category
                  </a>
                </div>
                <div class="card-footer">
                  <form action="">
                    <div class="input-group">
                      <input type="number" class="form-control" />
                      <div class="input-group-append">
                        <button class="btn btn-primary">Add to Cart</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3">
                <!-- Card img -->
                <img
                  src="http://placehold.co/100x70"
                  alt=""
                  class="card-img-top"
                />
                <!-- Isi Card -->
                <div class="card-body">
                  <h5 class="card-tittle">Product Title</h5>
                  <p class="card-text"><strong>Rp100.000,-</strong></p>
                  <p class="card-text">
                    Some quick example to build product card.
                  </p>
                  <a
                    href="#"
                    class="badge text-bg-primary text-decoration-none"
                  >
                    <i class="fas fa-tags"></i>
                    Category
                  </a>
                </div>
                <div class="card-footer">
                  <form action="">
                    <div class="input-group">
                      <input type="number" class="form-control" />
                      <div class="input-group-append">
                        <button class="btn btn-primary">Add to Cart</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3">
                <!-- Card img -->
                <img
                  src="http://placehold.co/100x70"
                  alt=""
                  class="card-img-top"
                />
                <!-- Isi Card -->
                <div class="card-body">
                  <h5 class="card-tittle">Product Title</h5>
                  <p class="card-text"><strong>Rp100.000,-</strong></p>
                  <p class="card-text">
                    Some quick example to build product card.
                  </p>
                  <a
                    href="#"
                    class="badge text-bg-primary text-decoration-none"
                  >
                    <i class="fas fa-tags"></i>
                    Category
                  </a>
                </div>
                <div class="card-footer">
                  <form action="">
                    <div class="input-group">
                      <input type="number" class="form-control" />
                      <div class="input-group-append">
                        <button class="btn btn-primary">Add to Cart</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- tempat halaman -->
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>

        <!-- Kanan (Komponen Pencarian dan kategory) -->
        <div class="col-md-3">
          <!-- kolom pencarian -->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-header">Pencarian</div>
                <div class="card-body">
                  <!-- form input pencarian -->
                  <form action="">
                    <div class="input-group">
                      <!-- input text -->
                      <input type="text" class="form-control" />
                      <!-- tombol cari -->
                      <div class="input-group-append">
                        <button class="btn btn-primary">Cari</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- kolom kategori -->
          <div class="row">
            <div class="col-md-12">
              <div class="card mb-3">
                <!-- judul -->
                <div class="card-header">Kategori</div>
                <!-- list kategory -->
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Semua Kategori</li>
                  <li class="list-group-item">Kategori 1</li>
                  <li class="list-group-item">Kategori 2</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Main End -->
    <!-- ============================= -->