<?php

namespace App\Controller\Admin;

use App\Entity\Task;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class TaskCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Task::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield FormField::addFieldset('Task Details');
        yield TextField::new('title')
            ->setColumns(6);

        yield AssociationField::new('project')
            ->setColumns(2)
            ->autocomplete();

        yield ChoiceField::new('status')
            ->setColumns(2);

        yield ChoiceField::new('task_type')
            ->setLabel('Type')
            ->setColumns(2);

        yield TextEditorField::new('description')
            ->setRequired(false)
            ->setColumns(12);

        yield DateField::new('start_date')
            ->setRequired(false)
            ->setColumns(2)
            ->setFormat(DateTimeField::FORMAT_MEDIUM)
            ->setTimezone('Africa/Cairo');

        yield DateField::new('due_date')
            ->setRequired(false)
            ->setColumns(2)
            ->setFormat(DateTimeField::FORMAT_MEDIUM)
            ->setTimezone('Africa/Cairo');

        yield ChoiceField::new('priority')
            ->setRequired(false)
            ->setColumns(2);

        yield TimeField::new('time')
            ->setRequired(false)
            ->setColumns(2);

        yield MoneyField::new('price')
            ->setRequired(false)
            ->setColumns(2)
            ->setCurrency('USD');

        yield MoneyField::new('total')
            ->setRequired(false)
            ->setColumns(2)
            ->setCurrency('USD');
    }

}
