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
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/acc0ca57-83ee-4741-8ae9-eb286b3aad5f1634605695597GANTWomenGreenLonglinePaddedJacket1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/7c108ed5-4168-4a3d-b6eb-b81113a66a241634605696028GANTWomenGreenLonglinePaddedJacket2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/3b216699-0ea4-41f4-b1d0-4ff53c4b7dff1634605695769GANTWomenGreenLonglinePaddedJacket3.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/46fa5afe-1c0c-4795-a7fc-91b8160c80fe1634605695900GANTWomenGreenLonglinePaddedJacket4.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/acc0ca57-83ee-4741-8ae9-eb286b3aad5f1634605695597GANTWomenGreenLonglinePaddedJacket1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/7c108ed5-4168-4a3d-b6eb-b81113a66a241634605696028GANTWomenGreenLonglinePaddedJacket2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/3b216699-0ea4-41f4-b1d0-4ff53c4b7dff1634605695769GANTWomenGreenLonglinePaddedJacket3.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/15847566/2021/10/19/46fa5afe-1c0c-4795-a7fc-91b8160c80fe1634605695900GANTWomenGreenLonglinePaddedJacket4.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">GANT
          </h2>
          <div class = "product-rating">
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star"></i>
            <i class = "fa fa-star-half-alt"></i>
            <span>3.8(3.4k)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">M.R.P.: <span>₹2100.00</span></p>
            <p class = "new-price">Price: <span>₹1199.00 (49%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Women Green Padded Jacket</li>
            <li>Green solid padded jacket with shoulder tabs, has a mock collar, 
              2 pockets ,has a snap button closure, long sleeves, curved hemline, polyester lining</li>
            <li>Size & Fit: 
              The model (height 5'8) is wearing a size S</li>
            <li>Material & Care: 
              Polyester 100%
              Machine wash</li>
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
