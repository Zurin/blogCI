<!-- <div class="js-fullheight"> -->
<div class="hero-wrap">
      <div class="overlay"></div>
      <div class="circle-bg"></div>
      <div class="circle-bg-2"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="<?= base_url() ?>">Home</a></span> <span>Post</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?= $judul; ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <h6><i>Diposkan: <?= $tgl ?></i></h6>
            <img src="<?= base_url() ?>assets/uploads/<?= $cover ?>" class="img img-responsive" alt="Cover" style="width: 100%; margin-bottom: 100px;">
            
            <?= $isi; ?>
          </div> <!-- .col-md-8 -->
          

        </div>
      </div>
    </section> <!-- .section -->