<?php

namespace App\Controllers;

class Mobile extends BaseController
{
	protected $mRequest;

	public function __construct()
	{
		$this->mRequest = service("request");
	}

	public function index()
	{


		$id =  $this->mRequest->getVar("id") ?  $this->mRequest->getVar("id") : '1';
		$measurement_date =  $this->mRequest->getVar("measurement_date");
		$measurement_date =  date('Y/m/d');

		$measurement_date1 = strtotime(date('Y/m/1  00:00:00', strtotime($measurement_date)) . " -1 month");
		$measurement_date1 = strftime("%Y-%m-%d 00:00:00", $measurement_date1);
		$measurement_date2 = date('Y/m/1 00:00:00', strtotime($measurement_date));

		var_dump($id);

		$params = [
			'building_id' => $id,
			'measurement_date' => $measurement_date2,
			'measurement_old' => $measurement_date1,

		];


		$listUserPresent = $this->BuildingDetailModel->selectDatePresent($params);
		$listUserTable = $this->BuildingDetailModel->selectDateAgo($params);
		$listUserTable1 = $this->BuildingDetailModel->selectData($params);




		$fetchNewData = $this->BuildingDetailModel->getallListHome();


		if ($listUserTable1 != null) {
			$data = [
				'data2' => $fetchNewData
			];

			for ($i = 0; $i < count($listUserTable1); $i++) {
				// $listUserTable1[$i]['id'] = $listUserPresent[$i]['room_id'];
				$listUserTable1[$i]['measure_new'] = $listUserPresent[$i]['measure'];
				$listUserTable1[$i]['measurement_date_new'] = $listUserPresent[$i]['measurement_date'];
				$listUserTable1[$i]['building_name'] = $listUserPresent[$i]['building_name'];


				if ($listUserTable1[$i]['id'] != $listUserTable[$i]['room_id']) {
					$listUserTable1[$i]['measure_old'] = '0';
					$listUserTable1[$i]['measurement_date_old'] = '0';
					$listUserTable1[$i]['building_name'] = $listUserPresent[$i]['building_name'];
				} else {

					$listUserTable1[$i]['measure_old'] = $listUserTable[$i]['measure'];
					$listUserTable1[$i]['image'] = $listUserTable[$i]['image'];
					$listUserTable1[$i]['measurement_date_old'] = $listUserTable[$i]['measurement_date'];
				}
				if ($listUserPresent[$i]['measure'] == 0  && $listUserPresent[$i]['measure'] == NULL) {
					$listUserTable1[$i]['usage_amount'] = "";
				} else if ($listUserPresent[$i]['measure'] != 0) {
					$listUserTable1[$i]['usage_amount'] = $listUserTable1[$i]['measure_new'] - $listUserTable1[$i]['measure_old'];
				}
			}
			$data = [
				'data' => $listUserTable1,
				'data2' => $fetchNewData,
			];

			// echo '<pre>';
			// var_dump($listUserTable1, $listUserTable, $listUserPresent);
		} else {

			$fetchNewData = $this->BuildingDetailModel->getallListHome();
			$data = [
				'data2' => $fetchNewData,
				'data' => [],
			];
		}



		return view('mobile/index', $data);
	}






	public function add()
	{
		$id = $this->mRequest->getVar("id") ?  $this->mRequest->getVar("id") : '1';
		$measurement_date =  $this->mRequest->getVar("text");
		$building_id =  $this->mRequest->getVar("building_id");
		$measurement_date =  date('Y/m/1');
		$measurement_date1 = strtotime(date('Y/m/d  00:00:00', strtotime($measurement_date)) . " -1 month");
		$measurement_date1 = strftime("%Y-%m-%d 00:00:00", $measurement_date1);
		$measurement_date2 = date('Y/m/d 00:00:00', strtotime($measurement_date));


	


		$params = [

			'id' => $id,
			'measurement_date' => $measurement_date2,
			'measurement_old' => $measurement_date1,
			'building_id' => $building_id

		];
		// echo '<pre>';
		// var_dump($getall3);
		// var_dump($params);
		$measure = $this->mRequest->getVar("measure");
		$id = $this->mRequest->getVar("room_id");
		$measurement_date3 = $this->mRequest->getVar("measurement_date");
		$measurement_date_old = $this->mRequest->getVar("measurement_date_old");
		$measurement_date4 = date('Y/m/d 00:00:00', strtotime($measurement_date3)  . " -1 month");

		$user_id = $this->mRequest->getVar("user_id");
		$image1 = $this->mRequest->getVar("UploadImage");
		$checkdb = $this->mRequest->getVar("checkdb");

		$param2 = [
			'room_id' => $id,
			'measure' => $measure,
			'measurement_date' => $measurement_date4,
			// 'image' => $image_url,
			'user_id' => $user_id,
			'measurement_date_old' => $measurement_date_old,

		];



		if ($checkdb == "1") {
			$this->BuildingDetailModel->editUser($param2);
		} else if ($checkdb == "0") {
			$param3 = [
				'room_id' => $id,
				'measure' => $measure,
				'measurement_date' => $measurement_date4,
				// 'image' => $image_url,
				'user_id' => $user_id,
			];
			$this->BuildingDetailModel->updateUser($param3);
		}
		$fetchNewData = $this->BuildingDetailModel->getallList($params);
		$getall = $this->BuildingDetailModel->getall($params);
		$getall2 = $this->BuildingDetailModel->getallListHome2($params);

		$getall4 = $this->BuildingDetailModel->getallListHome4($params);

		$getall3 = $this->BuildingDetailModel->getDefautDate($params);

		// echo '<pre>';
		// var_dump($getall);
		if ($getall4 != NULL) {

			if (isset($getall[0]['measurement_date'])) {
				$getall4[0]['CheckDB'] = "1";
				$getall = [
					'data' => $getall4,
					'data2' => $fetchNewData
				];
			} else {
				$getall[[0]]['CheckDB'] = "0";
				$getall = [
					'data' => $getall2,
					'data2' => $fetchNewData
				];
			}
		} else if ($getall2 !== NULL) {
			if (isset($getall[0]['measurement_date'])) {
				$getall2[0]['CheckDB'] = "0";
				$getall = [
					'data' => $getall2,
					'data2' => $fetchNewData
				];
			}
			// var_dump($getall2[0]['CheckDB']);
		} else {
			$getall0[0]['customer_name'] = $getall3[0]['customer_name'];
			$getall0[0]['room_id'] = $getall3[0]['room_id'];
			$getall0[0]['measurement_date'] = "";
			$getall0[0]['image'] = "";
			$getall0[0]['user_id'] = $getall3[0]['user_id'];
			$getall0[0]['CheckDB'] = "0";
			$getall = [
				'data' => $getall0,
				'data2' => $fetchNewData
			];
		}
		if (isset($measure)) {
			$getall = ['customer_name' => ''];
		}

		return view('mobile/update', $getall);
	}

	public function upload()
	{

		helper(['form', 'url']);

		$db = \Config\Database::connect();
		$builder = $db->table('usage_details');

		$validated = $this->validate([
			'file' => [
				'uploaded[file]',
				'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
				'max_size[file,4096]',
			],
		]);

		$msg = 'Please select a valid file';

		if ($validated) {
			$avatar = $this->mRequest->getFile('UploadImage');
			$avatar->move(WRITEPATH . 'uploads');

			$data = [

				'name' =>  $avatar->getClientName(),
				'type'  => $avatar->getClientMimeType()
			];

			$save = $builder->insert($data);
			$msg = 'File has been uploaded';
		}

		return redirect()->to(base_url('contact/form'))->with('msg', $msg);
	}
}
