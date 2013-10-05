<?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$lenaImage   = file_get_contents(__DIR__."/incl/lena.html");
$lenasByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Lena Dackhammar</h1>


<figure class="right top">
{$lenaImage}
</figure>
</a>

<p>Hej jag heter Lena Dackhammar.</p>
<p>Jag läser lite distanskurser inom webb för att få koll på hur man bygger bra hemsidor.</p>

<p>På fritiden gillar jag att resa och spela golf. Jag har spelat golf ca 10 år och har 20 i handikapp. Jag borde ha 
lägre handnikapp men jag får inte närspel och låg spel att funka ihop alltid.</p>

<p>Jag bor i Askim utanför Göteborg.20 minuters promenad till havet och ungefär lika långt till en sjö och skogenn.
Jag gillar både havet och skogen så jag bor perfekt.
</p>
  
{$lenasByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");
