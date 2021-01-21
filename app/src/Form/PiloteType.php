<?php
    
    namespace App\Form;
    
    use App\Entity\Pilote;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    
    class PiloteType extends AbstractType {
        
        public function buildForm( FormBuilderInterface $builder, array $options ) {
            
            $builder
                ->add( 'nom', TextType::class )
                ->add( 'prenom', TextType::class)
                ->add( 'brevet' )
                ->add( 'qualification' );
        }
        
        public function configureOptions( OptionsResolver $resolver ) {
            
            $resolver->setDefaults( [
                'data_class' => Pilote::class,
            ] );
        }
    }
