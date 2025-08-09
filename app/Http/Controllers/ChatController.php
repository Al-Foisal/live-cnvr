<?php

namespace App\Http\Controllers;

class ChatController extends Controller {
    public function message() {
        $data = [];

        return view('message.index', $data);
    }
}
