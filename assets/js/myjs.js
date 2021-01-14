          //Global Variabel Declasre

          //Event
          autocomplete($(".auto-input")[0], medicine_code, 0);
          // autocomplete($(".medicine-name")[0], medicine_name, 0);

          $('#add_list').click(function(){add_cart();});
          

        //function
        function add_cart(){
          var i = $(".cart-row").length + 1;
          var addcart = "";
              addcart += "<tr class='cart-row'>";
                addcart += '<td><span class="cart-num">'+i+'.</span></td>';
                addcart += '<td class="autocomplete myInput cart cart-medicine_code"><input autocomplete="off" type="text" name="medicine_code[]" width="100%" class="form-control auto-input" placeholder="Masukkan Kode/Nama Produk" value="" required onkeyup="add_row_list($(this).parent().parent().index())"></td>';
                addcart += '<td class="autocomplete myInput cart cart-medicine_name"><input autocomplete="off" type="text" name="medicine_name[]" class="form-control medicine-name" placeholder="" value="" readonly></td>';
                addcart += '<td class="cart cart-single_purchase_price"><input autocomplete="off" type="number" name="single_purchase_price[]" class="form-control" placeholder="" value=""></td>';
                addcart += '<td class="cart cart-purchase_amount"><input autocomplete="off" type="number" name="purchase_amount[]" class="form-control" placeholder="" value=""></td>';
                addcart += '<td class="cart cart-button"><input autocomplete="off" type="number" name="price[]" class="form-control" placeholder="" value="" readonly></td>';
                addcart += '<td><button class="btn btn-danger" type="button" onclick="delete_cart($(this).parent().parent().index())"><abbr title="Hapus"><i class="fa fa-trash"></i></abbr></button></td>';
              addcart += "</tr>";
          $('.purchase-cart').append(addcart);
          for (var j = 0 ; j < $(".medicine-name").length; j++) {
            autocomplete($(".auto-input")[j], medicine_code,j);
          }
            // autocomplete($(".medicine-name")[i], medicine_name, i);
        }

        function delete_cart(i){
          // console.log(i);
          $('.cart-row')[i].remove();

          var number = 1;
          $('.cart-num').each(function(i, obj) {
            obj.innerHTML = (number+".");
            number++;
          });
          
          for (var j = 0 ; j < $(".medicine-name").length; j++) {
            autocomplete($(".auto-input")[j], medicine_code,j);
          }
        }

        function autocomplete(inp, arr, num) {
          var currentFocus;
          inp.addEventListener("input", function(e) {
              var a, b, i, val = this.value;
              closeAllLists();
              if (!val) { return false;}
              currentFocus = -1;
              a = document.createElement("DIV");
              a.setAttribute("id", this.id + "autocomplete-list");
              a.setAttribute("class", "autocomplete-items");
              this.parentNode.appendChild(a);
              for (i = 0; i < arr.length; i++) {
                if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                  b = document.createElement("DIV");
                  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                  b.innerHTML += arr[i].substr(val.length);
                  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                  b.addEventListener("click", function(e) {
                      inp.value = this.getElementsByTagName("input")[0].value;
                      closeAllLists();
                  });
                  a.appendChild(b);
                }
              }
          });
          inp.addEventListener("keydown", function(e) {
              var x = document.getElementById(this.id + "autocomplete-list");
              if (x) x = x.getElementsByTagName("div");
              if (e.keyCode == 40) {
                currentFocus++;
                addActive(x);
              } else if (e.keyCode == 38) {
                currentFocus--;
                addActive(x);
              } else if (e.keyCode == 13) {
                e.preventDefault();
                if (currentFocus > -1) {
                  if (x) x[currentFocus].click();
                }
              }
          });
          function addActive(x) {
            if (!x) return false;
            removeActive(x);
            if (currentFocus >= x.length) currentFocus = 0;
            if (currentFocus < 0) currentFocus = (x.length - 1);
            x[currentFocus].classList.add("autocomplete-active");
          }
          function removeActive(x) {
            for (var i = 0; i < x.length; i++) {
              x[i].classList.remove("autocomplete-active");
            }
          }
          function closeAllLists(elmnt) {
            var x = document.getElementsByClassName("autocomplete-items");
            for (var i = 0; i < x.length; i++) {
              if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
                add_row_list(num);
              }
            }
          }
          document.addEventListener("click", function (e) {
              closeAllLists(e.target);
          });
        }
