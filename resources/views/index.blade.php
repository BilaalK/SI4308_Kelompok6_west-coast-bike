@extends('layouts.default')
@section('content')

    <section class='carousel'>
      <h2 class='text-center mt-5 mb-3'>Top Seller Custom Bike</h2>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" align='center'>
          <div class=" carousel-item active">
              <img style="width: 100%; height: 700px;" src="https://images.unsplash.com/photo-1485965120184-e220f721d03e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="d-block w-100 mx-auto" alt="...">
          </div>
          <div class=" carousel-item">
            <img style="width: 100%; height: 700px; " src="https://images.unsplash.com/photo-1553069790-b8df5514a6e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80" class="d-block img-fluid w-100" alt="...">
          </div>
          <div class=" carousel-item">
            <img style="width: 100%; height: 700px;" src="https://images.unsplash.com/photo-1612629371208-0ae8f1b62824?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class='bicycle-category mb-5'>
      <div class="jumbotron m-3 mt-5">
        <h2 class="display-4 text-center mb-4">Bicycle Categories</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1610058459202-9869bff0979c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1965&q=80" height="600px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">For Men</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis enim doloremque a aspernatur sequi qui?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="#" class="btn btn-primary">Choose</a></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1604344929197-c89e3ef3c25b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80" height="600px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">For Women</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe fugiat at magni pariatur debitis! Tempore!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="#" class="btn btn-primary">Choose</a></small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1621194856163-057388f57ba6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1959&q=80" height="600px" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">For Kids</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita inventore nulla aliquam repudiandae tenetur minus?</p>
              </div>
              <div class="card-footer">
                <small class="text-muted"><a href="#" class="btn btn-primary">Choose</a></small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class='product mt-5 mb-5'>
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img class='rounded' src="https://images.unsplash.com/photo-1497515098781-e965764ab601?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2021&q=80" width="600px" alt="">
          </div>
          <div class="col-6" style="">
            <h3 class='display-4'>Product Title</h3>
            <div class="border border-dark p-2 mt-4">
              <h4 class='display-6'>Product Specification</h4>
              <h4 class='display-7'>Specification 1</h4>
              <h4 class='display-7'>Specification 2</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class='advantages mt-5 mb-5'>
      <div class="jumbotron m-3 mt-5">
        <h2 class='display-5 text-center' style="margin-bottom: 65px;">Our Advantages</h2>
        <div class="container" style="">
          <div class="row row-cols-4" style="margin-left: 180px;">
            <div class="col" style="">
              <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>
            </div>
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
              </svg>
            </div>
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
              </svg>
            </div>
            <div class="col">
              <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-hand-thumbs-up" viewBox="0 0 16 16">
                <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class='features mt-5 mb-5'>
      <div class="container">
        <div class="row">
          <div class="col-6" style="">
            <h3 class='display-4 text-end'>Bicycle Features</h3>
            <div class="mt-4">
              <h4 class='fs-4 text-end'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo vel nostrum repellat deleniti, nemo minus reiciendis officiis cupiditate nulla? A!</h4>
            </div>
          </div>
          <div class="col-6">
            <img class='rounded' src="https://images.unsplash.com/reserve/2jEqzi01Ru2HBhGLTBgB_MG_5236.jpg?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" width="600px" alt="">
          </div>
        </div>
      </div>
    </section>

    <hr class="mt-5 mb-5">

    <section class='potm mt-5 mb-5' style="margin-top: 50px">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img class='rounded' src="https://images.unsplash.com/photo-1586222515300-fa1992155ece?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80" width="600px" alt="">
          </div>
          <div class="col-6" style="">
            <h3 class='display-4'>The Cannondale</h3>
            <h3 class='display-8'>$ 99.99</h3>
            <div class="mt-4">
              <p class='fs-4'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, at perferendis. Ipsum nulla cumque nisi iusto illum accusamus aspernatur eaque?</p>
            </div>
            <button type="button" class="btn btn-primary">Add to Cart</button>
          </div>
        </div>
      </div>
    </section>

@endsection