<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;

    public function getSkillsListAttribute()
    {
        $skills = json_decode($this->skills, true);
        $skillsString = '';

        foreach ($skills as $skill) {
            $skillsString .= $skill['selected'] == 'true' ? $skill['name'] . ', ' : '';
        }

        return substr($skillsString, 0, -2);
    }
}
