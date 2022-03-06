<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('pages.profile');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function edit(Request $request)
    {
        $record = auth()->user();
        $record->update($request->except('_token'));
        
        return redirect(route('home'));
    }

}

?>
