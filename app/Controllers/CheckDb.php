<?php

namespace App\Controllers;

class CheckDb extends BaseController
{
    public function checkdb()
    {
        //Set ValidateDate 
        $measurement_date =  date('Y/m/30');
        $measurement_date1 = strtotime(date('Y/m/d  00:00:00', strtotime($measurement_date)) . " -1 month");
        $measurement_date1 = strftime("%Y-%m-%d 00:00:00", $measurement_date1);
        $measurement_date2 = date('Y/m/d 00:00:00', strtotime($measurement_date));


        $measure = $this->mRequest->getVar("measure");
        $id = $this->mRequest->getVar("room_id");
        $measurement_date3 = $this->mRequest->getVar("measurement_date");
        $measurement_date4 = date('Y/m/d 00:00:00', strtotime($measurement_date3)  . " -1 month");
        $user_id = $this->mRequest->getVar("user_id");
        // $image1 = $this->mRequest->getVar("UploadImage");


        $param2 = [
            'room_id' => $id,
            'measure' => $measure,
            'measurement_date' => $measurement_date4,
            // 'image' => $image_url,
            'user_id' => $user_id,

        ];


        var_dump($param2);

        return view('mobile/update');
    }
}
