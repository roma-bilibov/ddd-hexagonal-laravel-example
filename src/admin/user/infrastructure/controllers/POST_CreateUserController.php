<?php   

namespace Src\Admin\User\Infrastructure\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Src\Admin\User\Application\CreateUserUseCase;
use Src\Admin\User\Domain\Entities\User;
use Src\Admin\User\Domain\ValueObjects\UserName;
use Src\Admin\User\Domain\ValueObjects\UserEmail;
use Src\Admin\User\Infrastructure\Validators\CreateUserRequest;

final class POST_CreateUserController extends Controller
{
    public function index(CreateUserRequest $request)
    {
        $user = (new CreateUserUseCase())->execute($request->name, $request->email);
        return response()->json($user);
    }
}