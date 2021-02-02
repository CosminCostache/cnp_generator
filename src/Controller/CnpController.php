<?php

namespace App\Controller;

use App\Entity\ECnp;
use App\Form\CnpType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CnpController extends AbstractController
{
    /**
     * @Route("/", name="cnp")
     */
    public function index(Request $request): Response
    {
        $cnp = new ECnp();

        $form = $this->createForm(CnpType::class, $cnp, [
            'action' => $this->generateUrl('cnp'),
            'method' => 'POST'
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cnp);
            $entityManager->flush();
        }

        return $this->render('cnp/index.html.twig', ['cnp_form' => $form->createView()]);
    }
}
