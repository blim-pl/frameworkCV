<?php
namespace Modules\CvMaker\Model\Person;

use BlimCms\Configs\Config;

/**
 * Model of person data
 *
 * Class Person
 *
 * @package Modules\CvMaker\Model\Person
 */
class Person implements IPerson
{
    protected $name;
    protected $surname;
    protected $birthYear;
    protected $livingCity;
    protected $email;
    protected $mobile;
    protected $abstract;

    /**
     * Person constructor.
     * @param array $data
     *
     * eq.
     *  $data = [
     *      'name'      => 'Correct',
     *      'surname'   => 'Correct-value',
     *      'bitrhYear' => 1970,
     *      'livingCity'=> 'Good City',
     *      'email'     => 'correct@email.pl',
     *      'mobile'    => '+48123456789'
     * ];
     */
    public function __construct(array $data)
    {
        $this->checkData($data);

        $this->name = $data['name'];
        $this->surname = $data['surname'];
        $this->birthYear = $data['bitrhYear'];
        $this->livingCity = $data['livingCity'];
        $this->email = $data['email'];
        $this->mobile = $data['mobile'];
        $this->abstract = $data['abstract'];
    }

    /**
     * TODO: Use validator to check data
     *
     * @return bool
     */
    protected function checkData(array $data)
    {
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Check Person data');
        }
    }

    /**
     * Get name value
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get surname value
     *
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Get birtg year value
     *
     * @return mixed
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    /**
     * Get city value
     *
     * @return mixed
     */
    public function getLivingCity()
    {
        return $this->livingCity;
    }

    /**
     * Get email address value
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get mobile number value
     *
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Get abstract value
     *
     * @return mixed
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Render item view
     *
     * TODO: viewProvider
     *
     * @return string
     */
    public function toHtml()
    {
        ob_start();
        include Config::get('view.dir') . Config::get('cvMaker.templateratePerson.person');
        $html = ob_get_clean();

        return $html;
    }
}
