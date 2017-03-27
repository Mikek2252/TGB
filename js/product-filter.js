  $(document).ready(function () {
      $('.dropdown').on('click', function () {
          var icon = $(this).find('.fa');
          icon.toggleClass('fa-chevron-circle-down');
          icon.toggleClass('fa-chevron-circle-up');
          $(this).find('ul').toggle();
      });
      $('.dropdown li').on('click', function () {
          var newVal = $(this).attr('name');
          $(this).parent().parent().find('input').val(newVal);
          $(this).parent().parent().find('label').text($(this).text());
          getWinesByFilter();
      });

      function getWinesByFilter() {
          var country = $("#country").val();
          var colour = $("#colour").val();
          var flavour = $("#flavour").val();
          $.get("services/getWinesService.php?colour=" + colour + "&flavour=" + flavour + "&country=" + country + "&price=" + price, winesCallback);
      }

      function winesCallback(result) {
          $(".products .three-column .row").remove();
          var row;
          for (var i = 0; i < result.length; i++) {
              if (i == 0 || i % 3 == 0) {
                  row = $("<div class='row'></div>");
              }
              var wine = JSON.parse(result[i]);
              var product = $("<div class='product'></div>");
              product.append("<a href='product-page.php?wineID=" + wine.wineID + "'><img src='img/product/" + wine.img + "' /></a>");
              product.append("<a href='product-page.php?wineID=" + wine.wineID + "'><h2>" + wine.name + "</h2></a>");
              product.append("<h4>Colour: " + wine.colour + "</h2>");
              product.append("<h5>£ " + wine.costPerBottle + "</h5>");
              var column = $("<div class='column'></div>")
              column.append(product);
              $(row).append(column);
              if (i % 3 === 2 || i === result.length - 1) {
                  $(".three-column").append(row);
              }
          }
      }
  });