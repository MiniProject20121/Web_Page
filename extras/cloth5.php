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
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/d2d73d04-f37d-47d7-a585-881e520a038f1579909670484-1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/6bf5324b-fdfa-4c6e-8813-efde1d1dc92e1579909670528-2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/3d738696-5bbd-4214-8a16-3b7ac0d1b8ae1579909670672-5.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/c0c27dfd-03ce-4edb-84ec-ac70dd44f2fb1579909670630-4.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/d2d73d04-f37d-47d7-a585-881e520a038f1579909670484-1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/6bf5324b-fdfa-4c6e-8813-efde1d1dc92e1579909670528-2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/3d738696-5bbd-4214-8a16-3b7ac0d1b8ae1579909670672-5.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/productimage/2020/1/25/c0c27dfd-03ce-4edb-84ec-ac70dd44f2fb1579909670630-4.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">SG RAJASAHAB
          </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>4.1(20)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹8999.00</span></p>
            <p class = "new-price">Price: <span>₹3059.00 (66%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Men Black & Gold-Toned Solid Silk Sherwani Set</li>
            <li>Black and gold-toned solid sherwani set
              Black solid sherwani, has a mandarin collar, stylised wrap-over front with button closures, long sleeves, asymmetric hem and multiple slits and attached lining
              Comes with a pocket square and brooch
              Gold-toned solid trousers, has a partially elasticated waistband with belt loops, button closure, zip fly and two pockets</li>
            <li>Slim fit: The model (height 6') is wearing a size M</li>
            <li>Material & Care: Polyester, Dry Clean</li>
            </ul>
            </div>
          <div class = "purchase-info">

          <p class = "size-info">Size: <select name="size" class="size-select" >

              <option value="select size" id="hello1">Select Size</option>
              <option value="small" >Small (S)</option>
              <option value="medium" >Medium (M)</option>
              <option value="large" >Large (L)</option>
              <option value="Extra large" >Extra Large (XL)</option>

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
