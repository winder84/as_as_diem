<?php
/**
 * Характеристика components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 */
class specificationComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->specificationPager = $this->getPager($query);
  }


}
