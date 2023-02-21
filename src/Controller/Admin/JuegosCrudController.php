<?php

namespace App\Controller\Admin;

use App\Entity\Juegos;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class JuegosCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Juegos::class;
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
