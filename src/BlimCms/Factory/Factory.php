<?php
namespace BlimCms\Factory;

use BlimCms\Exception\FactoryException;

/**
 * Class Factory
 *
 * @package BlimCms\Factory
 */
abstract class Factory implements IFactory
{
    protected $typesMap = [];

    /**
     * Find section element type
     *
     * @param int $type
     * @return mixed
     */
    protected function findItemType($type)
    {
        return array_search($type, $this->typesMap);
    }

    /**
     * Create object instance
     * @param $type
     * @return mixed
     * @throws FactoryException
     */
    public function create($type)
    {
        $classNamespace = $this->findItemType($type);

        return new $classNamespace();

        /*  Specific exception

            switch (true) {
            case $classNamespace:
                return new $classNamespace();
                break;

            default:
                throw new FactoryException('Creation error: type: ' . $type . ' not exists');
                break;
        }*/
    }
}
