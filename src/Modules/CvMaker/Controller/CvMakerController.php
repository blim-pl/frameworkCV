<?php
namespace Modules\CvMaker\Controller;

use BlimCms\Configs\Config;
use BlimCms\App;
use BlimCms\Http\Response;
use BlimCms\Helpers\ContentFixer;
use Modules\CvMaker\Model\Cv\Cv;
use Modules\CvMaker\Model\Person\Person;
use Modules\CvMaker\Model\Section\Section;
use Modules\CvMaker\Model\Term\Term;
use Modules\Pdf\MpdfHtmlToPdf;

/**
 * Description of PageIndexController
 *
 * @author Sebastian Śliwiński
 */
class CvMakerController extends App
{
    public function indexAction()
    {
        $config = Config::get('cvMaker');

        if ($config) {
            if (!empty($_POST)) {

                //only example
                $cvData = $config['data'];
                unset($config['data']);

                $cv = new Cv($config);

                //personal data
                $cv->addPerson(new Person($cvData['person']));

                if (!empty($cvData['sectionsCollection']) && is_array($cvData['sectionsCollection'])) {
                    foreach ($cvData['sectionsCollection'] as $sectionData) {

                        //document section
                        $section = new Section(['name' => $sectionData['name'], 'position' => $sectionData['position'], 'type' => $sectionData['type']], $config);

                        //section items
                        if (!empty($sectionData['sectionItems']) && is_array($sectionData['sectionItems'])) {
                            foreach ($sectionData['sectionItems'] as $sectionItem) {
                                $section->addItem($sectionItem);
                            }
                        }

                        $cv->addSection($section);
                    }
                }

                //personal data
                if (!empty($cvData['terms']) && is_array($cvData['terms'])) {
                    foreach ($cvData['terms'] as $termItem) {
                        $cv->addTerm(new Term($termItem));
                    }
                }

                $this->renderOutput($config['format'], $cv->toHtml());
            }

            $response = new Response('<form method="post"><input type="submit" value="pobierz" name="download" /></form>');
        } else {
            $response = new Response('Sprawdź konfigurację', 500);
        }

        return $response;
    }

    protected function fixHtmlContent($html): string
    {
        $contentFixer = new ContentFixer($html);
        $fixedHtml = $contentFixer->conjunctionBrakes();
        unset($contentFixer);

        return $fixedHtml;
    }

    /**
     * TODO: format factory
     *
     * @param $type
     * @param $html
     */
    protected function renderOutput($type, $html)
    {
        if ($type === 'pdf') {
            $htmlToPdf = new MpdfHtmlToPdf();

            $htmlToPdf->setContentString($this->fixHtmlContent($html));

            $htmlToPdf->render();
        }
    }
}
