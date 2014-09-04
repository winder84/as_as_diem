<?php // Vars: $product

echo _open('div.productShowDiv');
	echo _open('div.productShowHead');
		echo _open('div.productShowImg');
			echo _media($product->Image)->size(300, 300)->method('fit');
			if (!empty($product->cost)) {
				echo _tag('p.productShowCost', 'Цена: ' . number_format($product->cost, 0, '.', ' ') . ' руб.');
			}
		echo _close('div');
		echo _open('div.productShowTD');
			echo _tag('div.productShowTitle', $product);
			echo _tag('div.productShowPrevdesc', $product->prevdescription);
		echo _close('div');
	echo _close('div');
	if (!empty($product->description)) {
		echo _tag('div.productHorDelimer');
		echo _open('div.productShowBody');
			echo _open('p.productShowDescription');
				echo $product->description;
			echo _close('p');
		echo _close('div');
	}

	$images = $product->getDmGallery()->toArray();
	$media = $product->getDmGallery();
	if (!empty($images)) {
		echo _tag('div.productHorDelimer');
		echo _open('ul.productGalleryUl');
			echo _tag('p.specTableTitle', 'Изображения');
			foreach ($media as $image) {
				echo _tag('li', _tag('a.toFancy', array('href' => '/uploads/' . $image, 'rel' => 'group_' . $product->id), _media($image)->size(265, 200)->method('fit')));
			}
		echo _close('ul');
	}
echo _close('div');