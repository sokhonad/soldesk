<?php

namespace App\Form;

use App\Entity\Affectation;
use App\Entity\Categorie;
use App\Entity\Domaine;
use App\Entity\Priorite;
use App\Entity\SDomaine;
use App\Entity\Statut;
use App\Entity\Ticket;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',TextType::class)
            ->add('categorie',EntityType::class,[
                'class' => Categorie::class,'choice_label'=>'nom'])
            ->add('priorite',EntityType::class,[
            'class' => Priorite::class,'choice_label'=>'nom'])
            ->add('domaine',EntityType::class,[
            'class' => Domaine::class,'choice_label'=>'nom'])
            ->add('sdomaine',EntityType::class,[
                'class' => SDomaine::class,'choice_label'=>'nom'])
            ->add('statut',EntityType::class,[
                'class' => Statut::class,'choice_label'=>'nom'])
            ->add('affectation',EntityType::class,[
                'class' => Affectation::class,'choice_label'=>'nom'])
            ->add('commentaire', TextareaType::class)


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
