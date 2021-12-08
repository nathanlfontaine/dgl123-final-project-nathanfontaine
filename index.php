 <!--
     Nathaniel Fontaine
     Dec 8, 2021
     DGL-123 Final Project

     index.php
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nathan Fontaine - Simpsons Archives</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

 <!--Simpsons Array-->
 <?php
 $simpsons_characters = array (

  'homer' => 
  array (
    'first_name' => ' Homer',
    'last_name' => ' Simpson',
    'age' => ' 40',
    'occupation' => ' Nuclear Safety Inspector',
    'voiced_by' => ' Dan Castellaneta',
  ),
  'marge' => 
  array (
    'first_name' => ' Marge',
    'last_name' => ' Simpson',
    'age' => ' 40',
    'occupation' => ' Homemaker',
    'voiced_by' => ' Julie Kavner',
  ),
  'bart' => 
  array (
    'first_name' => ' Bart',
    'last_name' => 'Simpson',
    'age' => ' 10',
    'occupation' => ' Student',
    'voiced_by' => ' Nancy Cartwright',
  ),
  'lisa' => 
  array (
    'first_name' => ' Lisa',
    'last_name' => ' Simpson',
    'age' => ' 8',
    'occupation' => ' Student',
    'voiced_by' => ' Yeardley Smith',
  ),
  'maggie' => 
  array (
    'first_name' => ' Maggie',
    'last_name' => ' Simpson',
    'age' => ' 8',
    'occupation' => ' Baby',
    'voiced_by' => ' Nancy Cartwright',
  ),
  'moe' => 
  array (
    'first_name' => ' Moe',
    'last_name' => ' Szyslak',
    'age' => '55',
    'occupation' => ' Bartender',
    'voiced_by' => ' Hank Azaria',
  ),
)
?>

