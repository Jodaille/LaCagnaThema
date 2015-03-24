<?php

$display_errors = false;
$app_env = getenv('APPLICATION_ENV');
if($app_env == 'development')
{
  $display_errors = true;
}
return array(
    'view_manager' => array(
        'display_not_found_reason' => $display_errors,
        'display_exceptions'       => $display_errors,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/la-cagna-product/product/index.twig',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
