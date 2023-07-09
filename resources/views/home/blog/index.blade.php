<div class="container my-2">
    <div class="text-center">
      <h4 class="text-center">Blog</h4>
      <p class="text-center">apa yang anda ingin lakukan hari ini?</p>
    </div>
    <div class="row">
    @for ($i = 1; $i <= 12; $i++)
    <div class="col-md-3">
      <div class="card shadow-sm">
        <div class="wrapper-card-blog">
        <img src="/img/hoo.jpg" class="img-card-blog" alt="">
      </div>
      <div class="p-3">
        <a href="" class="text-decoration-none">
          <h5> Madang</h5>
        </a>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, corporis.
            <a href="">Selengkapnya &RightArrow;</a>
          </p>
      </div>
      </div>
    </div>
    @endfor
    <div class="text-center mt-3">
      <a href="" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
  </div>
</div>