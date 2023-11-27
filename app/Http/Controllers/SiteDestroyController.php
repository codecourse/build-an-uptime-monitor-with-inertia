<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteDestroyRequest;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteDestroyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(SiteDestroyRequest $request, Site $site)
    {
        $site->delete();

        return redirect()->route('dashboard');
    }
}
