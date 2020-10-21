<?php
    
    namespace App\Form;
    
    use App\Spec\Search;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    
    class SearchType extends AbstractType {
        
        public function buildForm( FormBuilderInterface $builder, array $options ) {
            
            $builder
                ->add( 'pilote', TextareaType::class )
                ->add( 'research', SubmitType::class );
        }
        
        public function configureOptions( OptionsResolver $resolver ) {
            
            $resolver->setDefaults( [
                'data_class' => Search::class
            ] );
        }
    }
