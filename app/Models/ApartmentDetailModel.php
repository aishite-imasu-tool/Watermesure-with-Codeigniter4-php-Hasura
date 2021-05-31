<?php
namespace App\Models;

use CodeIgniter\Model;
use Exception;
use mysqli_sql_exception;
class ApartmentDetailModel extends Model
{  
    public function getListRoomInBuildings($param) {
        try{
            $builder = $this->db->table('room');
            $builder->where('building_id',$param['building_id']);
            $builder->where('create_date <=',$param['date']);
            $builder->where('active',0);
            $builder->select();
            $builder->orderby('id');
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                return $result;
            }
            return null;
        }catch(mysqli_sql_exception $ex){
            return [];
        }catch(Exception $ex){
            return [];
        }

    }

    public function getListUnitsCompleted($param) {
        try{
            $builder = $this->db->table('room');
            $builder->join('usage_details', 'usage_details.room_id = room.id');
            $builder->join('buildings', 'buildings.id = room.building_id');
            $builder->where('room.building_id',$param['building_id']);
            $builder->where('usage_details.measurement_date >=', $param['dayInput']);
            $builder->where('usage_details.measurement_date <=', $param['dayOutput']);
            $builder->select();
            $builder->orderby('room_id');
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                return $result;
            }
            return null;
        }catch(mysqli_sql_exception $ex){
            return [];
        }catch(Exception $ex){
            return [];
        }

    }

}