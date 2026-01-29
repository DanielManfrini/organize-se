<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\PopularFront;
use Illuminate\Http\Request;

class PopularFrontsController extends Controller
{

    private $popularFront;

    public function __construct(PopularFront $popularFront)
    {
        $this->popularFront = $popularFront;
    }
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 5);

        return PopularFront::orderBy('name')
            ->paginate($perPage);
    }

}