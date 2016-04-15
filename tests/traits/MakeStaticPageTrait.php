<?php

use Faker\Factory as Faker;
use App\Models\Admin\StaticPage;
use App\Repositories\Admin\StaticPageRepository;

trait MakeStaticPageTrait
{
    /**
     * Create fake instance of StaticPage and save it in database
     *
     * @param array $staticPageFields
     * @return StaticPage
     */
    public function makeStaticPage($staticPageFields = [])
    {
        /** @var StaticPageRepository $staticPageRepo */
        $staticPageRepo = App::make(StaticPageRepository::class);
        $theme = $this->fakeStaticPageData($staticPageFields);
        return $staticPageRepo->create($theme);
    }

    /**
     * Get fake instance of StaticPage
     *
     * @param array $staticPageFields
     * @return StaticPage
     */
    public function fakeStaticPage($staticPageFields = [])
    {
        return new StaticPage($this->fakeStaticPageData($staticPageFields));
    }

    /**
     * Get fake data of StaticPage
     *
     * @param array $postFields
     * @return array
     */
    public function fakeStaticPageData($staticPageFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'content' => $fake->text,
            'metaTags' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $staticPageFields);
    }
}
