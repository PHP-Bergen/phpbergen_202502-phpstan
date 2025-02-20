<?php

$source = <<<PHP
<?php echo 'hello Bergen!';
PHP;

$allTokens = PhpToken::tokenize($source);
print_r($allTokens);
