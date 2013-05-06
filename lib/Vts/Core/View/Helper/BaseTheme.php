<?php
namespace Vts\Core\View\Helper;
use Zend\View\Helper\AbstractHelper;

class BaseTheme extends AbstractHelper
{
    public function __invoke()
    {
        return '/skin/default/blue';
    }
}