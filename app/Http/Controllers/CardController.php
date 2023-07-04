<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $query = Card::query();

        if ($type = request()->get('type')) {
            $query->type($type);
        }

        if ($cost = request()->get('cost')) {
            $query->cost($cost);
        }

        if ($color = request()->get('color')) {
            $query->color($color);
        }

        if ($keywords = request()->get('keywords')) {
            $query->keywords($keywords);
        }
    }
}
