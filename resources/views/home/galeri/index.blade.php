<div class="container my-2">
    <div class="text-center">
      <h4 class="">Galeri</h4>
      <p>Apa yang kami lakukan? kami beri tahu anda</p>
    </div>

    <div class="row">

    @for ($i = 1; $i <=12 ; $i++) 

      <div class="col-md-3 my-3">
        <div class="card">
          <div class="card shadow">
          <div class="wrapper-card-galeri">
          <img src="/img/waterpark.jpg" class="img-card-galeri" alt="">
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