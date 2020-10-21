<?php
    
    namespace App\Controller;
    
    use App\Entity\Pilote;
    use App\Form\PiloteType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    /**
     * @Route("/pilote")
     */
    class PiloteController extends AbstractController {
        
        /**
         * @Route("/", name="pilote_index", methods={"GET"})
         */
        public function index(): Response {
            
            $pilotes = $this->getDoctrine()
                ->getRepository( Pilote::class )
                ->findAll();
            
            return $this->render( 'pilote/index.html.twig', [
                'pilotes' => $pilotes,
            ] );
        }
        
        /**
         * @Route("/new", name="pilote_new", methods={"GET","POST"})
         */
        public function new( Request $request ): Response {
            
            $pilote = new Pilote();
            $form = $this->createForm( PiloteType::class, $pilote );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist( $pilote );
                $entityManager->flush();
                
                return $this->redirectToRoute( 'pilote_index' );
            }
            
            return $this->render( 'pilote/new.html.twig', [
                'pilote' => $pilote,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="pilote_show", methods={"GET"})
         */
        public function show( Pilote $pilote ): Response {
            
            return $this->render( 'pilote/show.html.twig', [
                'pilote' => $pilote,
            ] );
        }
        
        /**
         * @Route("/{id}/edit", name="pilote_edit", methods={"GET","POST"})
         */
        public function edit( Request $request, Pilote $pilote ): Response {
            
            $form = $this->createForm( PiloteType::class, $pilote );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $this->getDoctrine()->getManager()->flush();
                
                return $this->redirectToRoute( 'pilote_index' );
            }
            
            return $this->render( 'pilote/edit.html.twig', [
                'pilote' => $pilote,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="pilote_delete", methods={"DELETE"})
         */
        public function delete( Request $request, Pilote $pilote ): Response {
            
            if ( $this->isCsrfTokenValid( 'delete' . $pilote->getId(), $request->request->get( '_token' ) ) ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove( $pilote );
                $entityManager->flush();
            }
            
            return $this->redirectToRoute( 'pilote_index' );
        }
    }
