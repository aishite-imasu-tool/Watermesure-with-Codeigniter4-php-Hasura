<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;
use mysqli_sql_exception;

class BuildingDetailModel extends Model
{
    public function fetchData()
    {
        try {
            $builder = $this->db->table('buildings');
            $builder->join('room', 'room.building_id = buildings.id');
            $builder->select();
            // $builder->orderBy('buildings.id')
            $query = $builder->get();

            $result = $query->getResultArray();

            if (sizeof($result) > 0) {
                // $result = array('data' => $result);
                return $result;
            }

            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }
    public function selectDatePresent($params)
    {    //day = 2021/05/01 00:00:00
        try {
            $builder = $this->db->table('buildings');
            $builder->join('room', 'room.building_id = buildings.id');
            $builder->join('usage_details', 'usage_details.room_id = room.id');
            // $builder->select('usage_details.id, usage_details.room_id, users.login_id,profiles.id as profile_id, profiles.staff_no, profiles.name, profiles.email, profiles.user_image' );
            $builder->where('buildings.id', $params['building_id']);
            // $builder->where('room.id', 'usage_details.room_id');
            // $builder->where('usage_details.measurement_date');

            $builder->where('usage_details.measurement_date >=', $params['measurement_date']);
            $builder->orderBy('room.id');
            $builder->select();
            // $builder->orderBy('buildings.id')
            $query = $builder->get();
            $result = $query->getResultArray();
            // var_dump( $result);
            if (sizeof($result) > 0) {
                // $result = array('data' => $result);
                return $result;
            }
            // 

            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function selectDateAgo($params)
    {    //day = 2021/04/01 00:00:00
        // var_dump($params);
        try {
            $builder = $this->db->table('buildings');
            $builder->join('room', 'room.building_id = buildings.id');
            $builder->join('usage_details', 'usage_details.room_id = room.id');
            $builder->where('buildings.id', $params['building_id']);

            $builder->where('usage_details.measurement_date >=', $params['measurement_old']);
            $builder->where('usage_details.measurement_date <=', $params['measurement_date']);
            $builder->orderBy('room.id');
            $builder->select();


            $query = $builder->get();
            $result = $query->getResultArray();

            if (sizeof($result) > 0) {

                return $result;
            }

            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }



    public function selectData($params)
    {
        try {
            $builder = $this->db->table('room');
            $builder->select();
            $builder->where('building_id', $params['building_id']);
            // $builder->orderBy('buildings.id')
            $query = $builder->get();
            $result = $query->getResultArray();
            $builder->orderBy('id');
            if (sizeof($result) > 0) {
                // $result = array('data' => $result);
                return $result;
            }
            // 

            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }



    public function getall($params)
    {
        try {
            $builder = $this->db->table('room');
            $builder->join('usage_details', 'room.id = usage_details.room_id');
            $builder->where('usage_details.room_id', $params['id']);
            $builder->where('usage_details.measurement_date >=', $params['measurement_old']);
            $builder->where(' usage_details.measurement_date <=', $params['measurement_date']);
            $builder->select();
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                //$result = array('data' => $result);
                return $result;
            }
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function getallList($params)
    {
        try {
            $builder = $this->db->table('buildings');
            $builder->join('room', 'room.building_id = buildings.id');
            $builder->where('buildings.id', $params['building_id']);
            $builder->select();
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                //$result = array('data' => $result);
                return $result;
            }
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function getallListHome()
    {
        try {
            $builder = $this->db->table('buildings');

            $builder->select();
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                //$result = array('data' => $result);
                return $result;
            }
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function getallListHome2($params)

    {
        // var_dump($params);
        try {
            $builder = $this->db->table('room');
            $builder->join('usage_details', 'room.id = usage_details.room_id');
            $builder->where('usage_details.room_id', $params['id']);
            $builder->where('usage_details.measurement_date >=', $params['measurement_old']);
            $builder->where('usage_details.measurement_date <=', $params['measurement_date']);
            $builder->orderBy('measurement_date', 'DESC');
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                //$result = array('data' => $result);
                return $result;
            }
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function getallListHome4($params)
    {
        try {
            $builder = $this->db->table('room');
            $builder->join('usage_details', 'room.id = usage_details.room_id');
            $builder->where('usage_details.room_id', $params['id']);
            $builder->where('usage_details.measurement_date >=', $params['measurement_date']);

            $builder->orderBy('measurement_date', 'DESC');
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                //$result = array('data' => $result);
                return $result;
            }
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function getDefautDate($params)
    {
        try {
            $builder = $this->db->table('room');

            $builder->join('usage_details', 'room.id = usage_details.room_id');
            $builder->where('usage_details.room_id', $params['id']);
            $builder->select();

            $query = $builder->get();
            $result = $query->getResultArray();

            if (sizeof($result) > 0) {
                // $result = array('data' => $result);
                return $result;
            }
            // 
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }

    public function getallListHome3($params)

    {
        try {
            $builder = $this->db->table('room');
            $builder->join('usage_details', 'room.id = usage_details.room_id');
            $builder->where('usage_details.room_id', $params['id']);
            $builder->where('usage_details.measurement_date ');
            $builder->select();
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                //$result = array('data' => $result);
                return $result;
            }
            return null;
        } catch (mysqli_sql_exception $ex) {
            return [];
        } catch (Exception $ex) {
            return [];
        }
    }
    public function updateUser($param2)

    {
       
        try {
            $builder = $this->db->table('usage_details');
            $builder->insert($param2);
            return $this->db->insertID();
        } catch (mysqli_sql_exception $ex) {
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }

    public function editUser($param2)
    {
       
        try {
            $builder = $this->db->table('usage_details');
            $builder->set('room_id', $param2['room_id']);
            $builder->set('measure', $param2['measure']);
            $builder->set('measurement_date', $param2['measurement_date']);
            $builder->set('user_id', $param2['user_id']);

            $builder->where('room_id', $param2['room_id']);
            $builder->where('measurement_date' , $param2['measurement_date_old']);
            $result = $builder->update();
            return $result;
        } catch (mysqli_sql_exception $ex) {
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }
}
