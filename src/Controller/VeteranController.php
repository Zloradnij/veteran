<?php

namespace App\Controller;

use App\Entity\Veteran;
use App\Form\VeteranType;
use App\Repository\VeteranRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/veteran')]
class VeteranController extends AbstractController
{
    #[Route('/', name: 'veteran_index', methods: ['GET'])]
    public function index(VeteranRepository $veteranRepository): Response
    {
        return $this->render('veteran/index.html.twig', [
            'veterans' => $veteranRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'veteran_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $veteran = new Veteran();
        $form = $this->createForm(VeteranType::class, $veteran);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($veteran);
            $entityManager->flush();

            return $this->redirectToRoute('veteran_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('veteran/new.html.twig', [
            'veteran' => $veteran,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'veteran_show', methods: ['GET'])]
    public function show(Veteran $veteran): Response
    {
        return $this->render('veteran/show.html.twig', [
            'veteran' => $veteran,
        ]);
    }

    #[Route('/{id}/edit', name: 'veteran_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Veteran $veteran, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(VeteranType::class, $veteran);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('veteran_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('veteran/edit.html.twig', [
            'veteran' => $veteran,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'veteran_delete', methods: ['POST'])]
    public function delete(Request $request, Veteran $veteran, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$veteran->getId(), $request->request->get('_token'))) {
            $entityManager->remove($veteran);
            $entityManager->flush();
        }

        return $this->redirectToRoute('veteran_index', [], Response::HTTP_SEE_OTHER);
    }
}
