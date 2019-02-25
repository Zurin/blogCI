
    
    <!-- <div class="js-fullheight"> -->
    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url() ?>">Home</a></span> <span>Kaki Langit</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kaki Langit</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
        <?php foreach ($kakilangit as $key => $value): ?>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="<?= base_url() ?>post/<?= $value->id.'/'.$value->slug ?>" class="block-20" style="background-image: url('<?php echo base_url()?>assets/uploads/<?= $value->cover ?>');">
              </a>
              <div class="text p-4 d-block">
                <div class="meta mb-3">
                  <div>
                    <a href="#">
                      <?php
                        $date=date_create($value->tgl_post);
                        echo date_format($date,"d M Y - H:i");
                      ?>
                    </a>
                  </div>
                  <div><a href="#">Admin</a></div>
                  <!-- <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div> -->
                </div>
                <h3 class="heading"><a href="<?= base_url() ?>post/<?= $value->id.'/'.$value->slug ?>"><?= $value->judul; ?></a></h3>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <?= $pagination ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<script>
    $( "#kakilangit" ).addClass( "active" );
</script>