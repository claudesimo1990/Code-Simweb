<?php

namespace App\Document\Areabrick;

use Pimcore\Model\DataObject\Skill;
use Pimcore\Model\DataObject\Team;
use Pimcore\Model\Document\Editable\Area\Info;

class Teams extends AbstractAreabrick
{
    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return 'ours Team';
    }

    /**
     * @throws \Exception
     */
    public function action(Info $info)
    {
        $info->setParams(['teams' => Team::getList()->getData()]);
        return parent::action($info); // TODO: Change the autogenerated stub
    }

}
