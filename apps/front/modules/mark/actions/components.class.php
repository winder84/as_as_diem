<?php
/**
 * Фирма components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 */
class markComponents extends myFrontModuleComponents
{

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->markPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->mark = $this->getRecord($query);
  }


}
