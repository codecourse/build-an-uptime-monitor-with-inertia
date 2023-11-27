<?php

namespace App\Http\Controllers;

use App\Enums\EndpointFrequency;
use App\Http\Resources\EndpointFrequencyResource;
use App\Http\Resources\EndpointResource;
use App\Http\Resources\SiteResource;
use App\Models\Site;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke(Request $request, Site $site)
    {
        $site->load('endpoints.site', 'endpoints.checks', 'endpoints.check');

        $site->update(['default' => true]);

        if (!$site->exists) {
            $site = $request->user()->sites()->whereDefault(true)->first() ?? $request->user()->sites()->first();
        }

        return inertia()->render('Dashboard', [
            'site' => $site ? SiteResource::make($site) : null,
            'endpoints' => $site ? EndpointResource::collection($site->endpoints) : null,
        ]);
    }
}
