<?php
    
    namespace App\Controller;
    
    use App\Entity\Facture;
    use App\Entity\Reservation;
    use App\Form\FactureType;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Routing\Annotation\Route;
    
    class FactureController extends AbstractController {
        
        /**
         * @Route("/facture", name="facture")
         */
        public function index(Request $request) {
    
            /**
             * @var $reservation Reservation
             */
        
            $entityManager = $this->getDoctrine()->getManager();
    
            $reservation_id = $request->query->get('reservation_id');
            $reservation = new Reservation();
            $reservation = $entityManager->getRepository(Reservation::class)->find($reservation_id);
    
            $facture = new Facture();
            
            $form = $this->createForm(FactureType::class, $facture);
            $form->handleRequest( $request );
            
            $conn = $this->getDoctrine()->getConnection();
            $sql = 'select reservation.id, duree_vol, prix, duree_vol * prix as montant
                    from reservation, avion
                    where avion.id = avion_id
                    and reservation.id = :reservation_id;';
            $stmt = $conn->prepare($sql);
            $stmt->execute(['reservation_id' => $reservation_id]);
            $resultat = $stmt->fetchAll();
            
            if ( $form->isSubmitted() && $form->isValid() ) {
                
                /**
                 * Utilisation de l'ORM Doctrine au lieu de:
                 * INSERT INTO facture values ( :montant );
                 */
                
                $entityManager->persist( $facture );
                $reservation->setFacture( $facture );
                $entityManager->persist( $reservation );
                $entityManager->flush();
                
                
                return $this->redirectToRoute( 'reservation_index' );
            } else {
                $form->get('montant')->setData($resultat[0]["montant"]);
            }
            
            return $this->render( 'facture/index.html.twig', [
                'form' => $form->createView()
            ] );
        }
    }
