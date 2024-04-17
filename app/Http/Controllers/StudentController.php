<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends UserController
{
    public function StudentStep1()
    {
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();

        $profile = DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->first();

        $employers = DB::table('tbl_employer')->get();
        $countries = DB::table('tbl_country')->get();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();

        $child = DB::table('tbl_child')->where('user_id', $user->user_id)->get();
        $userType=$this->userType();
        return view('newdesign.step1_profile', compact('user', 'userType','child', 'image', 'profile', 'employers', 'countries'));
    }

    public function StudentStep2(){
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $profile = DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->first();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();
        $userType=$this->userType();
        return view('newdesign.step3_image', compact('user', 'userType','profile', 'image'));
    }

    public function StudentStep3(){
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $childAvailability = DB::table('tbl_child')
            ->leftJoin('tbl_availability_child', 'tbl_child.child_id', '=', 'tbl_availability_child.child_id')
            ->where('tbl_child.user_id', $user->user_id)
            ->select('tbl_child.*', 'tbl_availability_child.language','tbl_availability_child.week_time')
            ->get();

        foreach ($childAvailability as $key => $child) {
            $selectedItemIds = DB::table('tbl_child_schedule')
                ->where('child_id', $child->child_id)
                ->where('item_type_id', 11)
                ->pluck('item_id')
                ->toArray();
            $childAvailability[$key]->selectedItems = $selectedItemIds;
        }

        $profile = DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->first();
        $scheduale = DB::table('tbl_sched_availability')->get();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();

        $days = [];
        foreach ($scheduale as $item) {
            $day = $item->sched_availability_day;
            $time = $item->sched_availability_time;

            if (!isset($days[$day])) {
                $days[$day] = [];
            }

            $days[$day][] = $item;
        }
        return view('newdesign.step4_availability', compact('user', 'childAvailability', 'image', 'days'));
    }

    public function StudentStep4(){
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();
        $checked = $this->Checkerstep5($user->user_id);
        return view('newdesign.student.step4_thank_you', compact('user', 'image'));
        
    }
}
