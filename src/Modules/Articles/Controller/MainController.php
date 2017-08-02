<?php
namespace Modules\Articles\Controller;

use BlimCms\App;
use BlimCms\Http\Response;

/**
 *
 * @author Sebastian Śliwiński
 */
class MainController extends App
{
    public function indexAction()
    {
        $content = $this->render('Modules/Articles/View/list.php', func_get_args());
        
        return new Response($content);
    }
}
