<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Models\Blog\BlogSubscriber as Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogSubscriber extends Controller
{
    public function subscribe()
    {
        $validator = Validator::make(request()->all(), [
            'email' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = new Subscriber();
        $data->email = request()->email;
        $data->save();

        return response()->json($data, 200);
    }
}
