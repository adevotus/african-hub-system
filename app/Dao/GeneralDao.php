<?php

namespace App\Dao;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GeneralDao {
    protected $model;

    protected function __construct(Model $model) {$this->model = $model;}

    protected function getSql($query) {
        return Str::replaceArray('?', $query->getBindings(), $query->toSql());
    }

    public function get($id) {
        if(!is_null($object = $this->model->where('id', '=', $id)->first())) {
            return $object;
        }
        return $this->model;
    }

    public function delete($id) {
        if(!is_null($object = $this->model->where('id', '=', $id)->first())) {
            $object->delete();
        } else {
            throw new \Exception("Unable to remove this item");
        }
    }

    public function save($genericObject) {

        if(empty($genericObject->id)) {
            $genericObject->created_at = Carbon::now();
        } else {
            $genericObject->updated_at = Carbon::now();
        }
        $genericObject->save();

        return $genericObject;
    }

    public function insert($listOfData) {
        return $this->model->insert($listOfData);
    }

}
