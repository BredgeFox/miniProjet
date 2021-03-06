<?php
namespace App\DataFixtures;

use App\Entity\Evenement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class EvenementFixtures extends Fixture implements DependentFixtureInterface
{
    /**
     * @param ObjectManager $manager
     *
     * @return void
     */
    public function load(ObjectManager $manager) : void
    {
        $event1 = new Evenement();
        $description = <<< _lorem
        Pique nique en plein air, apporté vos casse-croute et éventuelement de quoi pratique une ou deux activités collectives.
        _lorem;
        $event1 ->setTitre('Evenement 1')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Grandchamp des fontaines")
                ->setAdresse("Plan d'eau du Brossais")
                ->setDateDebut(new \DateTime('10/04/2021 14:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 18:00:00'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-Plein-air')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($event1);

        $event2 = new Evenement();
        $description = <<< _lorem
        Une nuit du hack est organisé sur les poste de la bibliothèque univercitaire, venez vous confronter a vos camarade de différente promotion pour savoir qui sont les meilleurs hackeurs
        _lorem;
        $event2 ->setTitre('Evenement 2')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Nantes")
                ->setAdresse("2 Chemin de la Houssinière")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-1')));
        $manager->persist($event2);

        $event3 = new Evenement();
        //L'absence de modification de $description est volontaire
        $event3 ->setTitre('Evenement 3')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Paris")
                ->setAdresse("2 rue mont parnasse")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-3')));
        $manager->persist($event3);

        $event4 = new Evenement();
        //L'absence de modification de $description est volontaire
        $event4 ->setTitre('Evenement 4')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Lyon")
                ->setAdresse("2 rue de la montagne")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-4')));
        $manager->persist($event4);

        $event5 = new Evenement();
        //L'absence de modification de $description est volontaire
        $event5 ->setTitre('Evenement 5')
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Nice")
                ->setAdresse("Rue de nice")
                ->setDateDebut(new \DateTime('10/04/2021 18:00:00'))
                ->setDateFin(new \DateTime('10/04/2021 23:59:59'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-5')));
        $manager->persist($event5);

        $event6 = new Evenement();
        $description = <<< _lorem
        Soirée d'ouverture de site de gestion des événement. Le dévelopement est encore en cour soyez indulgent ;D !
        _lorem;
        $event6 ->setTitre("Soirée d'inauguration du site")
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Internet")
                ->setAdresse("GestionEvenementANEM.fr")
                ->setDateDebut(new \DateTime('03/07/2021 14:00:00'))
                ->setDateFin(new \DateTime('03/07/2021 18:00:00'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-LAN')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($event6);

        $event7 = new Evenement();
        $description = <<< _lorem
        Soirée appérétif et non d'intégration, entre étudiant de l'université pour le début d'année
        _lorem;
        $event7 ->setTitre("Soirée apprérétif")
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Londres")
                ->setAdresse("Rue de londres")
                ->setDateDebut(new \DateTime('10/10/2020 14:00:00'))
                ->setDateFin(new \DateTime('10/10/2020 18:00:00'))
                ->setCotisation(0)
                ->setIdType($manager->merge($this->getReference('Type-Buvette')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-2')));
        $manager->persist($event7);

        $event8 = new Evenement();
        $description = <<< _lorem
        Bal de costumé de fin d'année univercitaire, avec pour thématique les princessses. Surprenez-nous !
        _lorem;
        $event8 ->setTitre("Bal")
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Rome")
                ->setAdresse("Rue de Rome")
                ->setDateDebut(new \DateTime('07/15/2021 14:00:00'))
                ->setDateFin(new \DateTime('07/20/2021 18:00:00'))
                ->setCotisation(20)
                ->setIdType($manager->merge($this->getReference('Type-Danse')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-12')));
        $manager->persist($event8);

        $event9 = new Evenement();
        $description = <<< _lorem
        Tournoi football
        _lorem;
        $event9 ->setTitre("Tournoi")
                ->setDescription($description)
                ->setNbPlace(null)
                ->setVille("Madrid")
                ->setAdresse("Rue de Madrid")
                ->setDateDebut(new \DateTime('07/20/2021 18:00:00'))
                ->setDateFin(new \DateTime('07/25/2021 23:59:59'))
                ->setCotisation(30)
                ->setIdType($manager->merge($this->getReference('Type-Plein-air')))
                ->setIdOrganisateur($manager->merge($this->getReference('User-12')));
        $manager->persist($event9);

        $manager->flush();

        $this->addReference('Evenement-1', $event1);
        $this->addReference('Evenement-2', $event2);
        $this->addReference('Evenement-3', $event3);
        $this->addReference('Evenement-4', $event4);
        $this->addReference('Evenement-5', $event5);
        $this->addReference('Evenement-6', $event6);
        $this->addReference('Evenement-7', $event7);
        $this->addReference('Evenement-8', $event8);
        $this->addReference('Evenement-9', $event9);

    }

    /**
     * @return array
     */
    public function getDependencies(): array
    {
        return [
            TypeFixtures::class,
            UtilisateurFixtures::class,
        ];
    }
}
