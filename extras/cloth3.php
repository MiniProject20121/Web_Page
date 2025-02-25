<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TechMart Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <?php include('header_cloth.html');?>
  <body>
    
    <div class = "card-wrapper">
      <div class = "card">
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/a30295a5-a82d-4903-bbb3-6652184d8e811578401237203-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/349924ff-947b-4722-b6ff-cc6483d5838a1578401237157-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/61c233dc-ebb6-4918-8ca8-8a81c0f266b21578401237085-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-3.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/1ec8778c-8d20-4377-8d1d-5687f3eb770d1578401237036-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-4.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/a30295a5-a82d-4903-bbb3-6652184d8e811578401237203-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/349924ff-947b-4722-b6ff-cc6483d5838a1578401237157-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/61c233dc-ebb6-4918-8ca8-8a81c0f266b21578401237085-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-3.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/2032833/2020/1/7/1ec8778c-8d20-4377-8d1d-5687f3eb770d1578401237036-WROGN-Men-Blue-Slim-Fit-Mid-Rise-Clean-Look-Stretchable-Jean-4.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">WRGEN</h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>3.9(1.1k)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹2799.00</span></p>
            <p class = "new-price">Price: <span>₹1819.00 (35%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Men Blue Slim Fit Mid-Rise Clean Look Stretchable Jeans</li>
            <li>Blue dark wash 5-pocket mid-rise jeans, clean look with light fade, has a button and zip closure, waistband with belt loops</li>
            <h3></h3>
            <li>Size & Fit: Slim fit The model (height 6') is wearing a size 32</li>
            <h3></h3>
            <li>Material & Care: 98% cotton, 2% elastane Machine-wash</li>
            </ul>
            </div>
          <div class = "purchase-info">

          <p class = "size-info">Size: <select name="size" class="size-select" >

              <option value="select size" id="hello1">Select Size</option>
              <option value="small" >28</option>
              <option value="medium" >30</option>
              <option value="large" >32</option>
              <option value="Extra large" >34</option>

          </select></p>
          

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
