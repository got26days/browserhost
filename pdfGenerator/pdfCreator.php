<?php

namespace PdfGenerator;

require_once __DIR__ . '../../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class PdfCreator
{

	protected $data;
	protected $parentFolder;

	public function __construct($data = [], $parenFolder = '/')
	{
		$this->data = $data;
		$this->parenFolder = $parenFolder;
	}

	public function create()
	{

		$fullFolder = $_SERVER['DOCUMENT_ROOT'] . $this->parentFolder;

		$loader = new FilesystemLoader($fullFolder . '/templates');
		$twig = new Environment($loader, [
			'cache' => $fullFolder . '/compilation_cache',
			'auto_reload' => true,
		]);


		$html = $twig->render('template.html', $this->data);
		echo $html;
		exit(0);
	}
}
