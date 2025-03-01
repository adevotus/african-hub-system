<?php

namespace App\Service;

use App\Dao\GeneralDao;
use Illuminate\Support\Facades\DB;

class GeneralService
{
    private $generalDao;

    public function __construct(GeneralDao  $generalDao)
    {
        $this->generalDao = $generalDao;
    }

    public function transaction($okFunction){
        return DB::transaction(function () use ($okFunction) {
            return $okFunction();
        }, 1);
    }

    public function beginTransaction(){
        DB::beginTransaction();
    }

    protected function rollBack(){
        DB::rollBack();
    }

    protected function commit(){
        DB::commit();
    }

    public function get($id)
    {
        return $this->generalDao->get($id);
    }

    public function delete($id)
    {
        return $this->generalDao->delete($id);
    }
    public function insert($listOfData)
    {
        return $this->generalDao->insert($listOfData);
    }
}
