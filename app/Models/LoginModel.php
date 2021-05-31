<?php
namespace App\Models;

use CodeIgniter\Model;
use Exception;
use mysqli_sql_exception;
class LoginModel extends Model
{
    public function checkLogin($params) {
        try{
            $builder = $this->db->table('users');
            $builder->where('login_id',$params['login_id']);
            $builder->where('password',$params['password']);
            $builder->where('active', 1);
            $builder->select('id, name, email, phone, roll, login_id');
            $query = $builder->get();
            $result = $query->getResultArray();
            if (sizeof($result) > 0) {
                return $result[0];
            }
            return null;
        }catch(mysqli_sql_exception $ex){
            return [];
        }catch(Exception $ex){
            return [];
        }
    }
}