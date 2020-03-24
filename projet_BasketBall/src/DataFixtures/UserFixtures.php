<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    /**
 * @inheritDoc
 */
    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('oui');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'oui'
        ));
        $user->setRoles(['ROLE_ADMIN']);
        
        $manager->persist($user);
        $manager->flush();
    }
    
   
}
