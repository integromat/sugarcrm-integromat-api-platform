<?php
$manifest = array (
  'id' => 'integromat-api-platform',
  'name' => 'Integromat API Platform Registration',
  'description' => 'Integromat API Platform Registrationn',
  'version' => '1.0',
  'author' => 'Integromat',
  'is_uninstallable' => 'true',
  'published_date' => '2018-05-30 16:00:00',
  'type' => 'module',
  'acceptable_sugar_versions' => 
  array (
    'exact_matches' => 
    array (
    ),
    'regex_matches' => 
    array (
      0 => '^7\.(9|10|11)\.[\d]+.*|8\.[\d]+\.[\d]+.*',
    ),
  ),
);
$installdefs = array (
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/src/custom/Extension/application/Ext/Platforms/integromat-api.php',
      'to' => 'custom/Extension/application/Ext/Platforms/integromat-api.php',
    ),
  ),
);
