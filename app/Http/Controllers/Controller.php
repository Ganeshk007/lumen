<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version="2.0.0",
     *      title="Digital Lock Box API Documentation",
     *      description="This document is for officially approved Digital Lock Box",
     *      @OA\Contact(
     *          email="support@dev.legacynow.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=SWAGGER_LUME_CONST_HOST,
     *      description="API Server"
     * )
     *
     * @OA\Tag(
     *     name="TEO",
     *     description="API Endpoints of TEO"
     * )
     */
}
