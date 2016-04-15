<?php

use App\Models\StaticPage;
use App\Repositories\StaticPageRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StaticPageRepositoryTest extends TestCase
{
    use MakeStaticPageTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var StaticPageRepository
     */
    protected $staticPageRepo;

    public function setUp()
    {
        parent::setUp();
        $this->staticPageRepo = App::make(StaticPageRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateStaticPage()
    {
        $staticPage = $this->fakeStaticPageData();
        $createdStaticPage = $this->staticPageRepo->create($staticPage);
        $createdStaticPage = $createdStaticPage->toArray();
        $this->assertArrayHasKey('id', $createdStaticPage);
        $this->assertNotNull($createdStaticPage['id'], 'Created StaticPage must have id specified');
        $this->assertNotNull(StaticPage::find($createdStaticPage['id']), 'StaticPage with given id must be in DB');
        $this->assertModelData($staticPage, $createdStaticPage);
    }

    /**
     * @test read
     */
    public function testReadStaticPage()
    {
        $staticPage = $this->makeStaticPage();
        $dbStaticPage = $this->staticPageRepo->find($staticPage->id);
        $dbStaticPage = $dbStaticPage->toArray();
        $this->assertModelData($staticPage->toArray(), $dbStaticPage);
    }

    /**
     * @test update
     */
    public function testUpdateStaticPage()
    {
        $staticPage = $this->makeStaticPage();
        $fakeStaticPage = $this->fakeStaticPageData();
        $updatedStaticPage = $this->staticPageRepo->update($fakeStaticPage, $staticPage->id);
        $this->assertModelData($fakeStaticPage, $updatedStaticPage->toArray());
        $dbStaticPage = $this->staticPageRepo->find($staticPage->id);
        $this->assertModelData($fakeStaticPage, $dbStaticPage->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteStaticPage()
    {
        $staticPage = $this->makeStaticPage();
        $resp = $this->staticPageRepo->delete($staticPage->id);
        $this->assertTrue($resp);
        $this->assertNull(StaticPage::find($staticPage->id), 'StaticPage should not exist in DB');
    }
}
