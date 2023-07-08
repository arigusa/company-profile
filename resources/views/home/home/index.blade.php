<style>
    .wrapper-img-ho{
        max-width: 500%;
        max-height: 100%;
    }
    .ho{
        width: 100%;
    }
</style>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="wrapper-img-ho"><img src="/img/ho.jpg" class="ho" alt=""></div>
       
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
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


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    
    <div class="container mt-5">
        <h4 class="text-center">ABOUT</h4>
        <p class="text-center">siapa kami?kami adalah</p>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <img src="/img/ho.jpg" width="100%" alt="">
        </div>
            <div class="col-md-6">
        <p >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum blanditiis quis fugit esse nemo distinctio, nisi voluptas, reprehenderit perspiciatis mollitia ab quibusdam tenetur. Vitae optio, quos quidem fuga nisi reiciendis architecto qui, est consequuntur assumenda laborum sunt amet nostrum minima porro numquam culpa, saepe exercitationem! Pariatur veritatis vitae deleniti, omnis repudiandae, illum rerum magnam quam laboriosam aspernatur corrupti. Laborum enim dolorem unde eaque doloribus quis delectus. Laudantium fuga sunt sequi corporis molestias recusandae magnam omnis aperiam? Temporibus perspiciatis at quod distinctio animi porro mollitia, ipsam ut rerum quis doloribus enim accusamus praesentium nihil recusandae, id voluptatem iste molestiae iure? Explicabo!</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eveniet totam nulla odio nobis ipsum labore, eaque aut. Ea laboriosam corrupti sit dolore debitis assumenda tenetur at, modi perferendis eveniet mollitia accusantium omnis, facere rerum animi magnam cum. Et aspernatur ut eum nulla, eaque doloremque consectetur! Quod dicta veniam veritatis!</p>
        </div>
    </div>
    </div>

<div class="bg-success my-5">
    <div class="container py-2">
        <div class="text-black">
            <h5>Pelajari tentang kami</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, praesentium culpa vitae quam ratione deleniti ex tenetur dignissimos, iure neque aliquid ipsam facere expedita laborum quae natus quos, ipsa rerum?</p>
        </div>
    </div>
    </div>

    <div class="container my-4">
        <h4 class="text-center">Services</h4>
        <p class="text-center">apa yang kami lakukan?</p>
      </div>
      <div class="row">

    @for ($i = 0; $i < 4; $i++)
        

        <div class="col-md-3">
        <div class="text-center">
            <i class="fas fa-home fa-1x text-success"></i><h5><b>makan makan</b></h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, quo.</p>
        
    </div>
</div>
    @endfor


</div>

<div class="text-center mt-3">
    <a href="" class="btn btn-success px-5">Selengkapnya <i class="fas fa-arrow-right"></i></a>
</div>

    
    <div class="bg-light my-5">
      <div class="container py-2">
          <div class="text-black text-center">
              <h5>Pelajari tentang kami</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, praesentium culpa vitae quam ratione deleniti ex tenetur dignissimos, iure neque aliquid ipsam facere expedita laborum quae natus quos, ipsa rerum?</p>
          </div>
      </div>
      </div>

<style>
 
</style>

      <div class="container my-2">
        <h4 class="text-center">Blog</h4>
        <p class="text-center">apa yang anda ingin lakukan hari ini?</p>
      </div>

      <div class="row">

        @for ($i = 1; $i <= 4; $i++)
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

      <div class="bg-success my-5">
        <div class="container py-2">
          <div class="text-black">
            <h5>Pelajari tentang kami</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, praesentium culpa vitae quam ratione deleniti ex tenetur dignissimos, iure neque aliquid ipsam facere expedita laborum quae natus quos, ipsa rerum?</p>
          </div>
        </div>
      </div>
      
      <div class="container my-2 mb-5">
        <h4 class="text-center">Hubungi Kami</h4>
        <p class="text-center">silahkan bertanya ke kami</p>
        <div class="text-center"> <!-- Tambahkan kelas text-center di sini -->
          <a href="" class="btn btn-success px-5" target="blank"><i class="fas fa-phone"></i> Hubungi kami di WhatsApp</a>
        </div>
      </div>
      