<?php

// Create a new SimpleXMLElement object
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" ?><ABC_College></ABC_College>');

// Add a Computer Application Department element
$compAppDept = $xml->addChild('Computer_Application_Department');

// Add a Course element
$compAppDept->addChild('Course', 'BCA(Science)');

// Add a Student Strength element
$compAppDept->addChild('Student_Strength', '80');

// Add a Number of Teachers element
$compAppDept->addChild('Number_of_Teachers', '12');

// Print the generated XML
echo $xml->asXML();
?>