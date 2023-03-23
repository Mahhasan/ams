<?php

namespace App\Console\Commands;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use DB;
use Carbon\Carbon;
use App\Models\User;
class SendSubscriptionRenewalNotifications extends Command
{

    protected $signature = 'membership:notify-renewal';

    protected $description = 'Send email notifications to users for subscription renewal.';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    // protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;

        $expiryDates = DB::table('members')->pluck('expiry_date', 'user_id');

        // Check expiry dates and determine which users need to be notified
        foreach ($expiryDates as $userId => $expiryDate) {
            $now = Carbon::now();
            $expiryDate = Carbon::parse($expiryDate);

            if ($expiryDate->isPast() || $expiryDate->diffInDays($now) <= 30) {
                // Get the user details
                $user = User::find($userId);

                // Send notification email
                Mail::send('email.subscription-renewal-notification', ['user' => $user], function ($message) use ($user) {
                    $message->to($user->email, $user->first_name)
                        ->subject('Membership Expiry Notification')
                        ->from('your_email@example.com');
                });
            }
        }
    }
}
