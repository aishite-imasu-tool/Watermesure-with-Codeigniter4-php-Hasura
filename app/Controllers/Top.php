<?php

namespace App\Controllers;

use Exception;

class Top extends BaseController
{
    protected $mRequest;

    public function __construct()
    {
        $this->mRequest = service("request");
    }
    
    public function index()
    {
        $session = session();
        if($session->get('login_id')) {
            $date = '2021-5-20 09:20:02';
            $yearInput  = date('Y', strtotime($date));
            $monthInput = date('m', strtotime($date));

            $day = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
            $yearOutput  = strftime("%Y", $day);
            $monthOutput = strftime("%m", $day);

            $dayInput   = ''.$yearInput.'-'.$monthInput.'-1 00:00:00';
            $dayOutput  = ''.$yearOutput.'-'.$monthOutput.'-1 00:00:00';

            $param = $this->TopModel->getListBuildings($date);

            if(isset($param)) {
                for($i=0; $i<count($param['data']); $i++) {
                    $room[$i] = $this->TopModel->getCountListRoomInBuildings([  'building_id' => $param['data'][$i]["id"],
                                                                                'date'        => $date
                                                                            ]);                                         
                    $param['data'][$i]['totalUnits'] = $room[$i][0]["count(id)"];
        
                    $paramUnitsCompleted = ['dayInput'    => $dayInput,
                                            'dayOutput'   => $dayOutput,
                                            'building_id' => $param['data'][$i]["id"]
                                        ];
                    $resultUnitsCompleted = $this->TopModel->getListUnitsCompleted($paramUnitsCompleted);
                    if(isset($resultUnitsCompleted)) {
                        $param['data'][$i]['unitsCompleted'] = count($resultUnitsCompleted);

                        for($j=0; $j<count($resultUnitsCompleted); $j++) {
                            $param['data'][$i]['measurement_date'] = date('Y\年m\月', strtotime($resultUnitsCompleted[$j]["measurement_date"]));
                            break;
                        }
        
                    } else {
                        // $param['data'][$i]['unitsCompleted'] = 0;
                    }
                    
                    $download = $this->TopModel->download([ 'building_id'     => $param['data'][$i]["id"],
                                                            'date'            => $date
                                                    ]);
                    $param['download'][$i] = $download;
                }
            } else {
                $param =['data' => []];
            }
        
            // echo "<pre>";
            // var_dump($param);
            return view('Top/index', $param);
        } else {
            $param = ['api' => '/watermeasure/public/top'];
            return view('Login/index', $param);
        }
    }

}