<?php
    
    namespace App\Form;
    
    use App\Entity\TypeAvion;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    
    class TypeAvionType extends AbstractType {
        
        public function buildForm( FormBuilderInterface $builder, array $options ) {
            
            $builder
                ->add( 'libelle' );
        }
        
        public function configureOptions( OptionsResolver $resolver ) {
            
            $resolver->setDefaults( [
                'data_class' => TypeAvion::class,
            ] );
        }
    }
