<?php

namespace Src\Admin\User\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Src\Admin\User\Application\FindUserByUuidUseCase;

final class GET_GetUserByUuidController extends Controller { 

 public function index(string $uuid) { 
    $user = (new FindUserByUuidUseCase())->execute($uuid);
    if (!$user) {
        return response()->json(['message' => 'User not found'], 404);
    }
    return response()->json($user);
 }
}