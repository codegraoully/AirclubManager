<?php
    
    namespace App\Controller;
    
    use App\Entity\TypeAvion;
    use App\Form\TypeAvionType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    
    /**
     * @Route("/type/avion")
     */
    class TypeAvionController extends AbstractController {
        
        /**
         * @Route("/", name="type_avion_index", methods={"GET"})
         */
        public function index(): Response {
            
            $typeAvions = $this->getDoctrine()
                ->getRepository( TypeAvion::class )
                ->findAll();
            
            return $this->render( 'type_avion/index.html.twig', [
                'type_avions' => $typeAvions,
            ] );
        }
        
        /**
         * @Route("/new", name="type_avion_new", methods={"GET","POST"})
         */
        public function new( Request $request ): Response {
            
            $typeAvion = new TypeAvion();
            $form = $this->createForm( TypeAvionType::class, $typeAvion );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist( $typeAvion );
                $entityManager->flush();
                
                return $this->redirectToRoute( 'type_avion_index' );
            }
            
            return $this->render( 'type_avion/new.html.twig', [
                'type_avion' => $typeAvion,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="type_avion_show", methods={"GET"})
         */
        public function show( TypeAvion $typeAvion ): Response {
            
            return $this->render( 'type_avion/show.html.twig', [
                'type_avion' => $typeAvion,
            ] );
        }
        
        /**
         * @Route("/{id}/edit", name="type_avion_edit", methods={"GET","POST"})
         */
        public function edit( Request $request, TypeAvion $typeAvion ): Response {
            
            $form = $this->createForm( TypeAvionType::class, $typeAvion );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                $this->getDoctrine()->getManager()->flush();
                
                return $this->redirectToRoute( 'type_avion_index' );
            }
            
            return $this->render( 'type_avion/edit.html.twig', [
                'type_avion' => $typeAvion,
                'form' => $form->createView(),
            ] );
        }
        
        /**
         * @Route("/{id}", name="type_avion_delete", methods={"DELETE"})
         */
        public function delete( Request $request, TypeAvion $typeAvion ): Response {
            
            if ( $this->isCsrfTokenValid( 'delete' . $typeAvion->getId(), $request->request->get( '_token' ) ) ) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove( $typeAvion );
                $entityManager->flush();
            }
            
            return $this->redirectToRoute( 'type_avion_index' );
        }
    }
