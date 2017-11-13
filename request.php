<?php
// accept a term (keyword)
// respond with a value
$query = $_GET['q'];
$definition = [
    "definition" => "A statement of the exact meaning of a word, especially in a dictionary.",
    "bar" => "A place that sells alcholic beverages",
    "ajax" => "Technique which involves the use of javascript and xml (or JSON)",
    "html" => "The standard markup language for creating web pages and web applications.",
    "css" => "A style sheet language used for describing the presentation of a document written in a markup language.",
    "javascript" => "A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.",
    "php" => "A server-side scripting language, and a powerful tool for making dynamic and interactive websites",
];
$xmldata = '<?xml version="1.0" encoding="UTF-8"?>
<entries>
    <definition>
        <name>definition</name>
        <author>Sashana</author>
        <meaning>A statement of the exact meaning of a word, especially in a dictionary.</meaning>
    </definition>
    <definition>
        <name>bar</name>
        <author>Sashana</author>
        <meaning>A place that sells alcholic beverages</meaning>
    </definition>
    <definition>
        <name>ajax</name>
        <author>Sashana</author>
        <meaning>Technique which involves the use of javascript and xml (or JSON)</meaning>
    </definition>
    <definition>
        <name>html</name>
        <author>Sashana</author>
        <meaning>The standard markup language for creating web pages and web applications.</meaning>
    </definition>
    <definition>
        <name>css</name>
        <author>Sashana</author>
        <meaning>A style sheet language used for describing the presentation of a document written in a markup language.</meaning>
    </definition>
    <definition>
        <name>javascript</name>
        <author>Sashana</author>
        <meaning>A lightweight, interpreted programming language with first-class functions that adds interactivity to your website.</meaning>
    </definition>
    <definition>
        <name>php</name>
        <author>Sashana</author>
        <meaning>A server-side scripting language, and a powerful tool for making dynamic and interactive websites</meaning>
    </definition>
</entries>';
if($query=="&all=true")
{header('Content-Type: text/xml');
$xmlOutput = new SimpleXMLElement($xmldata);
echo $xmlOutput->asXML();}
else
{print "<h3>" . strtoupper($query) . "</h3>";
print "<p>" . $definition[$query] . "</p>";}