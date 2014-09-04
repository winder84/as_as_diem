<?php
/** @var dmFrontLayoutHelper */
$helper = $sf_context->get('layout_helper');

echo 
$helper->renderDoctype(),
$helper->renderHtmlTag(),

  "\n<head>\n",
  "\n<link rel='stylesheet' type='text/css' media='all' href='/js/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.min.css'>\n",
    $helper->renderHead(),
  "\n</head>\n",
  
  $helper->renderBodyTag(),
  
    $sf_content,
    
    $helper->renderEditBars(),
    
    $helper->renderJavascriptConfig(),
    $helper->renderJavascripts(),
    $helper->renderGoogleAnalytics(),

  "\n</body>\n",

"\n</html>";