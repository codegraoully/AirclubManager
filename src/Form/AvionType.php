<?php
    
    namespace App\Form;
    
    use App\Entity\Avion;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\NumberType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    
    class AvionType extends AbstractType {
        
        public function buildForm( FormBuilderInterface $builder, array $options ) {
            
            $builder
                ->add( 'immatriculation' )
                ->add( 'nombrePlaces', NumberType::class )
                ->add( 'nombreHeuresVol', NumberType::class, ['scale' => 1] )
                ->add( 'prix', NumberType::class, ['scale' => 1]  )
                ->add( 'typeAvion' );
        }
        
        public function configureOptions( OptionsResolver $resolver ) {
            
            $resolver->setDefaults( [
                'data_class' => Avion::class,
            ] );
        }
    }
