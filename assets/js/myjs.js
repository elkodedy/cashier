
          // var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
          // var idn = 0;
        
          // document.getELementById("add_list").addEventListener("click", add_cart);
           $('#add_list').click(function(){
            add_cart();
          });

          function add_cart(){
          var i = $(".cart-row").length + 1;
          var addcart = "";
              addcart += "<tr id='cart-row"+i+"' class='cart-row'>";
                addcart += '<td><span class="cart-num">'+i+'.</span></td>';
                addcart += '<td class="autocomplete myInput"><input autocomplete="off" id="autoInput" type="text" name="medicine_code[]" width="100%" class="form-control product-input autoInput" placeholder="Masukkan Kode/Nama Produk" value="" required></td>';
                addcart += '<td><input autocomplete="off" type="text" name="medicine_name[]" class="form-control" placeholder="" value=""></td>';
                addcart += '<td><input autocomplete="off" type="number" name="single_purchase_price[]" class="form-control" placeholder="" value="" readonly></td>';
                addcart += '<td><input autocomplete="off" type="number" name="purchase_amount[]" class="form-control" placeholder="" value=""></td>';
                addcart += '<td><input autocomplete="off" type="number" name="price[]" class="form-control" placeholder="" value="" readonly></td>';
                addcart += '<td><button class="btn btn-danger" type="button" onclick="delete_cart('+i+')"><abbr title="Hapus"><i class="fa fa-trash"></i></abbr></button></td>';
              addcart += "<tr>";
            // idn++;
            $('.purchase-cart').append(addcart);
            // $('.cart-num')[(i)].innerHTML += ((i+1)+'.');
            // $('#myInput').id = ('myInput'+idn);
            $('#transaction-table tbody tr').each(function(){
              $(this).find('td:nth-child(2) input').focus();
            });
            for (var i = 0 ; i < $(".autoInput").length; i++) {
              // comment[i].addEventListener('click' , showComment , false ) ; 
              autocomplete($(".autoInput")[i], medicine_list);
            }
          }

          function delete_cart(i){
            $('#cart-row'+i+'').remove();

            var number = 1;
            $('.cart-num').each(function(i, obj) {
              obj.innerHTML = (number+".");
              number++;
            });
          }

        function autocomplete(inp, arr) {
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
                }
              }
            }
            document.addEventListener("click", function (e) {
                closeAllLists(e.target);
            });
          }
  
          /*An array containing all the country names in the world:*/
          autocomplete($(".autoInput")[0], medicine_list);
  
          /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/