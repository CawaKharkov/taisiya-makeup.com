<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CategoryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', ['class' => 'col-md-6'])
            ->add('slug', 'text')
            ->add('name', 'text')
            ->end()
            ->with('Meta data', ['class' => 'col-md-6'])
            ->add('description', 'sonata_simple_formatter_type', array(
                'format' => 'richhtml',
                'ckeditor_context' => 'default', // optional
            ))
            ->end()
            ->with('Image')
            ->add('image', 'sonata_type_admin', [
            ]); //sonata_type_admin
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('slug');
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('slug');
        $listMapper->addIdentifier('name')
            ->add('image', null, array(
                'template' => 'partials/image.html.twig'
            ));
    }
}


