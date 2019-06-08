<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 07/06/19
 * Time: 16:42
 */

namespace App\Http\Controllers;


use App\Riddle;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RiddleController extends Controller
{
    public function listRiddles(Request $request)
    {
        $this->authorize('listRiddles', Riddle::class);

        $user = Auth::user();

        $riddles = [];

        foreach (Riddle::all() as $riddle) {
            if (!$riddle->disabled && all($riddle->parents, function ($r) use ($user) {
                    return $r->disabled || is_riddle_completed($r, $user);
                })) {
                $riddles[] = riddle_info($riddle, $user);
            }
        }

        return JsonResponse::create([
            'status' => [
                'type' => 'success',
                'message' => 'Énigmes récupérées avec succès',
                'display' => false
            ],
            'riddles' => $riddles
        ]);
    }


    public function startRiddle($id, Request $request)
    {
        $riddle = Riddle::find($id);

        $this->authorize('startRiddle', $riddle);

        // TODO Use the starting code

        start_riddle($riddle, Auth::user());

        return JsonResponse::create([
            'status' => [
                'type' => 'success',
                'message' => 'Énigme commencée avec succès',
                'display' => false
            ]
        ]);
    }
}