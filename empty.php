 <?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "En tom mall-sida";
$data['meta_description'] = "En mallsida som visar hur jag integrerar med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Mall</h1>

<p>En tom mallsida. Här fyller du i innehållet</p>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
