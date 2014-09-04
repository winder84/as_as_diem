<?php // Vars: $markPager

//echo $markPager->renderNavigationTop();

echo _open('div.firm_bg');
	echo _open('ul.firm_bg_ul');
		foreach ($markPager as $key => $mark)
		{
			if ($key <= 7) {
				echo _open('li');
					echo _open('span');
						echo _link($mark)->text(_media($mark->Image)->size(100, 40));
						echo _tag('p.category_name_link', _link($mark));
					echo _close('span');
				echo _close('li');
			}
		}
	echo _close('ul');
echo _close('div');

//echo $markPager->renderNavigationBottom();