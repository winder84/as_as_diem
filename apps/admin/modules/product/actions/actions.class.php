<?php

require_once dirname(__FILE__).'/../lib/productGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/productGeneratorHelper.class.php';

/**
 * product actions.
 *
 * @package    tambuel-sochi
 * @subpackage product
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class productActions extends autoProductActions
{
	public function executeExport(sfWebRequest $request)
	{
		$export = $request->getParameter('export');
		$import = $request->getParameter('import');

		if ($export) {
			$product = new ProductAdminExport();
			var_dump($product);
		}

	}
}
