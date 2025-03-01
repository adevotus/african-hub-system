<?php

namespace App\Dao;
use App\Models\Subscription;

class SubscriptionDao extends GeneralDao
{
    protected $subscription;

    public function __construct(Subscription $subscription){
        parent::__construct($subscription);
        $this->subscription = $subscription;
    }
    public function save($userData) {return Subscription::create($userData);}

    public function update($data, $id) {
        $subscription = Subscription::find($id);
        $subscription = $this->bindData($subscription, $data);
        $subscription = parent::save($subscription);
        return $subscription;
    }
    public function findById($id) {
        $data = Subscription::find($id);
        if (!$data) {return null;}
        return $data;
    }

    public function delete($id){
        $subscription = Subscription::find($id);
        if(!empty($subscription)){$subscription->delete();}
        return true;
    }

}
