<style>
    .wrapper-img-kec{
        max-width: 100%;
        max-height:400px;
    }

    .img-kec{
        width: 100%;
    }
</style>


<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-b s-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="wrapper-img-kec">
        <img src="/img/kec.jpg" class="img-kec" alt="">
        </div>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container mt-5">
    <div class="text-center">
    <h4 class="text-center">About</h4>
    <p>Anda tahu kami? kami akan beri tahu anda</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <img src="/img/kec.jpg" width="100%" alt="">

        </div>
        <div class="col-md-6">
        <p>Kecamatan Jatinegara merupakan salah satu kecamatan yang terletak di Kabupaten Tegal, Provinsi Jawa Tengah, Indonesia. Dengan jarak sekitar 22 kilometer dari pusat administratif Kabupaten Tegal ke arah tenggara, kecamatan ini memiliki luas wilayah mencapai 79,62 kilometer persegi. Pada tahun 2016, populasi penduduk Kecamatan Jatinegara mencapai 54.133 jiwa, terdiri dari 26.770 laki-laki dan 27.363 perempuan.

          Desa Jatinegara menjadi pusat administratif atau ibu kota kecamatan ini. Letaknya strategis, memberikan akses yang memudahkan penduduk dalam mengakses berbagai layanan dan fasilitas penting. Sebagai bagian dari Kabupaten Tegal, Kecamatan Jatinegara turut berkontribusi pada keragaman budaya dan perkembangan ekonomi di wilayah tersebut.</p>
        <p>
          Kecamatan Jatinegara, yang terletak di sebelah timur Kabupaten Tegal, memiliki luas wilayah mencapai 79,62 km², menyumbang sekitar 9,06% dari total luas Kabupaten Tegal. Wilayah ini sebagian besar ditandai oleh topografi perbukitan bergelombang, dengan ketinggian rata-rata mencapai 321 meter di atas permukaan air laut (Mdpl). Puncak tertinggi terletak di Perbukitan Sipencrit di wilayah bagian selatan, mencapai ketinggian 609 Mdpl.
        </p>
        </div>
    </div>

  </div>



<div class="bg-primary my-5">
    <div class="container py-5">
        <div class="text-white">
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae maxime quas, iusto omnis, error, alias eveniet vitae officiis cum laudantium quam blanditiis necessitatibus. Dolores quia, quasi atque rerum labore ipsum.</p>
    </div>
</div>
</div>

<div class="container my-4">
    <div class="text-center">
      <h4 class="">Kegiatan</h4>
      <p>Apa yang kami lakukan? kami beri tahu anda</p>
    </div>
</div>


<div class="row">

@for ($i = 0; $i < 4; $i++)

  <div class="col-md-3">
    <div class="text-center">
      <i class="fas fa-home fa-3x text-primary"></i>
      <h5><b>Desa</b></h5>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consequatur.</p>
    </div>
  </div>

  @endfor

  </div>

  <div class="text-center mt-3">
    <a href="btn btn-primary px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
  
<div class="bg-light my-5">
    <div class="container py-5">
        <div class="text-dark text-center">
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae maxime quas, iusto omnis, error, alias eveniet vitae officiis cum laudantium quam blanditiis necessitatibus. Dolores quia, quasi atque rerum labore ipsum.</p>
    </div>
</div>
</div>


<div class="container my-2">
    <div class="text-center">
      <h4 class="">Galeri</h4>
      <p>Apa yang kami lakukan? kami beri tahu anda</p>
    </div>

    <div class="row">

    @for ($i = 1; $i < 4; $i++) 

      <div class="col-md-3">
        <div class="card">
          <div class="card shadow">
          <div class="wrapper-card-blog">
          <img src="/img/waterpark.jpg" class="img-card-blog" alt="">
          </div>
          <div class="p-2">

          
          <a href="" class="text-decoration-none"><h5>Wisata Waterpark Gumantung Kecamatan Jatinegara</h5></a>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, consequatur. 
            <a href="">Selengkapnya &RightArrow; </a>
          </p>
        </div>
        </div>
      </div>
    </div>

      @endfor

      <div class="text-center mt-3">
        <a href="" class="btn btn-primary px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
</div>

<div class="bg-primary my-5">
    <div class="container py-5">
        <div class="text-white">
        <h5>Pelajari Tentang Kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae maxime quas, iusto omnis, error, alias eveniet vitae officiis cum laudantium quam blanditiis necessitatibus. Dolores quia, quasi atque rerum labore ipsum.</p>
    </div>
</div>
</div>


<div class="container my-2 mb-5">
    <div class="text-center">
      <h4 class="">Hubungi Kami</4>
      <p>Anda dapat menghubungi kami</p>

      <a href="" class="btn btn-success px-5" target="blank"><i class="fas fa-phone"></i>Hubungi kami di whatsapp</a>
    </div>
  </div>