<?php

/**
 * Skill
 *
 * @property integer $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\User[] $skills
 * @method static \Illuminate\Database\Query\Builder|\Skill whereId($value) 
 * @method static \Illuminate\Database\Query\Builder|\Skill whereName($value) 
 * @method static \Illuminate\Database\Query\Builder|\Skill whereCreatedAt($value) 
 * @method static \Illuminate\Database\Query\Builder|\Skill whereUpdatedAt($value) 
 */
class Skill extends BaseModel {
	protected $fillable = ['name'];

    public function skills()
    {
        return $this->belongsToMany('User');
    }
}