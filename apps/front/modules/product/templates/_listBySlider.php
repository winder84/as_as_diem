<?php // Vars: $productPager

//echo $productPager->renderNavigationTop();
$i = 0;
echo _open('div.mainSlider');
	foreach ($productPager as $product)
	{
		if ($product->isonslider) {
			$i++;
			if ($i == 1) {
				echo _open('div#mainSlide_' . $i);
					echo _tag('div.sliderImg', _link($product)->text(_media($product->Image)->size(290, 280)->method('fit')));
					echo _open('div.sliderText');
						echo _tag('h1.slideTitle',  _link($product)->text($product));
						echo _tag('h4.slideCost', 'Цена: ' . number_format($product->cost, 0, '.', ' ') . ' руб.');
					echo _close('div');
				echo _close('div');
			} else {
				echo _open('div.hidden#mainSlide_' . $i);
					echo _tag('div.sliderImg', _link($product)->text(_media($product->Image)->size(290, 280)->method('fit')));
					echo _open('div.sliderText');
						echo _tag('h1.slideTitle',  _link($product)->text($product));
						echo _tag('h4.slideCost', 'Цена: ' . number_format($product->cost, 0, '.', ' ') . ' руб.');
					echo _close('div');
				echo _close('div');
			}
		}
	}
echo _close('div');
echo _tag('div.leftArrow');
echo _tag('div.rightArrow');
//echo $productPager->renderNavigationBottom();