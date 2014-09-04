<?php
/**
 * Связь тегов components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 */
class taglinkComponents extends myFrontModuleComponents
{

  public function executeListByTags()
  {
    $query = $this->getListQuery();
    
    $this->taglinkPager = $this->getPager($query);
  }


}
