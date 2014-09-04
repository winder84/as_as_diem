<?php // Vars: $tagPager

echo $tagPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($tagPager as $tag)
{
  echo _open('li.element');

    echo $tag;

  echo _close('li');
}

echo _close('ul');

echo $tagPager->renderNavigationBottom();