<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\LoisirsType;
use AppBundle\Entity\Loisirs;

/**
 * @Route("/loisir")
 *
 */
 class LoisirsController extends Controller
 {
     /**
      * @Route("/create", name="create_loisirs")
      * @Template()
      */
      
     public function createAction()
     {
         $loisir=new Loisirs();
         $form=$this->createForm(LoisirsType::class, $loisir);
         
         return array(
             'entity'=>$loisir,
             'form'=>$form->createView(),
        );
     }
     /**
      * @Route("/create_valid", name="validate_create_loisir")
      * @Method("POST")
      */
     
     public function validateLoisirsAction(Request $request)
     {
         $loisir=new Loisirs();
         $form=$this->createForm(LoisirsType::class, $loisir);
         $form->handleRequest($request);
         
         if ($form->isSubmitted() && $form->isValid()) {
             $eManager = $this->getDoctrine()->getManager();
             $eManager->persist($loisir);
             $eManager->flush();
             
             return $this->redirectToRoute('homepage');
         }
         
         return $this->redirectToRoute('create_loisir', array(
             'entity'=>$loisir,
             'form'=>$form->createView(),
        ));
     }
    
     /**
      * @Route("/edit/{id}", name="edit_loisirs")
      * @Template()
      */
     
     public function editAction($id)
     {
         $eManager=$this->getDoctrine()->getManager();
         $loisir=$eManager->getRepository("AppBundle:Loisirs")->FindOneBy(["id"=>$id]);
         $form=$this->createForm(LoisirsType::class, $loisir);
         return array(
       'entity'=>$loisir,
       'form'=>$form->createView());
     }
     
     /**
     * @Route("/edit_valid/{id}", name="validate_edit_loisir")
     * @Method("POST")
     */
     public function validateEditLoisirAction(Request $request, $id)
     {
         $eManager = $this->getDoctrine()->getManager();
         $loisir = $eManager->getRepository("AppBundle:Loisirs")->FindOneBy(["id" => $id]);
         $form = $this->createForm(LoisirsType::class, $loisir);
         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $eManager->persist($loisir);
             $eManager->flush();
             return $this->redirectToRoute('homepage');
         }
         return $this->redirectToRoute('create_loisir', array(
            'entity' => $loisir,
            'form' => $form->createView(),
        ));
     }
    
    
    
     /**
     * @Route("/delete/{id}", name="delete_loisirs")
     * @Template()
     */
     
     public function deleteAction($id)
     {
         $eManager=$this->getDoctrine()->getManager();
         $loisir=$eManager->getRepository("AppBundle:Loisirs")->FindOneBy(["id"=>$id]);
         $eManager->remove($loisir);
         $eManager->flush();
         return $this->redirectToRoute('homepage');
     }
 }
