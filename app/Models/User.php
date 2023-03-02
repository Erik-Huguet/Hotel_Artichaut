<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Request;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable

{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'lastname',
        'firstname',
        'pseudo',
        'email',
        'phone',
        'avatar_user',
        'password',
        'fk_Users_Roles'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


   public function me(User $user, Request $request)
   {
       return $user->id === $request->user();
       // var_dump($this->fk_Users_Roles === Role::class->roles->type_role);
       // return $this->fk_Users_Roles === Role::class->type_role("admin");
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'fk_Users_Roles');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment()
    {
        return $this->hasMany(Comment::class, 'fk_Users_Comments');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advantage()
    {
        return $this->hasMany(Advantage::class, 'fk_Users_Advantages');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function news()
    {
        return $this->hasMany(News::class, 'fk_Users_News');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function video()
    {
        return $this->hasMany(Video::class, 'fk_Users_Videos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discount()
    {
        return $this->hasMany(discount::class, 'fk_Users_Discounts');
    }

}
