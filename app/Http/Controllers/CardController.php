<?php

namespace App\Http\Controllers;

use App\Enum\CardType;
use App\Models\Card;

class CardController extends Controller
{
    public function index()
    {
        $query = Card::query();

        if ($type = request()->get('type')) {
            $query->type(CardType::from($type));
        }

        if ($cost = request()->get('cost')) {
            $query->cost($cost);
        }

        if ($power = request()->get('power')) {
            $query->power($power);
        }

        if ($color = request()->get('color')) {
            $query->color($color);
        }

        if ($keywords = request()->get('keywords')) {
            $query->keywords($keywords);
        }

        return $query->orderBy('id')->get();
    }
}
