<?php
/**
 * Оборудование components
 * 
 * No redirection nor database manipulation ( insert, update, delete ) here
 * 
 * 
 */
class productComponents extends myFrontModuleComponents
{

  public function executeListByCategory()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListByTag()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListBySpecification()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListByMark()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListBySlider()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeListByMain()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }

  public function executeShow()
  {
    $query = $this->getShowQuery();
    
    $this->product = $this->getRecord($query);
  }

  public function executeList()
  {
    $query = $this->getListQuery();
    
    $this->productPager = $this->getPager($query);
  }


}
