<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(\App\Model\Admin::class, function ($faker) {
    return [
        'institute_id'=>1,
        "account" => 19951995,
        "password" => 19951995,
    ];
});

$factory->define(\App\Model\Major::class, function ($faker) {
    return [
        'name' => $faker->name,
        'institute_id' => 1,
        'major_code'=>1
    ];
});

$factory->define(\App\Model\MajorDirection::class, function ($faker) {
    return [
        'institute_id' => 1,
        'direction_id'=>$faker->shuffle([1,2,3,4,5,6,7])[0],
        'major_id' => $faker->shuffle([1,2,3])[0],

    ];
});
$factory->define(\App\Model\Direction::class, function ($faker) {
    return [
        'direction_code'=>1,
        'institute_id' => 1,
    ];
});
$factory->define(\App\Model\Grade::class, function ($faker) {
    return [
        'id'=>1,
        'name' => 2013,
        'min_credit'=>15,
        'system_status'=>1,
        'max_prior_select_num'=>5,
        'institute_id' => 1,

    ];
});
$factory->define(\App\Model\Classes::class, function ($faker) {
    return [
        'name' => $faker->name,
        'institute_id' => 1,
        "grade_id"=>1,
        'classes_code'=>$faker->creditCardNumber,
        'is_prior'=>$faker->shuffle([true,false])[0],
    ];
});
$factory->define(\App\Model\Institute::class, function ($faker) {
    return [
        'id' =>1,
        'name' => "电信学院",
    ];
});

$factory->define(\App\Model\Student::class, function ($faker) {
    return [
        "grade_id"=>1,
        "institute_id" =>1,
        "name" => $faker->name,
        'major_id'=>$faker->shuffle([1,2,3])[0],
        "job_num" => $faker->randomNumber($nbDigits = NULL),
    ];
});



$factory->define(\App\Model\Schedule::class, function ($faker) {
    return [

        'grade_id'=>1,
        'student_id' => $faker->numberBetween($min = 1, $max = 237),
        "course_id"=> $faker->numberBetween($min = 1, $max = 77),
    ];
});

$factory->define(\App\Model\Course::class, function ($faker) {
    $is_select = $faker->shuffle([true,false])[0];
    if($is_select){
        $is_common = $faker->shuffle([true,false])[0];
    }else{
        $is_common = true;
    }
    return [
        'institute_id' => 1,
        'uuid'=>$faker->uuid,
        'grade_id' => 1,
        'is_common' => $is_common,
        'is_select' =>$is_select,
        'direction_id'=>$faker->shuffle([1,2,3,4,5,6,7])[0],
        'credit' => $faker->shuffle([2,3,4,5])[0],
        'required_number' => $faker->numberBetween($min = 30, $max = 100),
        'title'=>$faker->word,
    ];
});