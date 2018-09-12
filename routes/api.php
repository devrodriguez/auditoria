<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('audits', 'AuditController');
Route::apiResource('auditors', 'AuditorController');
Route::apiResource('criterias', 'CriteriaController', ['except' => ['create', 'edit']]);
Route::apiResource('enterprises', 'EnterpriseController');
Route::apiResource('evidences', 'EvidenceController');
Route::apiResource('evidence_suports', 'EvidenceSupportController');
Route::apiResource('findings', 'FindingController');
Route::apiResource('roles', 'RoleController');
Route::apiResource('supports', 'SupportController');
Route::apiResource('support_types', 'SupportTypeController');

Route::get('auditors_full', 'AuditorController@full');
