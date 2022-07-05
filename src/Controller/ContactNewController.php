<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Psr\Log\LoggerInterface;

class ContactNewController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact_new/index.html.twig', [
            'controller_name' => 'ContactNewController',
        ]);
    }

    #[Route('/contact/new', name: 'app_contact_new')]
    public function createContact(ManagerRegistry $doctrine): Response
    {
       $em = $doctrine->getManager();
        $user = new User();
        $user->setName('keyla');
        $user->setLastname('bullon');
        $user->setEmail('keylabullon@gmail.com');
        $user->setPhone('+573132856469');
        $em->persist($user);
        $em->flush();

        return new Response('Check out !!');

    }
}
