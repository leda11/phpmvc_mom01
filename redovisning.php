 <?php
/**
 * redovisningar av kursmomenten i PHPMVC.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisning";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<h2>Kmom01: En boilerplate</h2>
<p>Ja nu var det dags att redovisa. Jag läser på trekvartsfart.Min redovisning är lite  då jag kom igång sent med kursen 
(strul med anmälningen)samt varit bortrest.</br>
Jag började med att läsa lite i litteraturen sen startade jag med git och gitHub som var något nytt för mig.
Jag hade lite problem i början men till slut fick jag det att fungera.
Det repository som jag skapar kopplas ju mot github men sen när jag började jobba med broilerplate lokalt på datorn så ligger 
filerna i en annan mapp än den jag kopplat ihop med repositorit. DÅ måste man ju göra ett nytt repository?? 
Det är kanske inte helt klart för mig hur jag skall hantera det. Men jag fick det att funka emd testfilerna iallafall.
</p>
<p>Miljön och verktygen som jag arbetar med: Jag jobbar i  window XP  i WAMP och skriver kod i JEdit. 
Jag för över filer till studentservern med FileZilla. Den browser jag jobbar i är Mozilla FireFox.
</p>
<p><b>Boilerplate-konceptet</b> - Det verkar bra. Det var dock mycket att sätta sig in i. 
Men som sagt beprövad kod och koncept är ju inte fel att använda sig av.
Eftersom jag var sent ute så kopierade jag broilerplate filerna till min dator. Jag tittade på Mos hemsida och skapade övriga filerna. 
Sen ändrade jag lite för att anpassa till min sida.</br>
Jag hade lite problem att förstå vilka sidor som användes först och hur allt hängde ihop. det är lite klarare nu.
Jag får personifiera den mer när jag kommit ikapp mer.</br>
Strul: Jag hade strul med att jag inte såg "data" variabelns innehåll skrivas ut i min lokala miljö. 
Detta sinkade mig ganska mycket. Jag frågade på chatten och vi kom fram till att jag borde lägga upp mina filer
på servern för att kunna få hjälp lättare. 
Men när jag fört över filerna till servern så syntes allt som det skulle, BRA. 
Men jag ser fortfarande inte datavariabelns innehåll när jag jobbar lokalt på min dator. 
</p>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 

