<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hey/{name}/{firstname}", name="homepage")
     * @Template()
     *
     * @param Request $request the request
     *
     * @return array
    */
    public function indexAction($name = "Demas", $firstname = "Juliette", Request $request)
    {
        // replace this example code with whatever you need
        /*return
        $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        
   
        $forms = $this->getDoctrine()->getRepository("AppBundle:Formation")->findAll();
        $loisirs = $this->getDoctrine()->getRepository('AppBundle:Loisirs')->findAll();
        $xp = $this->getDoctrine()->getRepository('AppBundle:Experience')->findAll();
        return array('name'=>$name,'firstname'=>$firstname,'formations'=>$forms,'loisirs'=>$loisirs,'experience'=>$xp);
    }
    /**
     *  @Route("/demo", name="demopage")
     * @Template()
     */
    public function demoAction(Request $request)
    {
        // replace this example code with whatever you need
        /*return
        $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        
        return array();
    }
    
    /**
     *  @Route("/admin", name="admin")
     * @Template()
     */
    public function adminAction(Request $request)
    {
        return $this->redirectToRoute('homepage');
    }
    
    /**
     * @Route("/bye", name="formation")
     * @Template()
     */
    public function insertAction()
    {
        // replace this example code with whatever you need
        /*return
        $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);*/
        
        $form = new Formation();
        $form->setName('Ma formation');
        $eManager = $this->getDoctrine()->getManager();
        $eManager->persist($form);
        $eManager->flush();
    }
}
