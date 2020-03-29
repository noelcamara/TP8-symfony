<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Form\MatchsType;
use App\Repository\MatchsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/matchs")
 */
class MatchsController extends AbstractController
{
    /**
     * @Route("/", name="matchs_index", methods={"GET"})
     */
    public function index(MatchsRepository $matchsRepository): Response
    {
        return $this->render('matchs/index.html.twig', [
            'matchs' => $matchsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="matchs_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $match = new Matchs();
        $form = $this->createForm(MatchsType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($match);
            $entityManager->flush();

            return $this->redirectToRoute('matchs_index');
        }

        return $this->render('matchs/new.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_match}", name="matchs_show", methods={"GET"})
     */
    public function show(Matchs $match): Response
    {
        return $this->render('matchs/show.html.twig', [
            'match' => $match,
        ]);
    }

    /**
     * @Route("/{id_match}/edit", name="matchs_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Matchs $match): Response
    {
        $form = $this->createForm(MatchsType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('matchs_index');
        }

        return $this->render('matchs/edit.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_match}", name="matchs_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Matchs $match): Response
    {
        if ($this->isCsrfTokenValid('delete'.$match->getIdMatch(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($match);
            $entityManager->flush();
        }

        return $this->redirectToRoute('matchs_index');
    }
}
