<?php // Vars: $tagPager

echo $tagPager->renderNavigationTop();

echo _open('ul.tags_ul');

foreach ($tagPager as $tag)
{
  echo _open('li.tags_li');

    echo _link($tag)->text($tag);

  echo _close('li');
}

echo _close('ul');

echo $tagPager->renderNavigationBottom();