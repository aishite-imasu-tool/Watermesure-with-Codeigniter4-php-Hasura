<?php

namespace App\Controllers;

use Exception;

class ApartmentDetail extends BaseController
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
            
            $daySum   = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
            $yearSum  = strftime("%Y", $daySum);
            $monthSum = strftime("%m", $daySum);

            $dayInput  = ''.$yearInput.'-'.$monthInput.'-1 00:00:00';
            $dayOutput = ''.$yearSum.'-'.$monthSum.'-1 00:00:00';
            
            $daySubtrac   = strtotime(date("Y-m-d", strtotime($date)) . " -1 month");
            $yearSubtrac  = strftime("%Y", $daySubtrac);
            $monthSubtrac = strftime("%m", $daySubtrac);

            $dayOutputSubtrac = ''.$yearSubtrac.'-'.$monthSubtrac.'-1 00:00:00';
            
            $building_id = $this->mRequest->getVar("id");
            $RoomInBuildings = $this->ApartmentDetailModel->getListRoomInBuildings(['building_id' => $building_id,
                                                                                    'date'        => $date
                                                                                ]);
            $param = [  'id'               => $this->mRequest->getVar("id"),
                        'building_name'    => $this->mRequest->getVar("building_name"),
                        'measurement_date' => $this->mRequest->getVar("measurement_date"),
                        'totalUnits'       => $this->mRequest->getVar("totalUnits"),
                        'unitsCompleted'   => $this->mRequest->getVar("unitsCompleted"),
                        'manager_name'     => $this->mRequest->getVar("manager_name"),
                        'manager_email'    => $this->mRequest->getVar("manager_email")
                ];

            if(isset($building_id) && isset($RoomInBuildings)) {
                $param['data'] = $RoomInBuildings;
                $paramUnitsCompleted = ['dayInput'    => $dayInput,
                                        'dayOutput'   => $dayOutput,
                                        'building_id' => $building_id
                                    ];
                $resultUnitsCompleted = $this->ApartmentDetailModel->getListUnitsCompleted($paramUnitsCompleted);

                $paramSubtrac = [ 'dayInput'    => $dayOutputSubtrac,
                                'dayOutput'   => $dayInput,
                                'building_id' => $building_id
                            ];
                $Subtrac = $this->ApartmentDetailModel->getListUnitsCompleted($paramSubtrac);

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

            return view('ApartmentDetail/index', $param);
        } else {
            $param = ['api' => '/watermeasure/public/top'];
            return view('Login/index', $param);
        }
    }

    public function sendMail()
    {
        //Khai báo cấu hình gửi mail
        $email = $this->email->initialize([
            'protocol'    => 'smtp',
            'SMTPHost'    => 'smtp.gmail.com',
            'SMTPUser'    => 'csvwater9999@gmail.com',
            'SMTPPass'    => 'csvwater1111'
        ]);
        //Khai báo thông tin gửi mail
        $email->setFrom('csvwater9999@gmail.com', 'From Name')
            ->setTo('thuctran429@gmail.com', 'To Name')
            ->setSubject('Water Measure')
            ->setMessage('Welcome to CSV');
            
        //Gửi mail
        $email->send();
           
    }
}