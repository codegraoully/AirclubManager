<?php
    
    namespace App\Controller;
    
    use App\Entity\Qualification;
    use App\Form\QualificationType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    /**
     * @Route("/qualification")
     */
    class QualificationController extends AbstractController {
        
        /**
         * @Route("/", name="qualification_index", methods={"GET"})
         */
        public function index(): Response {
            
            $qualifications = $this->getDoctrine()
                ->getRepository( Qualification::class )
                ->findAll();
            
            return $this->render( 'qualification/index.html.twig', [
                'qualifications' => $qualifications,
            ] );
        }
        
        /**
         * @Route("/new", name="qualification_new", methods={"GET","POST"})
         */
        public function new( Request $request ): Response {
            
            $qualification = new Qualification();
            $form = $this->createForm( QualificationType::class, $qualification );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist( $qualification );
                $entityManager->flush();
                
                return $this->redirectToRoute( 'qualification_index' );
            }
            
            return $this->render( 'qualification/new.html.twig', [
                'qualification' => $qualification,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="qualification_show", methods={"GET"})
         */
        public function show( Qualification $qualification ): Response {
            
            return $this->render( 'qualification/show.html.twig', [
                'qualification' => $qualification,
            ] );
        }
        
        /**
         * @Route("/{id}/edit", name="qualification_edit", methods={"GET","POST"})
         */
        public function edit( Request $request, Qualification $qualification ): Response {
            
            $form = $this->createForm( QualificationType::class, $qualification );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $this->getDoctrine()->getManager()->flush();
                
                return $this->redirectToRoute( 'qualification_index' );
            }
            
            return $this->render( 'qualification/edit.html.twig', [
                'qualification' => $qualification,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="qualification_delete", methods={"DELETE"})
         */
        public function delete( Request $request, Qualification $qualification ): Response {
            
            if ( $this->isCsrfTokenValid( 'delete' . $qualification->getId(), $request->request->get( '_token' ) ) ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove( $qualification );
                $entityManager->flush();
            }
            
            return $this->redirectToRoute( 'qualification_index' );
        }
    }
