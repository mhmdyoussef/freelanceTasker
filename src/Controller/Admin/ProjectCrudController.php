<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('name');

        yield AssociationField::new('client')
            ->autocomplete();

        yield ChoiceField::new('platform');

        yield UrlField::new('domain_name');

        yield TextEditorField::new('credentials');

        yield MoneyField::new('budget')
            ->setCurrency('USD')
            ->hideOnIndex();

        yield MoneyField::new('hourly_rate')
            ->setCurrency('USD');
    }

}
