<?php
require_once __DIR__ . '/vendor/autoload.php';

$readme = file_get_contents("readme.txt");
$markdown = \WPReadme2Markdown\Converter::convert($readme);
file_put_contents("README.md", $markdown);