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
    'last_name' => 'Simpson',
    'age' => ' 40',
    'occupation' => ' Nuclear Safety Inspector',
    'voiced_by' => 'Dan Castellaneta',
    'image_url' => 'images/homer.png',
  ),
  'marge' => 
  array (
    'first_name' => 'Marge',
    'last_name' => 'Simpson',
    'age' => '40',
    'occupation' => 'Homemaker',
    'voiced_by' => 'Julie Kavner',
    'image_url' => 'images/marge.png',
  ),
  'bart' => 
  array (
    'first_name' => 'Bart',
    'last_name' => 'Simpson',
    'age' => '10',
    'occupation' => 'Student',
    'voiced_by' => 'Nancy Cartwright',
    'image_url' => 'images/bart.png',
  ),
  'lisa' => 
  array (
    'first_name' => 'Lisa',
    'last_name' => 'Simpson',
    'age' => '8',
    'occupation' => 'Student',
    'voiced_by' => 'Yeardley Smith',
    'image_url' => 'images/lisa.png',
  ),
  'maggie' => 
  array (
    'first_name' => 'Maggie',
    'last_name' => 'Simpson',
    'age' => '8',
    'image_url' => 'images/maggie.png',
  ),
  'moe' => 
  array (
    'first_name' => 'Moe',
    'last_name' => 'Szyslak',
    'age' => '55',
    'occupation' => 'Bartender',
    'voiced_by' => '',
    'image_url' => 'images/moe.png',
  ),
)
?>
    <header id="masthead" class="site-header layout-container">
        <a href="/">
            <img class="site-header__logo" src="images/logo.svg" alt="Logo">
        </a>
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

                            <!--Form Title -->
                            <div class="form__card">
                                <h3 class="form__heading"> Select characters to show </h3>
                                <form method="post">

                                    <ul class="form__items">
                                         <!--Homer-->
                                        <li class="form__item">
                                            <label for="homer">Homer Simpson </label>
                                            <input id="homer" type="checkbox" name="homer">
                                        </li>
                                         <!--Marge-->
                                        <li class="form__item">
                                            <label for="marge">Marge Simpson </label>
                                            <input id="marge" type="checkbox" name="marge">
                                        </li>
                                        
                                         <!--Bart-->
                                        <li class="form__item">
                                            <label for="bart">Bart Simpson </label>
                                            <input id="bart" type="checkbox" name="bart">                           
                                        </li>
                                        
                                         <!--Lisa-->
                                        <li class="form__item">
                                            <label for="lisa">Lisa Simpson </label>
                                            <input id="lisa" type="checkbox" name="lisa">                                
                                        </li>
                                        
                                         <!--Maggie-->
                                        <li class="form__item">
                                            <label for="maggie">Maggie Simpson </label>
                                            <input id="maggie" type="checkbox" name="maggie">                               
                                        </li>
                                        
                                         <!--Moe-->
                                        <li class="form__item">
                                            <label for="moe">Moe Szyslak </label>
                                            <input id="moe" type="checkbox" name="moe">                              
                                        </li>
                                    </ul>
                                    
                                     <!--Button-->
                                    <input class="form__button" type="submit" value="Show Characters">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="characters__container layout-container">
                    <div class="characters__row layout-row">
                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>