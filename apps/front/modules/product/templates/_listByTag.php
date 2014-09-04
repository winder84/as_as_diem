<?php // Vars: $productPager

echo $productPager->renderNavigationTop();

echo _open('ul.productListUl');

foreach ($productPager as $product)
{
	echo _open('li.element');

	echo _link($product)->text(_media($product->Image)->size(200, 130)->method('fit'));
	echo _tag('div.productElementTitle', _link($product));

	echo _close('li');
}

echo _close('ul');

echo $productPager->renderNavigationBottom();