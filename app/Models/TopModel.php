<?php
namespace App\Models;

use CodeIgniter\Model;
use Exception;
use mysqli_sql_exception;
class TopModel extends Model
{  
    public function getListBuildings($param) {
        try{
            $builder = $this->db->table('buildings');
            $builder->where('create_date <=',$param);
            $builder->where('active',0);
            $builder->select();
            $builder->orderby('id');
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                $result = array('data' => $result);
                return $result;
            }
            return null;
        }catch(mysqli_sql_exception $ex){
            return [];
        }catch(Exception $ex){
            return [];
        }

    }

    public function getCountListRoomInBuildings($param) {
        try{
            $builder = $this->db->table('room');
            $builder->where('building_id',$param['building_id']);
            $builder->where('create_date <=',$param['date']);
            $builder->where('active',0);
            $builder->select('count(id)');
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

    public function getListRoomInBuildings($param) {
        try{
            $builder = $this->db->table('room');
            $builder->where('building_id',$param["building_id"]);
            $builder->where('create_date <=',$param["date"]);
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


    public function download($paramDownload) 
    {
        $date = $paramDownload['date'];
        $yearInput  = date('Y', strtotime($date));
        $monthInput = date('m', strtotime($date));
        
        $daySum   = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
        $yearSum  = strftime("%Y", $daySum);
        $monthSum = strftime("%m", $daySum);

        $dayInput  = ''.$yearInput.'-'.$monthInput.'-1 00:00:00';
        $dayOutput = ''.$yearSum.'-'.$monthSum.'-1 00:00:00';
        
        $daySubtrac   = strtotime(date("Y-m-d", strtotime($date)) . " -1 month");
        $yearSubtrac  = strftime("%Y", $daySubtrac);
        $monthSubtrac = strftime("%m", $daySubtrac);

        $dayOutputSubtrac = ''.$yearSubtrac.'-'.$monthSubtrac.'-1 00:00:00';
        
        $building_id = $paramDownload['building_id'];
        $RoomInBuildings = $this->getListRoomInBuildings([  'building_id' => $building_id,
                                                            'date'        => $date
                                                        ]);

        if(isset($building_id) && isset($RoomInBuildings)) {
            $param['data'] = $RoomInBuildings;
    
            $paramUnitsCompleted = ['dayInput'    => $dayInput,
                                    'dayOutput'   => $dayOutput,
                                    'building_id' => $building_id
                                ];
            $resultUnitsCompleted = $this->getListUnitsCompleted($paramUnitsCompleted);

            $paramSubtrac = [ 'dayInput'    => $dayOutputSubtrac,
                              'dayOutput'   => $dayInput,
                              'building_id' => $building_id
                        ];
            $Subtrac = $this->getListUnitsCompleted($paramSubtrac);

            for($i=0; $i<count($RoomInBuildings); $i++) {
                if(isset($resultUnitsCompleted)) {
                    for($j=0; $j<count($resultUnitsCompleted); $j++) {
                        if($resultUnitsCompleted[$j]['room_id'] == $RoomInBuildings[$i]['id']) {
                            $param['data'][$i]['dataRoomUnitsCompleted'] = $resultUnitsCompleted[$j];
                        }
                    }
                }
                
                if(isset($Subtrac)) {
                    for($k=0; $k<count($Subtrac); $k++) {
                        if($Subtrac[$k]['room_id'] == $RoomInBuildings[$i]['id']) {
                            $param['data'][$i]['dataLast'] = $Subtrac[$k];
                        }
                    }
                }
            }

        } else {
            $param['data'] = [];
        }

        return $param;
    }

}