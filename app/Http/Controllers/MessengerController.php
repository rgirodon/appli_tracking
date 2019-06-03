<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 03/06/19
 * Time: 14:17
 */

namespace App\Http\Controllers;

use App\Repositories\MessageRepository;
use App\Room;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MessengerController extends Controller
{
    public function sendMessage($room_id, Request $request)
    {
        $room = Room::findOrFail($room_id);

        $this->authorize('sendmessage', $room);

        MessageRepository::create($request->user(), $room, $request->input('content'));

        return JsonResponse::create([
            'status' => [
                'type' => 'success',
                'message' => 'Message envoyé avec succès',
                'display' => false
            ]
        ]);
    }
}