#!/usr/bin/php
<?php

$arr = array(
18505,
18506,
15672,
17716,
15577,
15490,
20752,
15674,
15489,
22549,
15492,
14619,
15487,
15493,
16386,
15491,
16548,
19805,
14615,
15673,
17541,
20042,
16126,
16407,
13570,
23066,
16269,
22902,
22907,
16270,
16271,
23159,
16275,
16276,
16279,
16280,
16281,
22905,
16282,
16283,
22877,
16284,
21028,
23084,
22885,
20650,
1065,
18509,
8927,
9816,
);

$z = 100;
foreach ($arr AS $coll) {
  mkdir ("exports/$coll");
  $cmd = "bin/export -t COLLECTION -i 10090/$coll -d ./exports/$coll -m -n $z"; 
  exec ($cmd);

  $z += 200;
}
