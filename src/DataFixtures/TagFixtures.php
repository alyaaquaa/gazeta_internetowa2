<?php
namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
public function load(ObjectManager $manager)
{
$tags = ['Tag1', 'Tag2', 'Tag3', 'Tag4', 'Tag5'];

foreach ($tags as $key => $tagName) {
$tag = new Tag();
$tag->setTitle($tagName);
$manager->persist($tag);
$this->addReference('tag_'.$key, $tag);
}

$manager->flush();
}
}
