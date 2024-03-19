<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 'password',
        // 'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];


     public function getItemByTypeName($tableName)
    {
        $this->table = $tableName;

        return $this->select('*')
            ->where('item_type_name', 'user')
            ->get()
            ->toArray();
    }

    public function getItemTypesProfile($tableName)
    {
        $this->table = $tableName;

        return $this->select('*')
            ->where('item_type_name', 'user_profile')
            ->get()
            ->toArray();
    }

    public function getItemUserType($tableName)
    {
       $this->table = $tableName;

        return $this->select('*')
            ->where('item_type_name', 'user_type')
            ->get()
            ->toArray();
    }

    public function storeData($array, $tableName)
    {
        try {
            $model = new self; // Create a new instance of the model
            $model->setTable($tableName); // Set the table dynamically
            $id = $model->insertGetId($array); // Perform the insert operation
            return $id;
        } catch (\Exception $ex) {
            $error = $ex->getMessage();
            return ['success' => false, 'message' => $error];
        }
    }

    public function loginCredentials($tableName,$email, $password)
    {
        $this->table = $tableName;
        return $this->select('*')
            ->where('user_email', $email)
            ->where('user_password', $password)
            ->first();
    }

   public function checkEmailExists($email)
    {
        $user = DB::table('tbl_user')->where('user_email', $email)->first();
        return $user !== null;
    }
}
