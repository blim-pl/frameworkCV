<?php
namespace Modules\Page\Controller;

use BlimCms\App;
use BlimCms\Http\Response;

/**
 * Description of PageIndexController
 *
 * @author Sebastian Śliwiński
 */
class PageIndexController extends App
{
    public function indexAction()
    {
        return new Response('<a href="/cv">cv</a>');
    }
}
