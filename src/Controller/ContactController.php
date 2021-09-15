<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Pimcore\Model\DataObject\Team;

class ContactController extends BaseController
{
    /**
     * @return Response
     */
    public function createAction(): Response
    {
        $owner = Team::getList()->getData()[0];

        return $this->render('content/contact.html.twig', compact('owner'));

    }

}
