<?php

require_once '/home/virtwww/w_avtoserviskafe8_945ed433/diem50/dmCorePlugin/lib/core/dm.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      // add plugins you want to enable here
	  'dmCkEditorPlugin'
    ));

    $this->setWebDir(sfConfig::get('sf_root_dir').'/http');
  }
  
}