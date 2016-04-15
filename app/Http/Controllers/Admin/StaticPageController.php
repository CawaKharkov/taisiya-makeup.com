<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateStaticPageRequest;
use App\Http\Requests\Admin\UpdateStaticPageRequest;
use App\Repositories\Admin\StaticPageRepository;
use Illuminate\Http\Request;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class StaticPageController extends AppBaseController
{
    /** @var  StaticPageRepository */
    private $staticPageRepository;

    public function __construct(StaticPageRepository $staticPageRepo)
    {
        $this->staticPageRepository = $staticPageRepo;
    }

    /**
     * Display a listing of the StaticPage.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->staticPageRepository->pushCriteria(new RequestCriteria($request));
        $staticPages = $this->staticPageRepository->all();

        return view('admin.staticPages.index')
            ->with('staticPages', $staticPages);
    }

    /**
     * Show the form for creating a new StaticPage.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.staticPages.create');
    }

    /**
     * Store a newly created StaticPage in storage.
     *
     * @param CreateStaticPageRequest $request
     *
     * @return Response
     */
    public function store(CreateStaticPageRequest $request)
    {
        $input = $request->all();

        $staticPage = $this->staticPageRepository->create($input);

        Flash::success('StaticPage saved successfully.');

        return redirect(route('admin.staticPages.index'));
    }

    /**
     * Display the specified StaticPage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $staticPage = $this->staticPageRepository->findWithoutFail($id);

        if (empty($staticPage)) {
            Flash::error('StaticPage not found');

            return redirect(route('staticPages.index'));
        }

        return view('admin.staticPages.show')->with('staticPage', $staticPage);
    }

    /**
     * Show the form for editing the specified StaticPage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $staticPage = $this->staticPageRepository->findWithoutFail($id);

        if (empty($staticPage)) {
            Flash::error('StaticPage not found');

            return redirect(route('admin.staticPages.index'));
        }

        return view('admin.staticPages.edit')->with('staticPage', $staticPage);
    }

    /**
     * Update the specified StaticPage in storage.
     *
     * @param  int              $id
     * @param UpdateStaticPageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStaticPageRequest $request)
    {
        $staticPage = $this->staticPageRepository->findWithoutFail($id);

        if (empty($staticPage)) {
            Flash::error('StaticPage not found');

            return redirect(route('admin.staticPages.index'));
        }

        $staticPage = $this->staticPageRepository->update($request->all(), $id);

        Flash::success('StaticPage updated successfully.');

        return redirect(route('admin.staticPages.index'));
    }

    /**
     * Remove the specified StaticPage from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $staticPage = $this->staticPageRepository->findWithoutFail($id);

        if (empty($staticPage)) {
            Flash::error('StaticPage not found');

            return redirect(route('admin.staticPages.index'));
        }

        $this->staticPageRepository->delete($id);

        Flash::success('StaticPage deleted successfully.');

        return redirect(route('admin.staticPages.index'));
    }
}
