<?php
/**
 * @package rampart
 */
$xpdo_meta_map['rptBan']= array (
  'package' => 'rampart',
  'table' => 'rampart_bans',
  'fields' => 
  array (
    'reason' => NULL,
    'ip_low1' => 0,
    'ip_high1' => 0,
    'ip_low2' => 0,
    'ip_high2' => 0,
    'ip_low3' => 0,
    'ip_high3' => 0,
    'ip_low4' => 0,
    'ip_high4' => 0,
    'hostname' => NULL,
    'email' => NULL,
    'username' => NULL,
    'matches' => 0,
    'createdon' => NULL,
    'editedon' => NULL,
    'editedby' => 0,
    'expireson' => NULL,
    'notes' => NULL,
    'active' => 0,
  ),
  'fieldMeta' => 
  array (
    'reason' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'ip_low1' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_high1' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_low2' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_high2' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_low3' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_high3' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_low4' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'ip_high4' => 
    array (
      'dbtype' => 'int',
      'precision' => '3',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'hostname' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'email' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'username' => 
    array (
      'dbtype' => 'tinytext',
      'phptype' => 'string',
      'null' => true,
    ),
    'matches' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
    ),
    'createdon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'editedon' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
    ),
    'editedby' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'attributes' => 'unsigned',
      'phptype' => 'integer',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
    'expireson' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => true,
      'index' => 'index',
    ),
    'notes' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => true,
    ),
    'active' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'attributes' => 'unsigned',
      'phptype' => 'boolean',
      'null' => false,
      'default' => 0,
      'index' => 'index',
    ),
  ),
  'aggregates' => 
  array (
    'EditedBy' => 
    array (
      'class' => 'modUser',
      'local' => 'editedby',
      'foreign' => 'id',
      'cardinality' => 'one',
      'owner' => 'foreign',
    ),
  ),
  'composites' => 
  array (
    'Matches' => 
    array (
      'class' => 'rptBanMatchBan',
      'local' => 'id',
      'foreign' => 'ban',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
