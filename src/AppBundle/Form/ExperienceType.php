<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ExperienceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('required'=>true));
        $builder->add('name', TextType::class, array('required'=>true));
        $builder->add('dateDebut', TextType::class, array('required'=>true));
        $builder->add('dateFin', TextType::class, array('required'=>true));
        $builder->add('lieu', TextType::class, array('required'=>true));
        $builder->add('save', SubmitType::class, array(
            'attr' => array('class' => 'save'),
        ));
    }
    public function getBlockPrefix()
    {
        return 'form_experience';
    }
}
