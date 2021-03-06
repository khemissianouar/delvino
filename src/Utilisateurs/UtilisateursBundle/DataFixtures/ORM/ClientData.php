<?php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\client;

class ClientData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new client();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Catelain');
        $adresse1->setPrenom('Benjamin');
        $adresse1->setTelephone('0600000000');
        $adresse1->setAdresse('3 rue alberta rubosca');
        $adresse1->setCp('76600');
        $adresse1->setPays('France');
        $adresse1->setVille('Le Havre');
        $manager->persist($adresse1);

        $adresse2 = new client();
        $adresse2->setUtilisateur($this->getReference('utilisateur3'));
        $adresse2->setNom('premier');
        $adresse2->setPrenom('albert');
        $adresse2->setTelephone('0600000000');
        $adresse2->setAdresse('5 rue rubosca');
        $adresse2->setCp('76600');
        $adresse2->setPays('France');
        $adresse2->setVille('Le Havre');
        $manager->persist($adresse2);

        $manager->flush();
    }

    public function getOrder()
    {
        return 11;
    }
}
