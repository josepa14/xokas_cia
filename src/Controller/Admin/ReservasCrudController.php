<?php

namespace App\Controller\Admin;

use App\Entity\Reservas;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReservasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservas::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
