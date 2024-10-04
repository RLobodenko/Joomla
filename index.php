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

	
<span>
		<img  class="logo" src="templates/gorsovet/logo.jpg"></span>
	<span class="text2">
		 Минский городской Совет депутатов</span><span class="poisk">
		<input type="text" placeholder="Поиск по сайту" id="UsersPassword" style="background-image: url(templates/gorsovet/search.jpg);  background-repeat: no-repeat;  
          background-position: right; background-color: white;">

</span>

	<hr>
	</header>
	

	
	<content >
		<jdoc:include type="component" />
		<div style="position: relative;">
		 <div style="position: absolute; z-index: 1;">
		<img src="templates/gorsovet/picture.jpg">
</div><br>
		<div class="component" style="position: absolute; z-index: 2;">
<p class="grafik1"><strong>ГРАФИК ПРИЕМА ГРАЖДАН ДЕПУТАТАМИ МИНСКОГО ГОРОДСКОГО СОВЕТА ДЕПУТАТОВ 29-ГО СОЗЫВА</strong></p>
<br><br>
<input type="text" class="street" placeholder="Улица"><br><br>
<input type="text" class="house" placeholder="Дом"> 
<input type="text" class="korpys" placeholder="Корпус"><br><br><br><br>

<form>
   <p><input type="button" class="b1" value="НАЙТИ"></p>
  </form>

  <br>
<div class="september">
<img src="templates/gorsovet/man.jpg"><span><span class="seven"><strong> 7 СЕНТЯБРЯ </strong></span><span class="den"><strong>– ЕДИНЫЙ ДЕНЬ ДЕПУТАТА</strong></span></span>

<img src="templates/gorsovet/strelki.JPG" height="38px" widht="38px">
</div></div></div><br><br><br><br>
	 <div class="news">

<span class="different"> 
К другим новостям>> 
</span> 


</div>
<div class="useful_information">
<div class="text">
<p> Полезная информация </p>
</div>
<div class="elements" id="one">
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br>
Алгоритм получения поддержки в г. Минске <br>
в соответствии с Указом Президента Республики<br> 
Беларусь от 24.04.2020 №143 «О поддержке экономики»
</div>
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br><br>
	Бюджет г. Минска
</div>
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br><br>
	Инвестиционная программа г.Минска
</div>
<div class="element">
	<img src="templates/gorsovet/money.jpg"><br><br>
	МОЛОДЁЖНЫЙ СОВЕТ
</div>
	 </div> </div>
	 
<p class="text1"> Карта избирательных округов </p>
<div class="map">
<iframe src="templates/gorsovet/karta/belkarta.php" width="100%" height="650px"></iframe>

	 </div>



	 
	 <div class="address">
	 <div class="create-line">
		
	<p class="text">Минский городской совет депутатов</p> 
	<p><img src="templates/gorsovet/Vector.jpg">220030, Минск, проспект Независимости 8</p> <br>
	<p><img src="templates/gorsovet/Frame.jpg">Специалисты по обеспечению деятельности Мингорсовета:</p></td>
	<p>приемная: т-н 218 00 28, факс 218 01 86</p>
	<p>Тониева Ирина Михайловна: т/ф 218 01 84<br> помощник председателя Минского горсовета</p>
	<p>Касабуцкая Дарья Владимировна: т-н 218 01 93</p> 
	</div>

<div class="grafik">
<p><img src="templates/gorsovet/Frame1.jpg">График работы:</p>
<p>пн-чт: 08.45 - 18.00</p>
<p>пт: 08.45 – 16.45</p>
<p>обеденный перерыв: 13.00-14.00</p>
<p>сб-вс: выходной</p>
</div>

<div class="create-line1">
	<div class="internet">
<p>Интернет-ресурсы</p>
<ul>
  <li><p>Официальный сайт Президента Республики Беларусь</p></li>
  <li><p>Государственные органы и организации Беларуси</p></li>
  <li><p>Национальный правовой интернет-портал Республики Беларусь</p></li>
  <li><p>Совет Министров Республики Беларусь</p> </li>
  <li><p>Минский городской исполнительный комитет</p> </li>
</ul>
</div>
	 </div>
	<br>
	<br>
	<br>
	<br>
	<br>
	</content>

	<footer>
	<div class="Kyp">


	Разработка и сопровождение КУП «Центр информационных технологий Мингорисполкома» © 2001—2024

</div>
	</footer>
</div>

</body>
</html>