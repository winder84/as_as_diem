<?php // Vars: $categoryPager

echo _open('ul.categoryListMenu');
foreach ($categoryPager as $category) {
	if ($category->is_active) {
		if (!$category->category_id) {
			$categories = $category->Categories->toArray();
			if (!empty($categories)) {
				echo _open('li.categoryParent');
					echo _tag('a.noLink', $category);
					echo _media('plus.png')->width(25)->method('fit');
				echo _close('li');
				echo _open('ul.categoryChildren');
				foreach ($category->Categories as $categoryChild) {
					if ($categoryChild->is_active) {
							$products = $categoryChild->Products->toArray();
						if (!empty($products)) {
							echo _tag('li', _link($categoryChild));
						}
					}
				}
				echo _close('ul');
			} else {
				$products = $category->Products->toArray();
				if (!empty($products)) {
					echo _tag('li', _link($category));
				}
			}
//		$parentCategories[$category->category_id][] = $category;
		}
	}
}
echo _close('ul');

