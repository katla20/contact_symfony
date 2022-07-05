<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Contact;
use App\Entity\User;

class ContactListController extends AbstractController
{
    private $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
       $this->doctrine = $doctrine;
    }
    #[Route('/contact/list', name: 'app_contact_list')]
    public function index(): Response
    {
        $contact = $this->doctrine->getRepository(Contact::class)->findAll();
        dd($contact);

        if (!$contact) {
            throw $this->createNotFoundException('products empty');
        }

        return $this->json($contact);

        /*return $this->render('contact_list/index.html.twig', [
            'controller_name' => 'ContactListController',
        ]);*/
    }
    public function show(int $id): Response
    {
        $contact = $this->doctrine->getRepository(Contact::class)->find($id);

        if (!$contact) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        return $this->json($contact);

        //return new Response('Check out: '.$contact->getMessage());

        // or render a template
        // in the template, print things with {{ product.name }}
        // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
