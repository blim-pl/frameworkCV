<?php
namespace Modules\CvMaker\Model\Section;

interface ISection
{
    public function getName(): string;

    public function getType(): string;

    public function getPosition(): int;

    public function addItem(array $data): ISection;

    public function getItems(): array;
}
