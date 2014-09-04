<?php
/*
 * Variables available :
 * - $query (string)        the searched query
 * - $form  (mySearchForm)  the search form
 * - $pager (dmSearchPager) the search pager
 */

if (!$pager)
{
  echo _tag('h1', __('Ничего не найдено по запросу "%1%"', array('%1%' => escape($query))));
  return;
}

echo _tag('h1.searchResultsTitle', __('Results') . ':');

echo _open('ol.search_results start='.$pager->getFirstIndice());

foreach($pager as $result)
{
	$page = $result->getPage();

	echo _tag('li.search_result',

	_link($page)->text(
		_tag('span.page_name', escape($page->name)))
	);
}

echo _close('ol');