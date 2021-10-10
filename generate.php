<?php

require_once __DIR__ . '../vendor/autoload.php';

use Spatie\Browsershot\Browsershot;

$pdf = Browsershot::url('http://teplo.test/')
	->waitUntilNetworkIdle()
	->showBackground()

	// Определение портрета
	->landscape()

	->select('#imgMap', 0)
	->format('A4')
	->pdf();

header("Content-type: application/pdf");
header("Content-Disposition: inline; filename=filename.pdf");
die($pdf);
