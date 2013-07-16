<?php

namespace Pressenter\AgendaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller {

    public function indexAction(Request $request) {

        $search = $this->createFormBuilder()
                ->add('q', 'text')
                ->getForm();

        $search->handleRequest($request);

        if ($search->isValid()) {
            $data = $search->getData();
        }
        return $this->render('PressenterAgendaBundle:Default:index.html.twig', array('search' => $search->createView(),
        ));
    }

    public function showAction($id) {
        
    }

    public function editAction($id) {
        
    }

}
