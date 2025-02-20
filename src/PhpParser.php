<?php

namespace phpbergen\Phpstan;

use PhpParser\Error;
use PhpParser\NodeDumper;
use PhpParser\ParserFactory;
use PhpParser\PrettyPrinter;
include_once __DIR__ . '/../vendor/autoload.php';

/**
 * https://github.com/nikic/php-parser.
 */

$src = <<<'CODE'
<?php echo 'hello Bergen';
CODE;

$code = <<<'CODE'
<?php
function make_beer()
{
    echo 'Beer';
}
CODE;

$parser = new ParserFactory()->createForNewestSupportedVersion();
try {
  $ast = $parser->parse($code);
} catch (Error $error) {
  echo "Parse error: {$error->getMessage()}\n";
  return;
}

$dumper = new NodeDumper;
echo $dumper->dump($ast) . "\n";

//$prettyPrinter = new PrettyPrinter\Standard;
//echo $prettyPrinter->prettyPrintFile($ast);
