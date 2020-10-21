<?php
    
    namespace App\Controller;
    
    use App\Form\SearchType;
    use App\Spec\Search;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    
    class SearchController extends AbstractController {
        
        /**
         * @Route("/search", name="search")
         */
        public function index( Request $request ) {
            
            $search = new Search();
            $form = $this->createForm( SearchType::class, $search, [
                'action' => $this->generateUrl( 'search' ),
                'method' => 'GET',
                'csrf_protection' => false
            ] );
            $form->handleRequest( $request );
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                
                /**
                 * Démonstration avec du SQL pure.
                 */
                $conn = $this->getDoctrine()->getConnection();
                $sql = 'select reservation.id, date_vol, duree_vol, nom, prenom from pilote, reservation where pilote_id = pilote.id and nom like :nom order by date_vol';
                dump( $sql );
                $stmt = $conn->prepare( $sql );
                $stmt->execute( [ 'nom' => '%' . $search->getPilote() . '%' ] );
                // returns an array of arrays (i.e. a raw data set)
                $result = $stmt->fetchAll();
                dump( $result );
            }
            
            return $this->render( 'search/index.html.twig', [
                'result' => $result,
                // 'form' => $form->createView(),
            ] );
        }
    }
