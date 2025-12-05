@include('header')


<link rel="stylesheet" href="/packagedetails.css"/>

<div class="container_">
  <div class="box one">
    <div class="details">
      <div class="topic">Description</div>
      <p>{{$package->detail_desc}}</p>
      <div class="rating">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="far fa-star"></i>
        <i class="far fa-star"></i>
      </div>
        <div class="price-box">
          <div class="discount">${{$package->package_discount}}</div>
          <div class="price">${{$package->package_price}}</div>
        </div>
    </div>
    <div class="button1">
      <a href="/addcart/{{$package->_id}}"><button class="btn btn-outline-success">BOOK NOW</button></a>
      
    </div>
  </div>
  <div class="box two">
    <div class="image-box">
      <br>
      <br>
      <br>
      <div class="image">
          <img src="{{$package->package_pic}}" class="d-block" alt="abc">
      </div>
      <div class="info">
        <div class="name">{{$package->package_name}}</div>
        <div class="shipping">{{$package->day_night}}</div>   
      </div>
    </div>
  </div>
</div>
  
@include('footer')