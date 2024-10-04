<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_tags_popular
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;
use Joomla\CMS\Router\Route;
use Joomla\Component\Tags\Site\Helper\RouteHelper;

?>
<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" type="text/css" href="/templates/cornflower/html/mod_tags_popular/jqcloud.css" /> 
    <script type="text/javascript" src="/templates/cornflower/html/mod_tags_popular/jquery-3.7.1.min.js"></script>  
    <script type="text/javascript" src="/templates/cornflower/html/mod_tags_popular/jqcloud-1.0.3.js"></script> 





    
    </head>
    <body>
    <?php




$length = sizeof($list);
for ($count = 0; $count < $length; $count++) {
    $array[$count] = array
        ( $list[$count]->title,
      
         );
}

$lengthh = sizeof($list);
for ($count = 0; $count < $lengthh; $count++) {
    $arrayy[$count] = array
        ( $list[$count]->alias,
      
         );
}

$json = json_encode($array);
$jsonn = json_encode($arrayy);
   ?>


    <script type="text/javascript">
var id2 = <?= $json ?>;
var id3 = [];
var links = <?= $jsonn ?>;
var array = [4, 5, 6, 7, 8, 9, 10, 11, 12];



for(let i=0, j=0 ; i<id2.length , j<links.length; i++, j++){

    var url = new URL('https://ersc.demo-upit.by/');
   var linkss = url.pathname.split('/');
   url.pathname = linkss.join(links[j]);
   var linksz = url.pathname;

  id3.push({ text: id2[i], weight: array[Math.floor(Math.random() * array.length)], link: linksz});


}


$(function() {
$("#example").jQCloud(id3);
 })    
  

    </script>



<?php
    shuffle($list);
?>

    <div id="example" style="width: 1380px; height: 550px;"  class="container"></div>
<div class="mod-tagspopular tagspopular">
<?php if (!count($list)) : ?>
    <div class="alert alert-info">
        <span class="icon-info-circle" aria-hidden="true"></span><span class="visually-hidden"><?php echo Text::_('INFO'); ?></span>
        <?php echo Text::_('MOD_TAGS_POPULAR_NO_ITEMS_FOUND'); ?>
    </div>
<?php else : ?>
    <ul>
    <?php foreach ($list as $item) : ?>
     <li class = "size-<?php 

                if($item->count>=20){
                    echo 'large';
                }else if($item->count>=15){
                    echo 'big';
                }
                else if($item->count>=10){
                    echo 'medium';
                }else{
                    echo 'tiny';
                } 
             ?>">  
         
            <a href="<?php echo Route::_(RouteHelper::getComponentTagRoute($item->tag_id . ':' . $item->alias, $item->language)); ?>">
            <?php //echo htmlspecialchars($item->title, ENT_COMPAT, 'UTF-8'); ?></a>
 
            <!-- <span class="tag-count badge bg-info"><?php  echo $item->count; ?></span> -->
       
    </li> 
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
</body>
</html>

