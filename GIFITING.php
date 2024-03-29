<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swashaa</title>
         
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* *{
    padding: 0%;
    margin: 0%;
} */

.checked {
    color: orange;
  }

  
a{
  text-decoration: none;
  color: #252525;
}

a:hover{
    color: #252525;
}


.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  background-color: tar aliceblue;
}

.button1{
    border: none;
    background-color: transparent antiquewhite;
    font-family: Arial, Helvetica, sans-serif;
    padding: 6px 8px;
    display: flex;
    justify-content: center;
    display: none;
    width: 100%;
    height: 30px;
    margin-bottom: 10px;
    
}

select{
    border: none;
    width: 100%;
}

.ui-cart {
    
    position: relative;
    width: 100%;
}
 .image{
    display: block;
    width: 100%;
    height: auto;
 }

 .overlay{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color:
      rgba(0, 0, 0, 0.75);
    overflow: hidden;
    width: 100%;
    height: 9;
    transition :.5s esse;
    background: transparent;
}

.ui-cart:hover button{
    display: block;
    
}

    </style>

</head>
<body>
    
      
    <div class="baner" onclick="window.location.href='gifiting.html';">
        <img src="https://www.swashaa.com/cdn/shop/collections/swashaa-jewellery_7b9b9725-e249-49f2-b44e-c25e72c8c865_1600x.png?v=1678445032" width="100%">
    </div>

    <h1 class="text-center p-5"> BEST SELLING</h1>

    <div class="bestselling flex-wrap d-flex ms-4 ">
       
        <div class="bestselling-sort-left    col-md-3    col-12 ">
            <select class="PRODUCT TYPE col-md-8 col-5">
                <option >PRODUCT TYPE</option>
                <option value="">Bracelets (15)</option>
                <option value="">Earrings (2)</option>
                <option value="">Mangalsutra (4)</option>
                <option value="">Necklaces (15)</option>
                <option value="">Rings (15)</option>
            </select>

            <select name="" class="PRICE  mt-md-5 col-5  ms-sm-1 col-sm-7" id="" >
                <option value=""> LOW TO HIGH </option>
                <option value=""> HIGH TO LOW </option>
            </select>

        </div>

    <!-- product details -->

        <div class="bestselling-img col-12 pt-sm-0 pt-3 col-md-9 ">

        <div class="bestselling-img-1 row d-flex col-12 ">
             <div class="image img-2 col-6 col-sm-3 ">
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10141.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button  class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="799.00" />
                    </div>
                </div>
                <p> <h3> FAIRY STARS NECKLACE </h3>
                    <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                     193 reviews 
                     <br>
                     Rs. 799.00    
                </p>
                
            </div>

            <div class="image img-3 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10154.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button  class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="899.00" />
                    </div>
                </div>
                <p> <h3> DEER GALAXY NECKLACE </h3>
                    <br>
                <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star  checked"></span>
                    <span class="fa fa-star"></span>
                    225 reviews
                    <br>
                    Rs. 899.99    
                </p>
            </div>

             <div class="image img-4 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10156.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="999.00" />
                    </div>
                </div>
                <p> <h3>  ANGEL RING NECKLACE </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    236 reviews
                    <br>
                    Rs. 999.99
                </p>
            </div>

            <div class="image img-13 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10144.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="899.00" />
                    </div>
                </div>
                <p> <h3> GLEAMING CLOVER MANGALSUTRA </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    111 reviews
                        <br>
                    Rs. 899.99
                </p>
                
            </div>

        </div>    

        <div class="bestselling-img-2 row d-flex col-12 ">    
             <div class="image img-5 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10149.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button  class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="599.00" />
                    </div>
                </div>
                <p> <h3> SHINY CLOVER NECKLACE </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    450 reviews
                        <br>
                    Rs. 599.99
                </p>
            </div>

             <div class="image img-6 col-6 col-sm-3 ">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10150.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="799.00" />
                    </div>
                </div>
                <p> <h3> JUST GOT HITCHED BRACELET </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    326 reviews
                        <br>
                    Rs. 799.99
                </p>
            </div>

             <div class="image img-7 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10151.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="899.00" />
                    </div>
                </div>


                <p> <h3> SLOANE NECKLACE </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    869 reviews
                        <br>
                    Rs. 899.99    
                </p>
            </div>

            <div class="image img-8 col-6 col-sm-3">
               
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10158.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="699.00" />
                    </div>
                </div>
                <p> <h3> LAVYA MANGALSUTRA </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    689 reviews
                        <br>
                    Rs. 699.99
                </p>
            </div>
        </div>    

        <div class="bestselling-img-3 row d-flex col-12 ">

             <div class="image img-9 col-6 col-sm-3">
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10159.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="599.00" />
                    </div>
                </div>
                <p> <h3> TATUM HEART BRACELET <h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    854 reviews
                        <br>
                    Rs. 599.99
                </p>
            </div>

             <div class="image img-10 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10160.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="499.00" />
                    </div>
                </div>
                
                <p> <h3> JORDAN NECKLACE </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    568 reviews
                        <br>
                    Rs. 499.99    
                </p>
            </div>

            <div class="image img-11 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10161.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="999.00" />
                    </div>
                </div>
                <p> <h3> ELLIOT BRACELET </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    126 reviews
                        <br>
                    Rs. 999.99    
                </p>
            </div>

             <div class="image img-12 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10162.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="1299.99" />
                    </div>
                </div>
                <p> <h3> PAYTON BRACELET </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star checked"></span>
                    658 reviews
                        <br>
                    RS. 1299.99    
                </p>
            </div>

        </div>        

        <div class="bestselling-img-4 row d-flex col-12 ">
        
            <div class="image img-14 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10205.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="1099.99" />
                    </div>
                </div>
                <p> <h3> GARLA PEARL NECKLACE </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    1025 reviews
                        <br>
                    Rs. 1099.99
                </p>
                
            </div>
            

             <div class="image img-15 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10209.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="1299.99" />
                    </div>
                </div>
                <p> <h3> VAMIKA MANGALSUTRA </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    1235 reviews
                        <br>
                    Rs. 1299.99     
                </p>
                
            </div>

             <div class="image img-16 col-12 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10197.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="1599.00" />
                    </div>
                </div>
                <p> <h3> ADDE EARRINGS </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    958 reviews
                        <br>
                    Rs. 1599.99    
                </p>
            </div>   

            <div class="image img-17 col-6 col-sm-3">
                
                <div class="ui-Cart  ">
                    <img src="img/gifiting/10222.jpg" alt="" width="100%" class="image">
                    <div class="overlay ">
                        <button class="add-Cart Cart1 button1">ADD To Cart</button>
                        <input type="hidden" value="749.00" />
                    </div>
                </div>
                <p> <h3> GISELLE EMARALD BAND RING </h3>
                        <br>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    658 reviews
                        <br>
                    Rs. 749.99    
                </p>
            </div>   

        </div>

        </div>
    </div>

 
</body>
</html>