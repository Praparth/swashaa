<?php  
 include("header.php") ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>swashaa</title>
         
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh61eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link href="page.css" rel="stylesheet">

</head>
<body>
    
    <div class="baner" onclick="window.location.href='gifiting.html';">
        <img src="https://www.swashaa.com/cdn/shop/collections/Untitled_design_1600x.png?v=1688721661" width="100%">
    </div>

    <h1 class="text-center p-5"> FOR HIM </h1>

    <div class="bestselling flex-wrap d-flex ms-4 ">
       
        <!-- <div class="bestselling-sort-left    col-md-3    col-12 ">
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

        </div> -->

        <div class="bestselling-img col-12 pt-sm-0 pt-3 col-md-12 ">

        <div class="bestselling-img-1 row d-flex col-12 ">
            <div class="image img-2 col-6 col-sm-3  text-decoration-none">
                <form action="manage_cart.php" METHOD="POST">
                    <div class="ui-Cart  ">
                        <img src="https://www.swashaa.com/cdn/shop/products/BenjomiaSilver01_120x.jpg?v=1687939022" alt="" width="100%" class="image">
                        <div class="overlay ">
                            <button type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" name="Item_Name" value="BENJOMIA MEN'S BRACELET"  />
                            <input type="hidden" name="Price" value="799.99"  />
                        </div>
                    </div>
                    <p> BENJOMIA MEN'S BRACELET 
                        <br>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        193 reviews 
                        <br>
                        <span class="cart-text"> Rs. 799.00  </span>   
                    </p>
                    
                </form>    
            </div>

             <div class="image  img-3 col-6 col-sm-3">
                <form action="manage_cart.php" METHOD="POST">
                    <div class="ui-Cart  ">
                        <img src="https://www.swashaa.com/cdn/shop/products/EthanCollection01_360x.jpg?v=1684927384" alt="" width="100%" class="image">
                        <div class="overlay ">
                            <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="IAN MEN'S BRACELET" name="Item_Name"/>
                            <input type="hidden" value="899.99" name="Price"/>
                        </div>
                    </div>
                    <p>  IAN MEN'S BRACELET 
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
                </form>        
            </div>

             <div class="image img-4 col-6 col-sm-3">
                <form action="manage_cart.php" METHOD="POST">
                    <div class="ui-Cart  ">
                        <img src="https://www.swashaa.com/cdn/shop/files/IPV05661_360x.jpg?v=1687938020" alt="" width="100%" class="image">
                        <div class="overlay ">
                            <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="LEO MEN'S BRACELET" name="Item_Name" />
                            <input type="hidden" value="999.99" name="Price" />
                        </div>
                    </div>
                    <p>  LEO MEN'S BRACELET 
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
                </form>        
            </div>

            <div class="image img-13 col-6 col-sm-3">
                <form action="manage_cart.php" METHOD="POST">
                    <div class="ui-Cart  ">
                        <img src="https://www.swashaa.com/cdn/shop/files/JAXCollection01_360x.jpg?v=1688037991" alt="" width="100%" class="image">
                        <div class="overlay ">
                            <button  type="submit" name="Add_To_Cart" name class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="JAX MEN'S BRACELET " name="Item_Name"/>
                            <input type="hidden" value="899.99" name="Price"/>
                        </div>
                    </div>
                    <p>  JAX MEN'S BRACELET 
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
                </form>        
            </div>

        </div>    

        <div class="bestselling-img-2 row d-flex col-12 ">    
             <div class="image img-5 col-6 col-sm-3">
             <form action="manage_cart.php" METHOD="POST"> 
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/products/RoganChain04_2_360x.jpg?v=1676022066" alt="" width="100%" class="image">
                    <div class="overlay ">
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="ROGAN CHAIN" name="Item_Name"/>
                            <input type="hidden" value="599.99" name="Price"/>
                    </div>
                </div>
                <p> ROGAN CHAIN
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
            </form>
            </div>

             <div class="image img-6 col-6 col-sm-3 ">
             <form action="manage_cart.php" METHOD="POST">
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/products/MensChains01-1_360x.jpg?v=1675672477" alt="" width="100%" class="image">
                    <div class="overlay ">
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="BIEBER CHAIN" name="Item_Name"/>
                            <input type="hidden" value="799.99" name="Price"/>
                    </div>
                </div>
                <p> BIEBER CHAIN
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
            </form>
            </div>

             <div class="image img-7 col-6 col-sm-3">
             <form action="manage_cart.php" METHOD="POST">
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/products/EasterChain06_360x.jpg?v=1678350707" alt="" width="100%" class="image">
                    <div class="overlay ">    
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="ESTER CHAIN" name="Item_Name"/>
                            <input type="hidden" value="899.99" name="Price"/>
                    </div>
                </div>


                <p> ESTER CHAIN
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
</form>
            </div>

            <div class="img-8 col-6 col-sm-3">
            <form action="manage_cart.php" METHOD="POST">
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/products/CarronChain01_360x.jpg?v=1675937856" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="CARRON CHAIN" name="Item_Name"/>
                            <input type="hidden" value="699.99" name="Price"/>
                    </div>
                </div>
                <p> CARRON CHAIN
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
</from>
            </div>
        </div>    

        <div class="bestselling-img-3 row d-flex col-12 ">
            <div class="img-9 col-6 col-sm-3">
                 <form action="manage_cart.php" METHOD="POST">
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/DamonMen_sLeatherBracelet20-06-202302-1_360x.jpg?v=1687845324" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="DAMON MEN'S LEATHER BRACELET" name="Item_Name"/>
                            <input type="hidden" value="599.99" name="Price"/>
                    </div>
                </div>
                <p>DAMON MEN'S LEATHER BRACELET
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
</form> 
            </div>

             <div class="img-10 col-6 col-sm-3">
             <form action="manage_cart.php" METHOD="POST">              
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/RagnarMen_sLeatherBracelet21-06-2023-1_360x.jpg?v=1687867828" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="RAGNAR MEN'S LEATHER BRACELET" name="Item_Name"/>
                            <input type="hidden" value="499.99" name="Price"/>
                    </div>
                </div>
                
                <p>RAGNAR MEN'S LEATHER BRACELET
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
</form>
            </div>

            <div class="img-11 col-6 col-sm-3">
            <form action="manage_cart.php" METHOD="POST">         
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/SpartonsMen_sLeatherBracelet21-06-2023-1_360x.jpg?v=1687868691" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="SPARTONS MEN'S LEATHER BRACELET" name="Item_Name"/>
                            <input type="hidden" value="999.99" name="Price"/>
                    </div>
                </div>
                <p> SPARTONS MEN'S LEATHER BRACELET
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
</form>
            </div>

             <div class="img-12 col-6 col-sm-3">
             <form action="manage_cart.php" METHOD="POST">         
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/EnzoMen_sLeatherBracelet21-06-2023-1_360x.jpg?v=1687850964" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="ENZO MEN'S LEATHER BRACELET" name="Item_Name"/>
                            <input type="hidden" value="1299.99" name="Price"/>
                    </div>
                </div>
                <p> ENZO MEN'S LEATHER BRACELET
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
</form>
            </div>

        </div>        

        <div class="bestselling-img-4 row d-flex col-12 ">
            <div class="img-14 col-6 col-sm-3">
        <form action="manage_cart.php" METHOD="POST"> 
            
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/BirendraGoldenMen_sChainPendent-Sahil-M-Styling-Inhouse-26-07-202301copy-1_360x.jpg?v=1690785642" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="BIRENDRA GOLDEN MEN'S CHAIN PENDANT" name="Item_Name"/>
                            <input type="hidden" value="1099.99" name="Price"/>
                    </div>
                </div>
                <p> BIRENDRA GOLDEN MEN'S CHAIN PENDANT
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
</form>
            </div>
            

             <div class="img-15 col-6 col-sm-3">
             <form action="manage_cart.php" METHOD="POST">            
             <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/IPV09323_3_360x.jpg?v=1686050609" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="MARION MEN'S CHAIN PENDANT" name="Item_Name"/>
                            <input type="hidden" value="1299.99" name="Price"/>
                    </div>
                </div>
                <p> MARION MEN'S CHAIN PENDANT
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
</form>
            </div>

             <div class="img-16 col-12 col-sm-3">
             <form action="manage_cart.php" METHOD="POST">           
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/IPV09314-1_360x.jpg?v=1686048622" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="GREER EYE MEN'S CHAIN PENDANT" name="Item_Name"/>
                            <input type="hidden" value="1599.99" name="Price"/>
                    </div>
                </div>
                <p> GREER EYE MEN'S CHAIN PENDANT
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
</form>
            </div>   

            <div class="img-16 col-6 col-sm-3">
            <form action="manage_cart.php" METHOD="POST">         
                <div class="ui-Cart  ">
                    <img src="https://www.swashaa.com/cdn/shop/files/TavishSilverMen_sChainPendent-Sahil-M-Styling-Inhouse-26-07-2023copy-1_360x.jpg?v=1690633065" alt="" width="100%" class="image">
                    <div class="overlay ">
                        
                    <button  type="submit" name="Add_To_Cart" class="add-Cart Cart1 button1">ADD To Cart</button>
                            <input type="hidden" value="TAVISH SILVER MEN'S CHAIN PENDANT" name="Item_Name"/>
                            <input type="hidden" value="749.99" name="Price"/>
                    </div>
                </div>
                <p> TAVISH SILVER MEN'S CHAIN PENDANT
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
</form>
            </div>   

        </div>

        </div>
    </div>

    <?php  require 'footer.php'  ?>
 
</body>
</html>