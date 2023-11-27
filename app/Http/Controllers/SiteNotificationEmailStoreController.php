<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteNotificationEmailStoreRequest;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SiteNotificationEmailStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(SiteNotificationEmailStoreRequest $request, Site $site)
    {
        $site->update([
            'notification_emails' => Arr::prepend(
                $site->notification_emails, $request->email
            )
        ]);

        return back();
    }
}
