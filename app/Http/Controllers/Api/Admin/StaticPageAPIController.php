<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Requests\API\Admin\CreateStaticPageAPIRequest;
use App\Http\Requests\API\Admin\UpdateStaticPageAPIRequest;
use App\Models\Admin\StaticPage;
use App\Repositories\Admin\StaticPageRepository;
use Illuminate\Http\Request;
use InfyOm\Generator\Controller\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use InfyOm\Generator\Utils\ResponseUtil;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

/**
 * Class StaticPageController
 * @package App\Http\Controllers\API\Admin
 */

class StaticPageAPIController extends AppBaseController
{
    /** @var  StaticPageRepository */
    private $staticPageRepository;

    public function __construct(StaticPageRepository $staticPageRepo)
    {
        $this->staticPageRepository = $staticPageRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/staticPages",
     *      summary="Get a listing of the StaticPages.",
     *      tags={"StaticPage"},
     *      description="Get all StaticPages",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/StaticPage")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->staticPageRepository->pushCriteria(new RequestCriteria($request));
        $this->staticPageRepository->pushCriteria(new LimitOffsetCriteria($request));
        $staticPages = $this->staticPageRepository->all();

        return $this->sendResponse($staticPages->toArray(), 'StaticPages retrieved successfully');
    }

    /**
     * @param CreateStaticPageAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/staticPages",
     *      summary="Store a newly created StaticPage in storage",
     *      tags={"StaticPage"},
     *      description="Store StaticPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="StaticPage that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/StaticPage")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/StaticPage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateStaticPageAPIRequest $request)
    {
        $input = $request->all();

        $staticPages = $this->staticPageRepository->create($input);

        return $this->sendResponse($staticPages->toArray(), 'StaticPage saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/staticPages/{id}",
     *      summary="Display the specified StaticPage",
     *      tags={"StaticPage"},
     *      description="Get StaticPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of StaticPage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/StaticPage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var StaticPage $staticPage */
        $staticPage = $this->staticPageRepository->find($id);

        if (empty($staticPage)) {
            return Response::json(ResponseUtil::makeError('StaticPage not found'), 400);
        }

        return $this->sendResponse($staticPage->toArray(), 'StaticPage retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateStaticPageAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/staticPages/{id}",
     *      summary="Update the specified StaticPage in storage",
     *      tags={"StaticPage"},
     *      description="Update StaticPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of StaticPage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="StaticPage that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/StaticPage")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/StaticPage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateStaticPageAPIRequest $request)
    {
        $input = $request->all();

        /** @var StaticPage $staticPage */
        $staticPage = $this->staticPageRepository->find($id);

        if (empty($staticPage)) {
            return Response::json(ResponseUtil::makeError('StaticPage not found'), 400);
        }

        $staticPage = $this->staticPageRepository->update($input, $id);

        return $this->sendResponse($staticPage->toArray(), 'StaticPage updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/staticPages/{id}",
     *      summary="Remove the specified StaticPage from storage",
     *      tags={"StaticPage"},
     *      description="Delete StaticPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of StaticPage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var StaticPage $staticPage */
        $staticPage = $this->staticPageRepository->find($id);

        if (empty($staticPage)) {
            return Response::json(ResponseUtil::makeError('StaticPage not found'), 400);
        }

        $staticPage->delete();

        return $this->sendResponse($id, 'StaticPage deleted successfully');
    }
}
