<?php
/**
 * Created by PhpStorm.
 * User: hm
 * Date: 7/24/2020
 * Time: 2:41 PM
 */

?>
<html lang="en">
<head>
    <title>Url Generator - Bad Tools</title>
    <link rel="stylesheet" href="../styles/style.css"/>
    <link rel="stylesheet" href="styles.css"/>

</head>
<body>
<section id="main">
    <section id="header">
        <section id="logo">
            <a href="https://errorworld.in/"></a>
        </section>
    </section>

    <?php
//html
//take user input

$mainUrl = $_POST['mainUrl'];
$parmStart = $_POST['parmStart'];
$parmEnd = $_POST['parmEnd'];
$extraUrl = $_POST['extraUrl'];
@$isLeadingChar = $_POST['isLeadingChar'];
@$leadingChar = $_POST['leadingChar'];
@$leadCount = $_POST['leadCount'];

$fp = fopen("Url list.rtf", "wb");

echo '<section id="main_body">';
echo '<section id="subtitle" style="margin-bottom: 1%">Sample of Generated Url List</section>';
echo '<section id="sampleList">';
if (!$isLeadingChar) {
    for($i=$parmStart; $i <= $parmEnd; $i++) {
        $url = $mainUrl . $i . $extraUrl . "\n";
        if ($i < 15)
            echo $url . "<br />";
        @fwrite($fp, $url);
    }
}
else {
    $lead = "";
    for ($j=$leadCount; $j>0;$j--) {
        $lead .= $leadingChar;
    }
    for($i=$parmStart; $i <= $parmEnd; $i++) {
        $url = $mainUrl . $lead . $i . $extraUrl . "\n";
        if ($i < 15)
            echo $url . "<br />";
        @fwrite($fp, $url);
    }
}
echo '</section>';
echo "<section id='start'>";
    echo "<a href='Url%20list.rtf'><button style='margin: 2% 0 1%' class='start'>Download</button></a>";
    echo ucwords("<br /> note: you can rename the file to .txt format.");
echo "</section>";
echo "</section>";
