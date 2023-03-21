<?php

namespace App\Console\Commands;
use App\Models\Subscription;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionRenewalNotifications extends Command
{

    protected $signature = 'subscription:notify-renewal';

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
        $expiryDate = now()->addDays(config('subscription.notification_days'));

        $subscriptions = Subscription::where('expiry_date', $expiryDate)->get();

        foreach ($subscriptions as $subscription) {
            $user = $subscription->user;

            Mail::to($user->email)->send(new SubscriptionRenewalNotification($user));
        }

        $this->info('Email notifications sent successfully!');
        // return Command::SUCCESS;
    }
}
