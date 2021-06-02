<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Artíclos A la venta</h2>
          </div>
        </div>
        @foreach ($articulos as $articulo)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/product_01.jpg" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>En venta</h4></a>
              <h6>$ {{$articulo->precio}}</h6>
              <p>{{$articulo->descripcion}}</p>
            </div>
          </div>
        </div>
        @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>