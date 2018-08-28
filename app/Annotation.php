<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
/**
 * @SWG\Swagger(
 *     basePath="/",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="API documentation Lumen",
 *         @SWG\Contact(
 *             email="hudaparodi@gmail.com"
 *         ),
 *     )
 * )
 */
/**
* @SWG\Get(
 *   path="/annotation",
 *   summary="Version",
 *   @SWG\Response(
 *     response=200,
 *     description="Working"
 *   ),
 *   @SWG\Response(
 *     response="default",
 *     description="an ""unexpected"" error"
 *   )
 * )
 */
class Annotation extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable;

}
