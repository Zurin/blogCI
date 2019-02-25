
    <!-- END nav -->
    
   

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <!-- <span class="subheading">Berita</span> -->
            <h2>Berita Terbaru</h2>
            <p>Berita paling baru yang kami punya.</p>
          </div>
        </div>
        <div class="row">
          <?php foreach ($berita as $key => $value): ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <!-- <a href="<?= base_url() ?>post/<?= $value->idpost ?>" class="block-20">
              </a> -->
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div>
                    <a href="#">
                      <?php
                        $date=date_create($value->date);
                        echo date_format($date,"d M Y - H:i");
                      ?>
                    </a>
                  </div>
                  <div><a href="#"><?= $value->name ?></a></div>
                  <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                </div>
                <h3 class="heading"><a href="<?= base_url() ?>post/<?= $value->idpost ?>"><?= $value->title; ?></a></h3>
                <p>
                  <?= htmlspecialchars_decode($value->content); ?>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>

 