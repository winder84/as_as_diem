<?php // Vars: $specificationPager

echo $specificationPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($specificationPager as $specification)
{
  echo _open('li.element');

    echo $specification;

  echo _close('li');
}

echo _close('ul');

echo $specificationPager->renderNavigationBottom();