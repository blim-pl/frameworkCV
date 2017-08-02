<?php
namespace Modules\CvMaker\Model\Section\SectionItem;

interface IItem
{
    public function setData(array $data): IItem;

    public function getData(): array;

    public function getType();

    public function getName(): string;

    public function getDescription(): string;

    public function toHtml();
}
