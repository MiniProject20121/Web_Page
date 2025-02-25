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
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/982b4a0a-96f7-4871-8fce-1f2b83c350261602402688515SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat1.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/3804537a-a60c-40c1-93eb-c17b5a57a4fa1602402688589SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat2.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/08e85782-aff4-40db-8143-3c93c0215bf71602402688656SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat3.jpg" alt = "cloth image">
              <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/d1640a0d-e5c0-4680-9401-f334e45fc0eb1602402688720SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat4.jpg" alt = "cloth image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/982b4a0a-96f7-4871-8fce-1f2b83c350261602402688515SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat1.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/3804537a-a60c-40c1-93eb-c17b5a57a4fa1602402688589SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat2.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/08e85782-aff4-40db-8143-3c93c0215bf71602402688656SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat3.jpg" alt = "cloth image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "https://assets.myntassets.com/h_1440,q_90,w_1080/v1/assets/images/12564560/2020/10/11/d1640a0d-e5c0-4680-9401-f334e45fc0eb1602402688720SareemallSeaGreenPolyChiffonSolidEthnicPartywearSareewithMat4.jpg" alt = "cloth image">
              </a>
            </div>
          </div>
        </div>
        <div class = "product-content">
          <h2 class = "product-title">Saree mall
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
            <p class = "last-price">M.R.P.: <span>₹1999.00</span></p>
            <p class = "new-price">Price: <span>₹599.00 (70%)</span></p>
          </div>
          <div class="product-detail">
            <hr>
            <h2>About this</h2>
            <ul>
            <li>Blue & Golden Quirky Print Saree</li>
            <li>Blue and golden printed saree and has a taping border
              The model is wearing a stitched version of the blouse, the saree comes with an unstitched blouse piece</li>
            <li>Size & Fit: Length: 5.5 metres plus 0.8 metre (80 cm) blouse piece Width: 1 metre (approx)</li>
            <li>Material & Care: 
              Saree fabric: Poly chiffon
              Blouse fabric: Silk blend
              Hand-wash</li>
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
