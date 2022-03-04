<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'account_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'gender_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'password',
        'display_picture_link',
        'delete_flag',
        'modified_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'role_id',
        'gender_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        $this->belongsTo('App\Models\Role', 'role_id', 'role_id');
    }

    public function gender()
    {
        $this->belongsTo('App\Models\Gender', 'gender_id', 'gender_id');
    }

    public function setFile($file)
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        if (!file_exists(public_path('admin/assets/img'))) {
            mkdir(public_path('admin/assets/img'), 0777, true);
        }
        $destinationPath = public_path('/admin/assets/img');
        $file->move($destinationPath, $filename);

        return $filename;
    }

    public function removeFile($filename)
    {
        $path = public_path('admin/assets/img/' . $filename);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
