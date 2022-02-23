<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

//    public function newStudent(){
//        $this->student = new Student();
//        $this->student->name = "RIAZ";
//        $this->student->email = "riaz@gmail.com";
//        $this->student->mobile = "234543";
//        $this->student->save();
//
//    }

//    public static function getAllStudent(){
//        return [
//            0=> [
//                'id'   => 1,
//                'name' => 'Shahabuddin',
//                'email' => 'shahabuddin@gmail.com',
//                'mobile' => '01234567898',
//                'image'  => ''
//            ],
//
//            1=> [
//                'id'   => 2,
//                'name' => 'Shykot',
//                'email' => 'shykot@gmail.com',
//                'mobile' => '016578912345',
//                'image'  => ''
//            ],
//            2=> [
//                'id'   => 3,
//                'name' => 'Tarok',
//                'email' => 'tarok@gmail.com',
//                'mobile' => '01234567898',
//                'image'  => ''
//            ],
//        ];
//    }
}
