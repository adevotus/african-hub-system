<?php

namespace App\Service;

use App\Dao\SubscriptionDao;
use App\Util\Status;

class SubscriptionService extends GeneralService
{
    protected $subscriptionDao;

    public function __construct(SubscriptionDao $subscriptionDao){
        parent::__construct($subscriptionDao);
        $this->subscriptionDao = $subscriptionDao;
    }

    public function save($user) {
        $userData = [
            'user_id' => $user->id,
            'email' => $user->email,
            'status' => Status::SUBSCRIBED,
            'verification_status' => Status::PENDING,
            'verification_date' => null,
            'tag' => Status::NOTIFIED,
        ];

        return $this->subscriptionDao->save($userData);

    }

    public function update($data, $id) {
        return $this->subscriptionDao->update($data, $id);
    }



}
