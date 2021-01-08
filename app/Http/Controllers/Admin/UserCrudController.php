<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\PermissionManager\app\Http\Controllers\UserCrudController as OriginalUserCrudController;
use App\Http\Controllers\Admin\Operations\ImpersonateOperation;
//// VALIDATION: change the requests to match your own file names if you need form validation
//use App\Http\Requests\ArticleRequest as StoreRequest;
//use App\Http\Requests\ArticleRequest as UpdateRequest;

class UserCrudController extends OriginalUserCrudController
{
    use ImpersonateOperation;
}
