<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiteNotificationEmailDestroyRequest;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteNotificationEmailDestroyController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function __invoke(SiteNotificationEmailDestroyRequest $request, Site $site)
    {
        $site->update([
            'notification_emails' => array_diff(
                $site->notification_emails, [$request->email]
            )
        ]);

        return back();
    }
}
