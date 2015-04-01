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
	protected $products;
	protected $data;
	public function executeProductExport(sfWebRequest $request)
	{
		$export = $request->getParameter('export');
		$import = $request->getParameter('import');

		if ($export) {
			$this->products = Doctrine::getTable('Product')->findAll();
			foreach ($this->products as $product) {
				$this->data .= $product->id . ';' . $product->title . ';' . $product->cost . ";\n";
			}

			// filename
			$filename = 'export_' . date("Y-m-d_His") . '.csv';

			// init
			$this->setLayout(false);

			// header
			$this->getResponse()->clearHttpHeaders();
			$this->getResponse()->setHttpHeader('Content-Type', 'text/csv');
			$this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename=' . $filename);

			// content
			$this->getResponse()->setContent($this->data);

			// disable template
			return sfView::NONE;
		} elseif ($import) {
			$importFileTmpName = $_FILES['importFile']['tmp_name'];
			if (($handle = fopen($importFileTmpName, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
					$importArray[$data[0]] = $data[2];
				}
				fclose($handle);
			}

			foreach ($importArray as $productId => $productCost) {
				$q = Doctrine_Query::create()
					->from('Product')
					->where('id = ?', $productId);
				$productObject = $q->fetchOne();
				$productObject->cost = $productCost;
				$productObject->save();
			}
		}

	}
}
