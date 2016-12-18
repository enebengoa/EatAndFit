<?php

// src/App/AdminBundle/EventListener/BrochureUploadListener.php

namespace App\AdminBundle\EventListener;



use Symfony\Component\HttpFoundation\File\UploadedFile;

use Doctrine\ORM\Event\LifecycleEventArgs;

use Doctrine\ORM\Event\PreUpdateEventArgs;

use App\AdminBundle\Entity\Receta;

use App\AdminBundle\Entity\Utensilio    ;

use App\AdminBundle\FileUploader;



class BrochureUploadListener

{

    private $uploader;



    public function __construct(FileUploader $uploader)

    {

        $this->uploader = $uploader;

    }



    public function prePersist(LifecycleEventArgs $args)

    {

        $entity = $args->getEntity();



        $this->uploadFile($entity);

    }



    public function preUpdate(PreUpdateEventArgs $args)

    {
        echo "string";

        $entity = $args->getEntity();



        $this->uploadFile($entity);

    }



    private function uploadFile($entity)

    {

        // upload only works for Product entities

        if (!$entity instanceof Receta && !$entity instanceof Utensilio ) {

            return;

        }

        
        $file = $entity->getImagen();



        // only upload new files

        if (!$file instanceof UploadedFile) {

            return;

        }



        $fileName = $this->uploader->upload($file);

        $entity->setImagen($fileName);

    }

}