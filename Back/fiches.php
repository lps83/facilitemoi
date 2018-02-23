<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
  <title>BackOffice</title>
  <link type="text/css" href="./css/style.css" rel="stylesheet" />
  <!--[if lte IE 6]>
    <link type="text/css" href="./css/style_ie6.css" rel="stylesheet" />
  <![endif]-->
  <script type="text/javascript" src="./js/jquery-1.2.6.min.js"></script>
  <script type="text/javascript" src="./js/script.js"></script>
</head>

<body>
<div id="page">

  <!-- header -->
  <div id="header">
      <div id="logo"><h1><a href="#" title="Your site name">BackOffice - Facilite-moi :)</a></h1></div>
      <div id="quicklink"><a href="#" title="Admin profile">Admin</a> | <a href="#" title="Help">Help</a> | <a href="#" title="logout">logout</a></div>
  </div>
  <!-- end header -->


  <!-- main menu -->
  <div id="mainmenu">
      <ul>
          <li><a href="index.html" title="">Accueil</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="fiches.php" title=""class="active">Fiches</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="#" title="">Utilisateurs</a>&nbsp;&nbsp;|&nbsp;&nbsp;</li>
          <li><a href="#" title="">Settings</a></li>
      </ul>
  </div>
  <!-- end mainmenu -->

    <div id="submenu">
        <ul>
            <li><a href="./fiches.php?ref=comp" title=""<?php if($_GET['ref'] == "comp"){echo 'class="active"';}?> >Comprendre</a></li>
            <li><a href="./fiches.php?ref=obs" title=""<?php if($_GET['ref'] == "obs"){echo 'class="active"';}?> >Observer</a></li>
            <li><a href="./fiches.php?ref=insp" title=""<?php if($_GET['ref'] == "insp"){echo 'class="active"';}?> >Inspiration</a></li>
            <li><a href="#" title=""<?php if($_GET['ref'] == "insp"){echo 'class="active"';}?>>Idéation</a></li>
            <li><a href="#" title=""<?php if($_GET['ref'] == "insp"){echo 'class="active"';}?>>Prototypage</a></li>
            <li><a href="#" title=""<?php if($_GET['ref'] == "insp"){echo 'class="active"';}?>>Tester et Apprendre</a></li>
        </ul>
        <div class="clear"></div>
    </div>

  <!-- content default-->


      <div id="content">

                <!-- block Fade in/out Message box -->

                <h3><span class="title">Module d'edition des fiches</span><span class="underlined">&nbsp;</span></h3>
				<?php
					
if(isset($_GET['ref'])){

switch ($_GET['ref']) {
    case "comp":
        include 'fiches_comp.php';
        break;
    case "obs":
        include 'fiches_obs.php';
        break;
    case "insp":
        include 'fiches_insp.php';
        break;
    case "edit":
        include 'fiches_edit.php';
        break;
}
	
}
else{
	echo '<div style="margin-left: :20px; margin-right :20px; text-align: center">
					<h1>Good Luck ;)</h1>
					</div>';
}
?>
				
      </div>
      
      <!-- end div default content -->


  <!-- Footer -->
  <div id="footer">
      <ul>
          <h3>Facilite-moi - 2018</h1>
      </ul>
  </div>

</div>
<!-- end div page -->
</body>

</html>