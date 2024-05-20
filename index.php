<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); include("conn_db.php"); include("head.php");?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Food Frenzy</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
    <?php include('nav_header.php')?>
    <section class="carousel next">
            <div class="list">
                <article class="item other_1">
                    <div class="main-content" 
                    style="background-color: #964B00;">
                        <div class="content">
                            <h5>DESSERT</h5>
                            <h2>Brownies</h2>
                            <p class="price">Rs 65<sub><del></del></sub></p>
                            <p class="description">
                            Brownies are chocolaty baked products made in square or rectangle shapes.
                            </p>
                            <div class="ing_icon">
                                <img src="/images/Others/caffeine.png" alt="" title="caffeine">
                                <img src="/images/Others/sugar-cube.png" alt="" title="Sugar-cube">
                            </div>
                           
                        </div>
                    </div>
                    <figure class="image">
                        <img src="img/brownies.png" alt="">
                        <figcaption>Brownies</figcaption>
                    </figure>
                </article>
                <article class="item active">
                    <div class="main-content" 
                    style="background-color: #f5bfaf;">
                        <div class="content">
                            <h5 style="background-color: red ;">Non-Veg</h5>
                            <h2>Chicken Biryani</h2>
                            <p class="price">Rs 260</p>
                            <p class="description">
                            Biryani is a mixed rice dish, mainly popular in South Asia. It is made with rice, some type of meat and spices.
                            </p>
                            <div class="ing_icon">
                                <img src="/images/Others/tomato.png" alt="" title="Tomato">
                                <img src="/images/Others/onion.png" alt="" title="Onion">
                                <img src="/images/Others/cabbage.png" alt="" title="Cabbage">
                                <img src="/images/Others/potato.png" alt="" title="Potato">
                                <img src="/images/Others/chilli-pepper.png" alt="" title="Chilli">
                                
                            </div>
                           
                        </div>
                    </div>
                    <figure class="image">
                        <img src="img/chicken_biryani_2.png" alt="">
                        <figcaption>Chicken Biryani</figcaption>
                    </figure>
                </article>
                <article class="item other_2">
                    <div class="main-content" 
                    style="background-color: #37B03C;">
                        <div class="content">
                            <h5 style="background-color: green;">VEG</h5>
                            <h2>Veg Fried Rice</h2>
                            <p class="price">Rs 150</p>
                            <p class="description">
                            This classic Veg Fried Rice recipe is made with a hearty mix of fresh vegetables, green onions, seasonings and spices for an incredibly flavorful fried rice dish. 
                            </p>
                            <div class="ing_icon">
                                <img src="/images/Others/tomato.png" alt="" title="Tomato">
                                <img src="/images/Others/onion.png" alt="" title="Onion">
                                <img src="/images/Others/cabbage.png" alt="" title="Cabbage">
                                <img src="/images/Others/potato.png" alt="" title="Potato">
                                <img src="/images/Others/chilli-pepper.png" alt="" title="Chilli">
                                

                            </div>
                            
                        </div>
                    </div>
                    <figure class="image">
                        <img src="img/veg_fried_rice.png" alt="">
                        <figcaption>Veg Fried Rice</figcaption>
                    </figure>
                    
                </article>
                <article class="item other_2">
                    <div class="main-content" 
                    style="background-color: #f18f1f;">
                        <div class="content">
                            <h5 style="background-color: red;">Non-Veg</h5>
                            <h2>Chicken butter masala</h2>
                            <p class="price">Rs 280<s>R̶s̶ 3̶0̶0̶</s></p>
                            <p class="description">
                            Butter chicken, traditionally known as murgh makhani, is an Indian dish originating in Delhi. It is a type of curry made from chicken with a spiced tomato and butter (makhan) sauce.
                            </p>
                            <div class="ing_icon">
                                <img src="/images/Others/tomato.png" alt="" title="Tomato">
                                <img src="/images/Others/onion.png" alt="" title="Onion">
                                <img src="/images/Others/cabbage.png" alt="" title="Cabbage">
                                <img src="/images/Others/potato.png" alt="" title="Potato">
                                <img src="/images/Others/chilli-pepper.png" alt="" title="Chilli">
                                
                            </div>
                            
                        </div>
                    </div>
                    <figure class="image">
                        <img src="img/butter_chicken.png" alt="">
                        <figcaption>Butter Chicken</figcaption>
                    </figure>
                    
                </article>
                <article class="item">
                    <div class="main-content" 
                    style="background-color: #E5CB7A;">
                        <div class="content">
                            <h5 style="background-color: #f18f1f;">Beverages</h5>
                            <h2>Lassi</h2>
                            <p class="price">Rs 45</p>
                            <p class="description">
                            Lassi, a creamy, frothy yogurt-based drink, blended with water and various fruits or seasonings (such as salt or sugar), that originated in Punjab, India. 
                            </p>
                            <div class="ing_icon">
                                <img src="/images/Others/caffeine.png" alt="" title="Tomato">
                                <img src="/images/Others/sugar-cube.png" alt="" title="Onion">
                            </div>
                            
                        </div>
                    </div>
                    <figure class="image">
                        <img src="img/lassi.png" alt="">
                        <figcaption>Lassi</figcaption>
                    </figure>
                </article>
                    
                

            </div>
            <div class="arrows">
                <button id="prev"><</button>
                <button id="next">></button>
            </div>
        </section>
    <div class="container p-5" id="recommended-shop">
        <h2 class="border-bottom pb-2"><i class="bi bi-shop align-top"></i> Recommended For You</h2>

        <!-- GRID SHOP SELECTION -->
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

            <?php
            $query = "SELECT s_id,s_name,s_pic FROM shop";
            $result = $mysqli -> query($query);
            if($result -> num_rows > 0){
            while($row = $result -> fetch_array()){
        ?>
            <!-- GRID EACH SHOP -->
            <div class="col">
                <a href="<?php echo "shop_menu.php?s_id=".$row["s_id"]?>" class="text-decoration-none text-dark">
                    <div class="card rounded-25">
                        <img <?php
                            if(is_null($row["s_pic"])){echo "src='img/default.png'";}
                            else{echo "src=\"img/{$row['s_pic']}\"";}
                        ?> style="width:100%; height:175px; object-fit:cover;"
                            class="card-img-top rounded-25 img-fluid" alt="<?php echo $row["s_name"]?>">
                        <div class="card-body">
                            <h4 name="shop-name" class="card-title"><?php echo $row["s_name"]?></h4>
                            <p class="card-subtitle">
                                
                            </p>
                            
                            <div class="text-end">
                                <a href="<?php echo "shop_menu.php?s_id=".$row["s_id"]?>"
                                    class="btn btn-sm btn-outline-dark">Go to shop</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- END GRID EACH SHOP -->
            <?php }
        }else{
            ?>
            <div class="row row-cols-1 w-100">
                <div class="col mt-4 pt-3 px-3 bg-danger text-white rounded text-center">
                    <i class="bi bi-x-circle-fill"></i>
                    <p class="ms-2 mt-2">No shop currently avaliable to order.</p>
                </div>
            </div>
            <?php
        }
        $result -> free_result();
        ?>
        </div>
        
        <!-- END GRID SHOP SELECTION -->

    </div>
    <?php include('footer.php')?>

    <script src="js/home.js"></script>
    
        
</body>
</html>