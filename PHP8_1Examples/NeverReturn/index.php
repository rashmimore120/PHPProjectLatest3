<?php
declare(strict_types=1);

function foo():never
{
  echo 1;
  exit;
}
foo();
echo 'I Should *never* be printed';