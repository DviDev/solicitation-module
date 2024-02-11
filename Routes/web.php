<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\App\Models\MessageModel;
use Modules\Project\Services\DynamicRoutes;
use Modules\Solicitation\Models\SolicitationBrainstormModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleGroupModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleModel;
use Modules\Solicitation\Models\SolicitationBrainstormModuleRequestModel;

DynamicRoutes::all('Solicitation');

Route::prefix('solicitation')->group(function () {
    Route::get('/brainstorms', fn() => view('solicitation::components.page.brainstorms_page'))
        ->name('admin.solicitation.brainstorms');
    Route::get('/brainstorm/{brainstorm}/modules', fn(SolicitationBrainstormModel $brainstorm)
        => view('solicitation::components.page.brainstorm_modules_page', compact('brainstorm')))
        ->name('admin.solicitation.brainstorm.modules');
    Route::get('/brainstorm/module/{module}/groups', fn(SolicitationBrainstormModuleModel $module)
        => view('solicitation::components.page.brainstorm_module_groups_page', compact('module')))
        ->name('admin.solicitation.brainstorm.module.groups');
    Route::get('/brainstorm/module/group/{group}/permissions', fn(SolicitationBrainstormModuleGroupModel $group)
        => view('solicitation::components.page.brainstorm_module_group_permissions_page', compact('group')))
        ->name('admin.solicitation.brainstorm.module.group.permissions');
    Route::get('/brainstorm/module/group/{group}/permission-users', fn(SolicitationBrainstormModuleGroupModel $group)
        => view('solicitation::components.page.brainstorm_module_group_permission_users_page', compact('group')))
        ->name('admin.solicitation.brainstorm.module.group.permission-users');
    Route::get('/brainstorm/module/{module}/requests', fn(SolicitationBrainstormModuleModel $module)
        => view('solicitation::components.page.brainstorm_module_requests_page', compact('module')))
        ->name('admin.solicitation.brainstorm.module.requests');
    Route::get('/brainstorm/module/request/{request}/comments', fn(SolicitationBrainstormModuleRequestModel $request)
        => view('solicitation::components.page.brainstorm_module_request_comments_page', compact('request')))
        ->name('admin.solicitation.brainstorm.module.request.comments');
    Route::get('/brainstorm/module/request/comment/{comment}/reactions',
        fn(MessageModel $comment)
        => view('solicitation::components.page.brainstorm_module_request_comment_reactions_page', compact('comment')))
        ->name('admin.solicitation.brainstorm.module.request.comment.reactions');
    Route::get('/brainstorm/module/requests/{requests}/files', fn(SolicitationBrainstormModuleRequestModel $request)
        => view('solicitation::components.page.brainstorm_module_request_files_page', compact('request')))
        ->name('admin.solicitation.brainstorm.module.request.files');
    Route::get('/brainstorm/module/requests/{requests}/tasks', fn(SolicitationBrainstormModuleRequestModel $request)
        => view('solicitation::components.page.brainstorm_module_request_tasks_page', compact('request')))
        ->name('admin.solicitation.brainstorm.module.request.tasks');
    Route::get('/brainstorm/module/{module}/user-permissions', fn(SolicitationBrainstormModuleModel $module)
        => view('solicitation::components.page.brainstorm_module_user_permissions_page', compact('module')))
        ->name('admin.solicitation.brainstorm.module.user-permissions');
});
