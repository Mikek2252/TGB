<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>wine page</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Montserrat" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/structure.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
</head>
  <body>
  
    <!-- Show products -->
    
    <section class="filter">
      <div class="container">
        <ul>
          <li>
            <h1>Shop by</h1>
          </li><li>
            <div class="dropdown">
              <h4>Color</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="colour" type="text" />
              <ul>
                <li name="red">Red</li>
                <li name="white">White</li>
                <li name="rose">Rose</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li><li>
            <div class="dropdown">
              <h4>Type</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="colour" type="text" />
              <ul>
                <li name="dry">Dry</li>
                <li name="sweet">Sweet</li>
                <li name="light">Light</li>
                <li name="fullbody">Full bodied</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li><li>
            <div class="dropdown">
              <h4>Country of Origin</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="country" type="text" />
              <ul>
                <li name="France">France</li>
                <li name="Italy">Italy</li>
                <li name="Spain">Spain</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li><li>
            <div class="dropdown">
              <h4>Price</h4>
              <label>all</label>
              <span class="fa fa-chevron-circle-down"></span>
              <input id="price" type="text" />
              <ul>
                <li name="1">&lt; £5</li>
                <li name="2">£5 - £10</li>
                <li name="3">£10 - £20</li>
                <li name="4">£20+</li>
                <li name="all">All</li>
              </ul>
            </div>
          </li>
        </ul>
        
        
      </div>
    </section>
    
    <script>
      $( document ).ready(function() {
        $('.dropdown').on('click', function() {
          var icon = $(this).find('.fa');
          icon.toggleClass('fa-chevron-circle-down');
          icon.toggleClass('fa-chevron-circle-up');
          $(this).find('ul').toggle();
        });
        $('.dropdown li').on('click', function() {
          console.log($(this).parent().parent());
          var newVal = $(this).attr('name');
          $(this).parent().parent().find('input').val(newVal);
          $(this).parent().parent().find('label').text($(this).text());
        })
      });
    </script>
    
    <section class="products">
      <div class="container">
        <div class="one-column">
          <div class="column">
            <h1>All Products</h1>
          </div>
        </div>
        <div class="three-column">
          <div class="column">
            <div class="product">
              <img src="img/product_temp.jpg" />
              <h2>Even &amp; Odd</h2>
              <h5>$145.99</h5>
            </div>
          </div>
          <div class="column">
          
          </div>
          <div class="column">
          
          </div>
        </div>
      </div>
    </section>
    
    <!-- Show products -->
    
    
    
  </body>
</html>