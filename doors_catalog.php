<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>My Door</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/common.js"></script>
</head>

<body>
    <?php include "include/header.php"?>

    <div class="container-fluid big-image-block">
        <div class="image-block-text">
            <div class="image-block-text-inner">
                <h1>МЕЖКОМНАТНЫЕ И ВХОДНЫЕ ДВЕРИ</h1>
                <p>Производство и монтаж дверей в Москве и Московской области</p>
                <button class="btn green-button">Получить расчет</button>
            </div>
        </div>
    </div>
    </div>

    <div class="container products">
        <h2><span class="main">НАШИ</span> МОДЕЛИ</h2>
        <ul class="product-type-links">
            <li>
                <a href="#">
                    <div class="product-type-name">Входные двери</div>
                    <div class="product-type-amount">(66)</div>
                </a>
            </li>
            <hr>
            <li>
                <a href="#">
                    <div class="product-type-name">Межкомнатные двери</div>
                    <div class="product-type-amount">(130)</div>
                </a>
            </li>
            <hr>
        </ul>
        <!-- <div class="popular-models">
            <div class="doors-wrapper">
                <div class="door">
                    <img class="door-image" src="images/door1.png">
                    <p class="door-name text-center">Дверь Stripes</p>
                    <p class="door-price text-center">7 500 РУБ.</p>
                </div>
                <div class="door">
                    <img class="door-image" src="images/door2.png">
                    <p class="door-name text-center">Дверь Minimalist</p>
                    <p class="door-price text-center">9 500 РУБ.</p>
                </div>
            </div>
            <div class="doors-wrapper">
                <div class="door">
                    <img class="door-image" src="images/door3.png">
                    <p class="door-name text-center">Дверь Luxury</p>
                    <p class="door-price text-center">35 000 РУБ.</p>
                </div>
                <div class="door">
                    <img class="door-image" src="images/door4.png">
                    <p class="door-name text-center">Дверь Guard</p>
                    <p class="door-price text-center">27 500 РУБ.</p>
                </div>
            </div>
        </div> -->
<?php
    include "db/db.php";
    $doors = $db->getDoors();
    $maxProductsOnPage = 2;
    $page = $_GET["PAGE"];
    $nPages = round(count($doors) / $maxProductsOnPage);
    if($page < 1){
        $page = 1;
    }
    if($page > $nPages){
        $page = $nPages;
    }

    $begin = $maxProductsOnPage * ($page - 1);
    $count = min($maxProductsOnPage, count($doors) - $begin);

    for($i = $begin, $j = 0; $i < $begin + $count; ++$i, $j++){
        if($j % 4 == 0){
            echo '<div class="popular-models">';
        }
        if($j % 2 == 0){
            echo '<div class="doors-wrapper">';
        }
        echo '<div class="door">';
        echo '<img class="door-image" src="'. $doors[$i]->getImageUrl() .'">';
        echo '<p class="door-name text-center">'.$doors[$i]->getName().'</p>';
        echo '<p class="door-price text-center">'.$doors[$i]->getPrice().'</p>';
        echo '</div>';
        if($j % 2 != 0 || $j == $count - 1){
            echo '</div>';
        }
        if($j % 4 == 3 || $j == $count - 1){
            echo '</div>';
        }    
    }
?>
    </div>
    <div class="container">
<?php echo "<span>Товары ". ($begin + 1) . " - " . ($begin + $count) . " из " . count($doors) ."</span>";
      echo  "<br>";
      //echo "<span>Начало | Пред. | 1 2 3 4 5 | След. | Конец</span>";
      $res = '<span class="pages-links">';
      if($page != 1){
          $res .= '<a href="doors_catalog.php?PAGE=1">Начало</a> | ';
          $res .= '<a href="doors_catalog.php?PAGE='.($page - 1).'">Пред.</a> | ';
      }else{
          $res .= "Начало | Пред. | ";
      }

      
      $n = 5;
      $k = 2;
      if(($nPages - $page) < $k){
        $k = $n - ($nPages - $page) - 1;  
      }
      for($p = $page - $k; $n > 0; $p++){
          if($p > 0){
              if($p == $page){
                $res .= " ".$p." ";
              }else{
                $res .= '<a href="doors_catalog.php?PAGE='.$p.'">'.$p." </a>";
              }
              
              $n--;
          }
          if($p == $nPages){
              break;
          }
      }

      if($page != $nPages){
        $res .= ' | <a href="doors_catalog.php?PAGE='.($page + 1).'"> След.</a> | ';
        $res .= '<a href="doors_catalog.php?PAGE='.$nPages.'">Конец.</a>';
      }else{
        $res .= " | След. | Конец | ";
      }
      echo $res;
?>
    </div>    
    
    

    <?php include "include/footer.php"?>
</body>

</html>