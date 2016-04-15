<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StaticPageApiTest extends TestCase
{
    use MakeStaticPageTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateStaticPage()
    {
        $staticPage = $this->fakeStaticPageData();
        $this->json('POST', '/api/v1/staticPages', $staticPage);

        $this->assertApiResponse($staticPage);
    }

    /**
     * @test
     */
    public function testReadStaticPage()
    {
        $staticPage = $this->makeStaticPage();
        $this->json('GET', '/api/v1/staticPages/'.$staticPage->id);

        $this->assertApiResponse($staticPage->toArray());
    }

    /**
     * @test
     */
    public function testUpdateStaticPage()
    {
        $staticPage = $this->makeStaticPage();
        $editedStaticPage = $this->fakeStaticPageData();

        $this->json('PUT', '/api/v1/staticPages/'.$staticPage->id, $editedStaticPage);

        $this->assertApiResponse($editedStaticPage);
    }

    /**
     * @test
     */
    public function testDeleteStaticPage()
    {
        $staticPage = $this->makeStaticPage();
        $this->json('DELETE', '/api/v1/staticPages/'.$staticPage->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/staticPages/'.$staticPage->id);

        $this->assertResponseStatus(404);
    }
}