<!--Header / Logo -->
    <header id="masthead" class="site-header layout-container">
        <a href="/">
            <img class="site-header__logo" src="images/logo.svg" alt="Logo">
        </a>
        <!--Displayed Date / Time-->
        <div class="date">
            <?php 
            date_default_timezone_set("America/Vancouver");
            echo date("l") . date("m/d/Y") . "</br>" . date("h:i a");
            ?>
            </div>
    </header>

    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <div id="main" class="site-main">
                
                <div class="form__container layout-container">
                    <div class="form__row layout-row">
                        <div class="form__itemsContainer">
                            
                            <!--Simpsons Image-->
                            <div class="form__imageContainer">
                                <img src="images/simpsons.jpg" alt="Simpsons" class="form__image">
                            </div>

                            <!--Form -->
                            <div class="form__card">
                                <h3 class="form__heading"> Select characters to show </h3>
                                <form method="post">

                                    <ul class="form__items">
                                         <!--Homer 
                                        "checked" code source: https://www.webdeveloper.com/d/160049-keeping-checkboxes-checked-in-php-->
                                        <li class="form__item">
                                            <label for="homer">Homer Simpson </label>
                                            <input id="homer" type="checkbox" name="homer" <?php if(isset($_POST['homer'])) echo "checked";?>>
                                        </li>
                                         <!--Marge-->
                                        <li class="form__item">
                                            <label for="marge">Marge Simpson </label>
                                            <input id="marge" type="checkbox" name="marge" <?php if(isset($_POST['marge'])) echo "checked";?>>
                                        </li>
                                        
                                         <!--Bart-->
                                        <li class="form__item">
                                            <label for="bart">Bart Simpson </label>
                                            <input id="bart" type="checkbox" name="bart" <?php if(isset($_POST['bart'])) echo "checked";?>>                           
                                        </li>
                                        
                                         <!--Lisa-->
                                        <li class="form__item">
                                            <label for="lisa">Lisa Simpson </label>
                                            <input id="lisa" type="checkbox" name="lisa" <?php if(isset($_POST['lisa'])) echo "checked";?>>                                
                                        </li>
                                        
                                         <!--Maggie-->
                                        <li class="form__item">
                                            <label for="maggie">Maggie Simpson </label>
                                            <input id="maggie" type="checkbox" name="maggie" <?php if(isset($_POST['maggie'])) echo "checked";?>">                               
                                        </li>
                                        
                                         <!--Moe-->
                                        <li class="form__item">
                                            <label for="moe">Moe Szyslak </label>
                                            <input id="moe" type="checkbox" name="moe" <?php if(isset($_POST['moe'])) echo "checked";?>>                              
                                        </li>
                                    </ul>
                                    
                                     <!--Button-->
                                    <input class="form__button" type="submit" name="submit" value="Show Characters">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                        <ul class="characters__items"> 

                            <!-- PHP Starts Here -->
                            <!-- if no character is selected, display h1 -->
                            <?php 
                            if (!isset($_POST['homer']) 
                            && !isset($_POST['marge'])
                            && !isset($_POST['bart'])
                            && !isset($_POST['lisa'])
                            && !isset($_POST['maggie'])
                            && !isset($_POST['moe'])) 
                            {
                                echo '<h1>Doh! Please Select a Character</h1>'; 
                            } else {

                            /* if homer is selected */
                           if(isset($_POST['homer'])) {
                                echo "<li class=\"characters__itemContainer\">" . 
                                "<div class=\"characters__item\"</div>" .
                                "<img class=\"characters__image\" src='images/homer.png'>" .
                                  "<div class=\"haracters__info\"</div>" . 
                                  "<h3 class=\"characters__name\">" .
                                   $simpsons_characters['homer']['first_name'] . $simpsons_characters['homer']['last_name'] .
                                   "</h3>" .
                                   "<div class=\"characters__age characters__attribute\">" .
                                   "<b>Age:</b>" . 
                                   $simpsons_characters['homer']['age'] .
                                   "</div>" .
                                   "<div class=\"characters__occupation characters__attribute\">" .
                                   "<b>Occupation:</b>" .
                                   $simpsons_characters['homer']['occupation'] .
                                   "</div>" .
                                   "<div class=\"characters__voicedBy characters__attribute\">" .
                                   "<b>Voiced By:</b>" .
                                   $simpsons_characters['homer']['voiced_by'] . 
                                   "</div>" .
                                   "</li>";
                             }

                             /* if marge is selected */
                           if(isset($_POST['marge'])) {
                            echo "<li class=\"characters__itemContainer\">" . 
                            "<div class=\"characters__item\"</div>" .
                            "<img class=\"characters__image\" src='images/marge.png'>" .
                              "<div class=\"haracters__info\"</div>" . 
                              "<h3 class=\"characters__name\">" .
                               $simpsons_characters['marge']['first_name'] . $simpsons_characters['marge']['last_name'] .
                               "</h3>" .
                               "<div class=\"characters__age characters__attribute\">" .
                               "<b>Age:</b>" . 
                               $simpsons_characters['marge']['age'] .
                               "</div>" .
                               "<div class=\"characters__occupation characters__attribute\">" .
                               "<b>Occupation:</b>" .
                               $simpsons_characters['marge']['occupation'] .
                               "</div>" .
                               "<div class=\"characters__voicedBy characters__attribute\">" .
                               "<b>Voiced By:</b>" .
                               $simpsons_characters['marge']['voiced_by'] . 
                               "</div>" .
                               "</li>";
                         }

                         /* if bart is selected */
                           if(isset($_POST['bart'])) {
                            echo "<li class=\"characters__itemContainer\">" . 
                            "<div class=\"characters__item\"</div>" .
                            "<img class=\"characters__image\" src='images/bart.png'>" .
                              "<div class=\"haracters__info\"</div>" . 
                              "<h3 class=\"characters__name\">" .
                               $simpsons_characters['bart']['first_name'] . $simpsons_characters['bart']['last_name'] .
                               "</h3>" .
                               "<div class=\"characters__age characters__attribute\">" .
                               "<b>Age:</b>" . 
                               $simpsons_characters['bart']['age'] .
                               "</div>" .
                               "<div class=\"characters__occupation characters__attribute\">" .
                               "<b>Occupation:</b>" .
                               $simpsons_characters['bart']['occupation'] .
                               "</div>" .
                               "<div class=\"characters__voicedBy characters__attribute\">" .
                               "<b>Voiced By:</b>" .
                               $simpsons_characters['bart']['voiced_by'] . 
                               "</div>" .
                               "</li>";
                         }

                         /* if lisa is selected */
                         if(isset($_POST['lisa'])) {
                            echo "<li class=\"characters__itemContainer\">" . 
                            "<div class=\"characters__item\"</div>" .
                            "<img class=\"characters__image\" src='images/lisa.png'>" .
                              "<div class=\"haracters__info\"</div>" . 
                              "<h3 class=\"characters__name\">" .
                               $simpsons_characters['lisa']['first_name'] . $simpsons_characters['lisa']['last_name'] .
                               "</h3>" .
                               "<div class=\"characters__age characters__attribute\">" .
                               "<b>Age:</b>" . 
                               $simpsons_characters['lisa']['age'] .
                               "</div>" .
                               "<div class=\"characters__occupation characters__attribute\">" .
                               "<b>Occupation:</b>" .
                               $simpsons_characters['lisa']['occupation'] .
                               "</div>" .
                               "<div class=\"characters__voicedBy characters__attribute\">" .
                               "<b>Voiced By:</b>" .
                               $simpsons_characters['lisa']['voiced_by'] . 
                               "</div>" .
                               "</li>";
                         }

                         /* if maggie is selected */
                         if(isset($_POST['maggie'])) {
                            echo "<li class=\"characters__itemContainer\">" . 
                            "<div class=\"characters__item\"</div>" .
                            "<img class=\"characters__image\" src='images/maggie.png'>" .
                              "<div class=\"haracters__info\"</div>" . 
                              "<h3 class=\"characters__name\">" .
                               $simpsons_characters['maggie']['first_name'] . $simpsons_characters['maggie']['last_name'] .
                               "</h3>" .
                               "<div class=\"characters__age characters__attribute\">" .
                               "<b>Age:</b>" . 
                               $simpsons_characters['maggie']['age'] .
                               "</div>" .
                               "<div class=\"characters__occupation characters__attribute\">" .
                               "<b>Occupation:</b>" .
                               $simpsons_characters['maggie']['occupation'] .
                               "</div>" .
                               "<div class=\"characters__voicedBy characters__attribute\">" .
                               "<b>Voiced By:</b>" .
                               $simpsons_characters['maggie']['voiced_by'] . 
                               "</div>" .
                               "</li>";
                         }

                         /* if moe is selected */
                         if(isset($_POST['moe'])) {
                            echo "<li class=\"characters__itemContainer\">" . 
                            "<div class=\"characters__item\"</div>" .
                            "<img class=\"characters__image\" src='images/moe.png'>" .
                              "<div class=\"haracters__info\"</div>" . 
                              "<h3 class=\"characters__name\">" .
                               $simpsons_characters['moe']['first_name'] . $simpsons_characters['moe']['last_name'] .
                               "</h3>" .
                               "<div class=\"characters__age characters__attribute\">" .
                               "<b>Age:</b>" . 
                               $simpsons_characters['moe']['age'] .
                               "</div>" .
                               "<div class=\"characters__occupation characters__attribute\">" .
                               "<b>Occupation:</b>" .
                               $simpsons_characters['moe']['occupation'] .
                               "</div>" .
                               "<div class=\"characters__voicedBy characters__attribute\">" .
                               "<b>Voiced By:</b>" .
                               $simpsons_characters['moe']['voiced_by'] . 
                               "</div>" .
                               "</li>";
                         }
                        }
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
