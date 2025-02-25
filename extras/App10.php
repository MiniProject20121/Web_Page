<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <?php include('header_homeApplia.html')?>
  <body>
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "https://m.media-amazon.com/images/I/71mNBZ7eZCL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/71HXuErxdmL._SL1500_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/61HJW0ciM7L._SL1000_.jpg" alt = "Appliances image">
              <img src = "https://m.media-amazon.com/images/I/71DKop0jDlL._SL1500_.jpg" alt = "Appliances image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://m.media-amazon.com/images/I/71mNBZ7eZCL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://m.media-amazon.com/images/I/71HXuErxdmL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://m.media-amazon.com/images/I/61HJW0ciM7L._SL1000_.jpg" alt = "Appliances image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://m.media-amazon.com/images/I/71DKop0jDlL._SL1500_.jpg" alt = "Appliances image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">  Air Fryer  </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.3(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹30000.00</span></p>
            <p class = "new-price">Price: <span>15000.00 (50%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h3>About this item</h3>
            <ul>
            <li>With 4.5 L Food Basket capacity, this air-fryer serves the whole family. It makes your cooking effortless and is suitable for every occasion</li>
            <li> Compared with traditional oven, it cooks faster and ends with crispier food surface. </li>
            <li>  Compared with deep fryer, it can extract excess fat from the food, getting delicious and healthier crispy food with little to no oil </li>
            <li>  Prepare amazing meals from your cookbook, with adjustable temperature – 180 degree to 200 degree   </li>
           <li> With 1400W of power, this air fryer heats up in 2-3 minutes and cook's food faster than a conventional oven so you can save money at the same time as cutting down the calories </li>
            </ul>
            </div>
          <div class = "purchase-info">
            Quantity: 
            <input type = "number" min = "0" value = "1">
            <button type = "button" class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            <button type = "button" class = "btn">Buy Now</button>
          </div>
        </div>
      </div>
    </div>

    
    <script src="script.js"></script>
  </body>
  <?php include('footer.html');?>
</html>