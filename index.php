<?php

require_once('./PdfGenerator/PdfCreator.php');

use PdfGenerator\PdfCreator;

$map = include './map2.php';

$data = [
	'url' => 'https://www.ydacha.ru/ydacha/genplany/arch/%D0%92%D1%8B%D1%81%D0%BE%D1%82%D1%8B_2_%D0%903.png',
	'map' => $map,
];

$pdf = new PdfCreator($data);
$pdf->create();
