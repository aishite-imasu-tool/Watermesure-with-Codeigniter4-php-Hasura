<?php
namespace App\Models;

use CodeIgniter\Model;
use Exception;
use mysqli_sql_exception;
class UploadModel extends Model
{  
    protected $table = 'users';

    public function addUsersInFileUpload($params) {
        try{
            $builder = $this->db->table('users');
            $builder->insert($params);
            return $this->db->insertID;
        }
        catch(mysqli_sql_exception $ex){
            return false;
        }catch(Exception $ex){
            return false;
        }

    }
}