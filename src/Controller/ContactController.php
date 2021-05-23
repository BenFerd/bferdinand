<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Service\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerService $mailerService)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $formData = $form->getData();

            $mailerService->sendEmail($formData['email'], $formData['firstName'], $formData['lastName'], $formData['description']);

            $this->addFlash('success', 'Votre message a bien été envoyé');

            return $this->redirectToRoute("home");
        }

        $formView = $form->createView();

        return $this->render('contact/contact.html.twig', [
            'form' => $formView,
        ]);
    }
}
