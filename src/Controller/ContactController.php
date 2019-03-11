<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Contact;
use App\Form\ContactType;

class ContactController extends AbstractController
{
    public function create()
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        return $this->render(
            'contact/create.html.twig',
            [
            'entity' => $contact,
            'form' => $form->createView(),
            ]
        );
    }

    public function valid(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('app_lucky_number');
        }

        return $this->render(
            'contact/create.html.twig',
            [
            'entity' => $contact,
            'form' => $form->createView(),
            ]
        );
    }
}
