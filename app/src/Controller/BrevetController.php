<?php
    
    namespace App\Controller;
    
    use App\Entity\Brevet;
    use App\Form\BrevetType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    /**
     * @Route("/brevet")
     */
    class BrevetController extends AbstractController {
        
        /**
         * @Route("/", name="brevet_index", methods={"GET"})
         */
        public function index(): Response {
            
            $brevets = $this->getDoctrine()
                ->getRepository( Brevet::class )
                ->findAll();
            
            return $this->render( 'brevet/index.html.twig', [
                'brevets' => $brevets,
            ] );
        }
        
        /**
         * @Route("/new", name="brevet_new", methods={"GET","POST"})
         */
        public function new( Request $request ): Response {
            
            $brevet = new Brevet();
            $form = $this->createForm( BrevetType::class, $brevet );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist( $brevet );
                $entityManager->flush();
                
                return $this->redirectToRoute( 'brevet_index' );
            }
            
            return $this->render( 'brevet/new.html.twig', [
                'brevet' => $brevet,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="brevet_show", methods={"GET"})
         */
        public function show( Brevet $brevet ): Response {
            
            return $this->render( 'brevet/show.html.twig', [
                'brevet' => $brevet,
            ] );
        }
        
        /**
         * @Route("/{id}/edit", name="brevet_edit", methods={"GET","POST"})
         */
        public function edit( Request $request, Brevet $brevet ): Response {
            
            $form = $this->createForm( BrevetType::class, $brevet );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $this->getDoctrine()->getManager()->flush();
                
                return $this->redirectToRoute( 'brevet_index' );
            }
            
            return $this->render( 'brevet/edit.html.twig', [
                'brevet' => $brevet,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="brevet_delete", methods={"DELETE"})
         */
        public function delete( Request $request, Brevet $brevet ): Response {
            
            if ( $this->isCsrfTokenValid( 'delete' . $brevet->getIdbrevet(), $request->request->get( '_token' ) ) ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove( $brevet );
                $entityManager->flush();
            }
            
            return $this->redirectToRoute( 'brevet_index' );
        }
    }
