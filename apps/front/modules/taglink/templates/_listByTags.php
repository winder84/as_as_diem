<?php // Vars: $taglinkPager

echo $taglinkPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($taglinkPager as $taglink)
{
  echo _open('li.element');

    echo _link($taglink)->text($taglink);

  echo _close('li');
}

echo _close('ul');

echo $taglinkPager->renderNavigationBottom();