<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <meta name="description" content="大方悠真のプロフィール">
    <?php wp_head(); ?>
</head>

<body>
 <header>
    <h1 class="mypro">My profile</h1>

    <?php $args =array(
                    'theme_location' => 'header_nav',
                    'container' => 'nav',
                );
                wp_nav_menu($args);
                ?>
        
   
 </header>
