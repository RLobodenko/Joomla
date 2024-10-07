<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

$menu = $app->getMenu();
$lang = JFactory::getLanguage();

if($task == "edit" || $layout == "form" )
{
	$fullWidth = 1;
}
else
{
	$fullWidth = 0;
}

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

// Add current user information
$user = JFactory::getUser();
$doc->addCustomTag('<meta property="og:image:width" content="200"/>');
	$doc->addCustomTag('<meta property="og:image:height" content="200"/>');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132861530-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132861530-1');
</script>
	<meta name="yandex-verification" content="238ee2cee98bac12" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <jdoc:include type="head" />
    <?php
// Use of Google Font

   if ($this->params->get('googleFont'))
    {
    ?>
        <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName');?>' rel='stylesheet' type='text/css' /> 
    <?php
        }
    ?>

    <link rel="stylesheet" href="/templates/gorsovet/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/templates/gorsovet/css/style.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

</head>
<body class="site <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">
<?php
	// Template color
	if ($this->params->get('templateColor'))
	{
	?>
	<?php
	}
	?>
<div class="container-fluid wrapper">
	<header>




  
  <table class="iksweb">
	<tbody>
		
			
    <tr>
    <td rowspan="2">
  <jdoc:include type="modules" name="gerb" style="" /> </td>
  <td rowspan="2" align="left"><span class="text2"><b>
		  Минский городской<br>  Совет депутатов</b></span>

</span>
</td>
<td><div style="
    padding-left: 950px;"><span class="poisk"><br><br>

    <jdoc:include type="modules" name="custom-position" style="" /></span> </div>  </td>
		</tr>
		<tr>
			<td>


    <hr>
     <div class="elements1" id="one"> <div class="element1"><b> <jdoc:include type="modules" name="position-3" style="" /> </b></div></div>
     </td>
     </tr>

	</tbody>
</table>



	</header>

	<content >

  <jdoc:include type="modules" name="grafik" style="" /> 

<span class="different"> 
<p class="k_drygim">К другим новостям>></p></span>
   <br><br>
   
       <jdoc:include type="modules" name="news" style="" /> 
<div class="useful_information">
<div class="text">
<p> Полезная информация</p>
</div>
<div class="elements" id="one">
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br>
<jdoc:include type="modules" name="writeletter" style="" /> </div>
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br>
<jdoc:include type="modules" name="writeletter1" style="" /> </div>
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br>
<jdoc:include type="modules" name="writeletter2" style="" /> </div>
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br>
<jdoc:include type="modules" name="writeletter3" style="" /> </div>
</div> </div>
<p class="text1"> Карта избирательных округов </p>
<jdoc:include type="modules" name="map-dep" style="width:100%; height:650px;" /> 

  
<div class="address">
	 <div class="create-line">
		<div class="text3" style="padding-left: 22.78px;">
<jdoc:include type="modules" name="telephons" style="" /> </div> </div> </div>

<div class="grafik"><jdoc:include type="modules" name="grafik-raboty-novy" style="" /> </div>
<div class="create-line1"><div class="internet">
<jdoc:include type="modules" name="internet" style="" /> </div></div>
	</content>
<br>
<br>
<br>
<br>

	<footer>
	<div class="Kyp">


  <jdoc:include type="modules" name="copyright" style="" /> 

</div>
	</footer>

</body>
</html>