<?php

namespace App\Tests\Controller;

use App\Entity\Partenaire;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class PartenaireControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $partenaireRepository;
    private string $path = '/partenaire/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->partenaireRepository = $this->manager->getRepository(Partenaire::class);

        foreach ($this->partenaireRepository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $this->client->followRedirects();
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Partenaire index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'partenaire[idPartenaire]' => 'Testing',
            'partenaire[nom]' => 'Testing',
            'partenaire[telephone]' => 'Testing',
            'partenaire[email]' => 'Testing',
        ]);

        self::assertResponseRedirects($this->path);

        self::assertSame(1, $this->partenaireRepository->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Partenaire();
        $fixture->setIdPartenaire('My Title');
        $fixture->setNom('My Title');
        $fixture->setTelephone('My Title');
        $fixture->setEmail('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Partenaire');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Partenaire();
        $fixture->setIdPartenaire('Value');
        $fixture->setNom('Value');
        $fixture->setTelephone('Value');
        $fixture->setEmail('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'partenaire[idPartenaire]' => 'Something New',
            'partenaire[nom]' => 'Something New',
            'partenaire[telephone]' => 'Something New',
            'partenaire[email]' => 'Something New',
        ]);

        self::assertResponseRedirects('/partenaire/');

        $fixture = $this->partenaireRepository->findAll();

        self::assertSame('Something New', $fixture[0]->getIdPartenaire());
        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getTelephone());
        self::assertSame('Something New', $fixture[0]->getEmail());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Partenaire();
        $fixture->setIdPartenaire('Value');
        $fixture->setNom('Value');
        $fixture->setTelephone('Value');
        $fixture->setEmail('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/partenaire/');
        self::assertSame(0, $this->partenaireRepository->count([]));
    }
}
