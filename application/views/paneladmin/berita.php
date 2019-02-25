
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Berita</span>
                <h3 class="page-title">Daftar Post</h3>
              </div>
            </div>
            <!-- End Page Header -->
            
            <div class="row">
            <?php foreach ($berita as $key => $value): ?>
              <div class="col-lg-4">
                <div class="card card-small card-post mb-4">
                  <div class="card-body">
                    <h5 class="card-title"><?= $value->title; ?></h5>
                    <p class="card-text text-muted"> <?= htmlspecialchars_decode($value->content); ?></p>
                  </div>
                  <div class="card-footer border-top d-flex">
                    <div class="card-post__author d-flex">
                      <div class="d-flex flex-column justify-content-center ml-3">
                        <span class="card-post__author-name"><?= $value->name ?></span>
                        <small class="text-muted">
                        <?php
                          $date=date_create($value->date);
                          echo date_format($date,"d M Y - H:i");
                        ?>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
            </div>
            
          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
          </footer>
        </main>
        <script>
              $('#berita').addClass("active")
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/extras.1.0.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/shards-dashboards.1.0.0.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/app/app-blog-overview.1.0.0.js"></script>