<?php
    
    namespace App\Form;
    
    use App\Entity\Brevet;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    
    class BrevetType extends AbstractType {
        
        public function buildForm( FormBuilderInterface $builder, array $options ) {
            
            $builder
                ->add( 'libelle' )
                ->add( 'pilote' );
        }
        
        public function configureOptions( OptionsResolver $resolver ) {
            
            $resolver->setDefaults( [
                'data_class' => Brevet::class,
            ] );
        }
    }
