<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

/**
 * User
 * @property integer                                                $id
 * @property string                                                 $first_name
 * @property string                                                 $last_name
 * @property string                                                 $email
 * @property string                                                 $password
 * @property \Carbon\Carbon                                         $created_at
 * @property \Carbon\Carbon                                         $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Skill[] $skills
 * @method static \Illuminate\Database\Query\Builder|\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\User whereUpdatedAt($value)
 */
class User extends BaseModel implements UserInterface, RemindableInterface
{

    use UserTrait, RemindableTrait;

    protected $table = 'users';
    protected $hidden = ['password', 'remember_token'];
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * @author Erik Aybar
     */
    public function skills()
    {
        return $this->belongsToMany('Skill');
    }

    /**
     * @return string
     * @author Erik Aybar
     */
    public function makeSlug()
    {
        return strtolower($this->first_name . '-' . $this->last_name);
    }
}
