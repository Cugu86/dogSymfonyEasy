 /**
     * @Route("/profile/others/{id}", name= "profile_others"  ) 
     */

    public function othersAction($id)
    {
      
       dump($id);  
       $em = $this->getDoctrine()->getManager();
       $user= $em->getRepository('AppBundle:User')->findByUsername($id);


       dump($user);

       

       //$idUser= $idUser->getId();

       //dump($idUser);
       

      // $emDog = $this->getDoctrine()->getManager();
      // $dogs = $emDog->getRepository('AppBundle:Dog')->findByUserFK($idUser);
      // dump($dogs);
     

       return $this->render('dog/other_profile.html.twig');
       
    }
