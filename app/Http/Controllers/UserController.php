<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function our_kids_login_form()
    {
        return view('newdesign.reading_portal');
    }
    public function our_kids_register_form()
    {
        error_reporting(0);
        return view('newdesign.reading_portal_register');
    }

    public function our_kids_register(Request $request, User $userModel)
    {
        error_reporting(0);
        // if ($request->isMethod('get')) {
        //     return view('newdesign.reading_portal');
        // } 
        // else {

        $allFieldsFilled = true;

        $fieldsToCheck = ['fname', 'lname', 'email', 'password', 'cpassword', 'zip'];

        foreach ($fieldsToCheck as $field) {
            if (!$request->filled($field)) {
                $allFieldsFilled = false;
                break;
            }
        }

        if ($allFieldsFilled) {
            $password = $request->input('password');
            $cpassword = $request->input('cpassword');


            $item_types = $userModel->getItemByTypeName('tbl_item_type');


            $data1['item_type_id'] = $item_types[0]['item_type_id'];

            $data1['user_username'] = $request->input('fname') . '' . $request->input('lname');
            $data1['user_email'] = $request->input('email');
            $data1['user_password'] = $request->input('password');
            $data1['user_name_first'] = $request->input('fname');
            $data1['user_name_last'] = $request->input('lname');



            $email_exists = $userModel->checkEmailExists($data1['user_email']);

            if ($email_exists) {
                $data1['user_username'] = $request->input('fname') . '' . $request->input('lname');
                $data1['user_email'] = $request->input('email');
                $data1['user_password'] = $request->input('password');
                $data1['user_name_first'] = $request->input('fname');
                $data1['user_name_last'] = $request->input('lname');
                $data1['user_profile_address_zip'] = $request->input('zip');
                $data1['okr_student'] = $request->input('okr_student');

                return view('newdesign.reading_portal', [
                    'error_message_email' => 'Email already exists!',
                    'data1' => $data1,
                ]);
            }


            $last_id = $userModel->storedata($data1, 'tbl_user');


            $item_types_profile = $userModel->getItemTypesProfile('tbl_item_type');

            if ($last_id) {
                $data['item_type_id'] = $item_types_profile[0]['item_type_id'];
                $data['user_profile_id'] = $last_id;
                $data['user_profile_address_zip'] = $request->input('zip');
                $data['employer_id'] = 0;
                $data['user_other_activities'] = '';
                $data['video_1_completed'] = 0;
                $data['video_2_completed'] = 0;
                $data['video_3_completed'] = 0;
                $data['video_4_completed'] = 0;
                $data['user_think'] = '';
                $data['vdo_check'] = '';


                $item_types_profile = $userModel->storedata($data, 'tbl_user_profile');


                $data2['item_type_id'] = $item_types_profile[0]['item_type_id'];
                $data2['user_id'] = $last_id;
                $data2['item_id'] = $last_id;

                $userModel->storedata($data2, 'tbl_item_user');


                $student = $request->input('okr_student');
                $item_user_type = $userModel->getItemUserType('tbl_item_type');

                $data2['item_type_id'] = $item_user_type[0]['item_type_id'];
                $data2['user_id'] = $last_id;
                $data2['item_id'] = $student;

                $userModel->storedata($data2, 'tbl_item_user');

                $data3['user_profile_id'] = $last_id;
                $data3['complete_onboarding_process'] = '';
                $data3['signature'] = '';
                $userModel->storedata($data3, 'tbl_complete_profile');

                $registeredUser = DB::table('tbl_user')->where('user_id', $last_id)->first();
                session(['user' => $registeredUser]);
                session(['id' => $last_id]);
            }

            session()->flash('flash_msg_type', 'success');
            session()->flash('flash_msg_text', 'Successfully registered');

            // Login the user
            //$user_data = $userModel->loginCredentials('tbl_user',$data1['user_email'], $data1['user_password']);


            $credentials = [
                'user_email' => $data1['user_email'],
                'user_password' => $data1['user_password'],
            ];


            // DB::table('tbl_complete_step')->insert([
            //     'user_profile_id' => $last_id, // Assuming $id contains the user_profile_id
            //     'step1_status' => 0,
            //     'step2_status' => 0,
            //     'step3_status' => 0,
            //     'step4_status' => 0,
            //     'step5_status' => 0,
            //     'step6_status' => 0,
            //     'last_updated_at' => now(),

            // ]);
            $user = DB::table('tbl_user')
                ->where('user_email', $data1['user_email'])
                ->where('user_password', $data1['user_password'])
                ->first();

            session(['user' => $user]);

            return redirect()->route('home');

            return redirect()->route('main-dashboard');

            return Redirect::route('reading-portal-login')->with([
                'email' => $credentials['user_email'],
                'password' => $credentials['user_password']
            ]);

            $externalLink = 'https://ourkidsreadinc.org/our_kids/ourkids_login?uid=' . $last_id;

            // Redirect to the external link
            return Redirect::away($externalLink);

            // Send a POST request to the CodeIgniter controller
            $response = Http::post('https://www.ourkidsreadinc.org/our_kids/static_page/portal/handleLogin', $credentials);


            $responseData = $response->json();


            return response()->json(['message' => 'Data sent successfully']);

            // if ($user_data) {
            //     session(['user_id' => $user_data['user_id'], 'user_email' => $user_data['user_email']]);


            //  $userId = $user_data['user_id'];

            //     $items = DB::table('tbl_item_user')
            //         ->select('*')
            //         ->where('user_id', $userId)
            //         ->where('item_type_id', 12)
            //         ->get();

            //     if ($items) {
            //         $firstRow = $items[0];
            //         $item_id = $firstRow->item_id;

            //         if ($item_id == 1) {
            //             return redirect('https://www.ourkidsreadinc.org/our_kids/student_access/student/dashboard');
            //         }
            //     }

            //     return redirect()->route('static_page.portal.dashboard');
            // }

            //return redirect()->route('reading-buddies')->with('success', 'User registered successfully');


        }
        // }
    }
    public function our_kids_login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = DB::table('tbl_user')
            ->where('user_email', $email)
            ->where('user_password', $password)
            ->first();

        if ($user) {
            session(['user' => $user]);
            session(['id' => $user->user_id]);
            return redirect()->route('home');

            return redirect()->route('main-dashboard');
        } else {
            return redirect()->back()->with('error', 'User does not exist.');
        }
    }
    public function our_kids_logout()
    {
        Session::forget('id');
        return redirect()->route('reading-portal-register');
    }
    public function dashboard()
    {

        $step1 = 'default';
        $step2 = 'default';
        $step3 = 'default';
        $step4 = 'default';
        $step5 = 'default';
        $step6 = 'default';
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $id = $user->user_id;
        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $id)
            ->first();

        if ($this->Checkerstep1($id)) {
            $step1 = 'finished';
            if ($this->Checkerstep2($id)) {
                $step2 = 'finished';
                if ($this->Checkerstep3($id)) {
                    $step3 = 'finished';
                    if ($this->Checkerstep4($id)) {
                        $step4 = 'finished';
                        if ($this->Checkerstep5($id)) {
                            $step5 = 'finished';
                            if ($this->Checkerstep6($id)) {
                                $step6 = 'finished';
                            } else {
                                $step6 = 'current';
                            }
                        } else {
                            $step5 = 'current';
                        }
                    } else {
                        $step4 = 'current';
                    }
                } else {
                    $step3 = 'current';
                }
            } else {
                $step2 = 'current';
            }
        } else {
            $step1 = 'current';
        }
        if ($user) {
            // if (
            //     $step1 == 'finished' && $step2 == 'finished' &&
            //     $step3 == 'finished' && $step4 == 'finished' &&
            //     $step5 == 'finished' && $step6 == 'finished'
            // ) {

            //     return redirect()->route('home');
            // }
            return view('newdesign.home', compact('user', 'image', 'step1', 'step2', 'step3', 'step4', 'step5', 'step6'));
        } else {
            return redirect()->route('reading-portal-register');
        }
    }
    private function Checkerstep1($id)
    {
        $step1Status = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->value('step1_status');

        return $step1Status === 1;
    }
    private function Checkerstep2($id)
    {
        $step2Status = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->value('step2_status');

        return $step2Status === 1;
    }
    private function Checkerstep3($id)
    {
        $step3Status = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->value('step3_status');

        return $step3Status === 1;
    }
    private function Checkerstep4($id)
    {
        $step4Status = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->value('step4_status');

        return $step4Status === 1;
    }
    private function Checkerstep6($id)
    {
        $step6Status = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->value('step6_status');

        return $step6Status === 1;
    }
    private function Checkerstep5($id)
    {
        $step5Status = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->value('step5_status');

        return $step5Status === 1;
    }
    public function step1(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();

        $profile = DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->first();

        $employers = DB::table('tbl_employer')->get();

        // Retrieve all records from tbl_country
        $countries = DB::table('tbl_country')->get();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();

        return view('newdesign.step1_profile', compact('user', 'image', 'profile', 'employers', 'countries'));
    }
    public function updateStep1(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();

        $id = $user->user_id;
        $inputs = $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'parent_first_name' => 'required|string',
            'student_last_name' => 'required|string',
            'student_first_name' => 'required|string',
            'parent_last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip' => 'required|string',
            'phone' => 'required|string',
            'timezone' => 'required|string',
            'employment' => 'required|string',
            'other_employer' => 'nullable|string', // Assuming other_employer is optional
        ]);


        DB::table('tbl_user')
            ->where('user_id', $id)
            ->update([
                'user_email' => $inputs['email'],
                'parent_fname' => $inputs['parent_first_name'],
                'parent_lname' => $inputs['parent_last_name'],
                'student_fname' => $inputs['student_first_name'],
                'student_lname' => $inputs['student_last_name'],
                'user_name_first' => $inputs['first_name'],
                'user_name_last' => $inputs['last_name'],
                'cell_phone' => $inputs['phone']
            ]);

        DB::table('tbl_user_profile')
            ->where('user_profile_id', $id)
            ->update([
                'user_profile_address_01' => $inputs['address'],
                'city_name' => $inputs['city'],
                'country_id' => $inputs['state'],
                'user_profile_address_zip' => $inputs['zip'],
                'employer_id' => $inputs['employment'],
                'time_zone' => $inputs['timezone'],
                'other_employer' => $inputs['other_employer']
            ]);



        // DB::table('tbl_complete_step')
        //     ->where('user_profile_id', $id) // Assuming you have a user_id column in tbl_complete_step
        //     ->update(['step1_status' => 1]);
        // Check if a record exists for the given user_profile_id
        $existingRecord = DB::table('tbl_complete_step')
            ->where('user_profile_id', $id)
            ->first();

        if ($existingRecord) {
            // Update the existing record
            DB::table('tbl_complete_step')
                ->where('user_profile_id', $id)
                ->update([
                    'step1_status' => 1,
                    'last_updated_at' => now(),
                ]);
        } else {
            // Insert a new record
            DB::table('tbl_complete_step')->insert([
                'user_profile_id' => $id,
                'step1_status' => 1,
                'step2_status' => 0,
                'step3_status' => 0,
                'step4_status' => 0,
                'step5_status' => 0,
                'step6_status' => 0,
                'last_updated_at' => now(),
            ]);
        }


        return redirect()->route('second-step');
    }

    public function step2(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();
        return view('newdesign.step2_training', compact('user', 'image'));
    }
    public function updateStep2(Request $request)
    {
        $videoId = $request->videoId;
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        // return response()->json(['success' => $videoId]);

        switch ($videoId) {
            case 1:
                DB::table('tbl_user_profile')
                    ->where('user_profile_id', $user->user_id)
                    ->update(['video_1_completed' => 1]);
                break;
            case 2:
                DB::table('tbl_user_profile')
                    ->where('user_profile_id', $user->user_id)
                    ->update(['video_2_completed' => 1]);
                break;
            case 3:
                DB::table('tbl_user_profile')
                    ->where('user_profile_id', $user->user_id)
                    ->update(['video_3_completed' => 1]);
                break;
            case 4:
                DB::table('tbl_user_profile')
                    ->where('user_profile_id', $user->user_id)
                    ->update(['video_4_completed' => 1]);
                break;
            default:
                // Handle invalid video ID
                return response()->json(['error' => 'Invalid video ID'], 400);
        }

        DB::table('tbl_complete_step')
            ->where('user_profile_id', $user->user_id) // Assuming you have a user_id column in tbl_complete_step
            ->update(['step2_status' => 1]);
        return response()->json(['success' => true]);
    }

    public function step3(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $profile = DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->first();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();
        return view('newdesign.step3_image', compact('user', 'profile', 'image'));
    }
    public function updateStep3(Request $request)
    {
        $request->validate([
            'picture' => 'nullable|image|mimes:jpeg,png|max:800',
            'user_other_activities' => 'required',
            'user_think' => 'required',
        ]);

        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();

        // Delete the existing picture if it exists
        $existingImage = DB::table('tbl_image')->where('user_id', $user->user_id)->first();
        if ($request->hasFile('picture')) {
            if ($existingImage) {
                $existingImagePath = $existingImage->image_path;
                $path = parse_url($existingImagePath, PHP_URL_PATH);
                $pathWithoutStorage = strstr($path, 'storage/');
                if (file_exists($pathWithoutStorage)) {
                    unlink($pathWithoutStorage);
                }
                DB::table('tbl_image')->where('user_id', $user->user_id)->delete();
            }


            $path = $request->file('picture')->store('users/images', 'public');
            $fileName = pathinfo($path, PATHINFO_BASENAME);
            $filePath = asset('storage/' . $path);
            DB::table('tbl_image')->updateOrInsert(
                ['user_id' => $user->user_id],
                ['image_path' => $filePath, 'image_name' => $fileName]
            );
        }

        // Update other profile information
        DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->update([
                'user_other_activities' => $request->user_other_activities,
                'user_think' => $request->user_think
            ]);

        DB::table('tbl_complete_step')
            ->where('user_profile_id', $user->user_id) // Assuming you have a user_id column in tbl_complete_step
            ->update(['step3_status' => 1]);
        return redirect()->route('forth-step');
    }
    public function step4(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $profile = DB::table('tbl_user_profile')
            ->where('user_profile_id', $user->user_id)
            ->first();
        $scheduale = DB::table('tbl_sched_availability')->get();
        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();
        $selectedItemIds = DB::table('tbl_item_user')
            ->where('user_id', $user->user_id)
            ->where('item_type_id', 11)
            ->pluck('item_id')
            ->toArray();

        $days = [];

        foreach ($scheduale as $item) {
            $day = $item->sched_availability_day;
            $time = $item->sched_availability_time;

            if (!isset($days[$day])) {
                $days[$day] = [];
            }

            $days[$day][] = $item;
        }

        return view('newdesign.step4_availability', compact('user', 'image', 'profile', 'selectedItemIds', 'days'));
    }
    public function updateStep4(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'week_time' => 'nullable|string',
            'languages' => 'nullable|array',
            'scheduale' => 'nullable|array',
        ]);

        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();

        // Update week time if present in the request
        if ($request->has('week_time')) {
            $weekTime = $request->input('week_time');
            DB::table('tbl_user_profile')
                ->where('user_profile_id', $user->user_id)
                ->update(['week_time' => $weekTime]);
        } else {
            DB::table('tbl_user_profile')
                ->where('user_profile_id', $user->user_id)
                ->update(['week_time' => null]);
        }
        if ($request->has('languages')) {
            $speakLanguageString = json_encode($request->input('languages'));
            DB::table('tbl_user_profile')
                ->where('user_profile_id', $user->user_id)
                ->update(['speak_language' => $speakLanguageString]);
        } else {
            DB::table('tbl_user_profile')
                ->where('user_profile_id', $user->user_id)
                ->update(['speak_language' => null]);
        }
        // Delete existing records for the user ID
        DB::table('tbl_item_user')
            ->where('user_id', $user->user_id)
            ->where('item_type_id', 11)
            ->delete();

        // Insert new schedule items if present in the request
        if ($request->has('scheduale')) {
            foreach ($request->scheduale as $itemId) {
                DB::table('tbl_item_user')->insert([
                    'item_id' => $itemId,
                    'item_type_id' => 11,
                    'user_id' => $user->user_id
                ]);
            }
        }
        DB::table('tbl_complete_step')
            ->where('user_profile_id', $user->user_id) // Assuming you have a user_id column in tbl_complete_step
            ->update(['step4_status' => 1]);

        return redirect()->route('fifth-step');
    }
    public function step5(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();

        return view('newdesign.step5_responsibilites', compact('user', 'image'));
    }
    public function updateStep5(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        DB::table('tbl_complete_step')
            ->where('user_profile_id', $user->user_id) // Assuming you have a user_id column in tbl_complete_step
            ->update(['step5_status' => 1]);

        return redirect()->route('sixth-step');
    }
    public function step6(Request $request)
    {
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $user->user_id)
            ->first();
        return view('newdesign.step6_pleadge', compact('user', 'image'));
    }
    public function updateStep6(Request $request)
    {
        $request->validate([
            'signature' => 'required|string', // Assuming 'signature' is the name of the input field
        ]);

        // Get the signature from the form
        $signature = $request->input('signature');

        // Get the user ID
        // $user = session('user');
        $user = DB::table('tbl_user')->where('user_id', session('id'))->first();
        $userId = $user->user_id;

        // Retrieve the user's first name and last name from the database
        $userProfile = DB::table('tbl_user')
            ->select('user_name_first', 'user_name_last')
            ->where('user_id', $userId)
            ->first();
        // Construct the full name from the user's first name and last name
        $fullName = $userProfile->user_name_first . ' ' . $userProfile->user_name_last;

        // Compare the provided signature with the full name
        if (strtolower($signature) !== strtolower($fullName)) {
            return redirect()->back()->with('error', 'Signature does not match the user\'s full name.');
        }

        DB::table('tbl_complete_profile')->updateOrInsert(
            ['user_profile_id' => $userId], // Condition
            ['signature' => $signature] // Data to be updated or inserted
        );

        DB::table('tbl_complete_step')
            ->where('user_profile_id', $user->user_id) // Assuming you have a user_id column in tbl_complete_step
            ->update(['step6_status' => 1]);

        return redirect()->route('home');
    }

    public function home()
    {
        $id = session('id');
        $user = DB::table('tbl_user')->where('user_id', $id)->first();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $id)
            ->first();
        if ($this->Checkerstep1($id)) {
            if ($this->Checkerstep2($id)) {
                if ($this->Checkerstep3($id)) {
                    if ($this->Checkerstep4($id)) {
                        if ($this->Checkerstep5($id)) {
                            if (!$this->Checkerstep6($id)) {
                                return redirect()->route('main-dashboard');
                            }
                        } else {
                            return redirect()->route('main-dashboard');
                        }
                    } else {
                        return redirect()->route('main-dashboard');
                    }
                } else {
                    return redirect()->route('main-dashboard');
                }
            } else {
                return redirect()->route('main-dashboard');
            }
        } else {
            return redirect()->route('main-dashboard');
        }
        return view('newdesign.dashboard', compact('image', 'user'));
    }


    public function ResetPassword(Request $request)
    {
        $email = $request->input('email');

        $user = DB::table('tbl_user')
            ->where('user_email', $email)
            ->whereNotNull('user_email')->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'Email address not found.'])->withInput();
        }

        $password = $user->user_password; // Retrieve the password from the database
        try {
            Mail::to($email)->send(new ResetPassword($password));
            return redirect()->back()->with('success', 'Your password has been sent to your email address.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Email sending failed, try later');
        }
    }
    public function ResetPasswordForm()
    {
        return view('newdesign.reset_password');
    }

    public function training()
    {
        $id = session('id');
        $user = DB::table('tbl_user')->where('user_id', $id)->first();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $id)
            ->first();
        return view('newdesign.training', compact('user', 'image'));
    }
    public function trainingVideo(Request $request, $id)
    {
        $data = [
            1 => [
                'video' => 'https://www.ourkidsreadinc.org/our_kids/assetsnew/videos/reading_budies_training_-_welcome1.mp4',
                'title' => '1. READING BUDDIES WELCOME!',
                'description' => 'Introduction to the Our Kids Read Reading Buddies program. Understand the time commitment, logistics and FAQs.'
            ],
            2 => [
                'video' => 'https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_student_led_learning4.mp4',
                'title' => '2. INTRODUCTION TO THE PROGRAM',
                'description' => 'Introduction to the Our Kids Read Reading Buddies program. Understand the time commitment, logistics and FAQs.'
            ],
            3 => [
                'video' => 'https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_student_led_learning4.mp4',
                'title' => '3. DIFFEENT STYLES OF READING',
                'description' => 'Introduction to the Our Kids Read Reading Buddies program. Understand the time commitment, logistics and FAQs.'
            ],
            4 => [
                'video' => 'https://ourkidsreadinc.org/our_kids/assetsnew/videos/reading_buddies_training_-_getting_to_know_your_student3.mp4',
                'title' => '4. UNDERSTANDING YOUR BUDDY’S READING PREFERENCES',
                'description' => 'The first time you read with your student, the absolute most important objective (after developing rapport) is to understand your students interests. This will, in turn, help you identify books the she/he will enjoy.'
            ]
        ];

    
        if (!array_key_exists($id, $data)) {
            return redirect()->route('training');
        }
        $video = $data[$id]['video'];
        $description = $data[$id]['description'];
        $title = $data[$id]['title'];


        $id = session('id');
        $user = DB::table('tbl_user')->where('user_id', $id)->first();

        $image = DB::table('tbl_image')
            ->select('image_path')
            ->where('item_type_id', 17)
            ->where('user_id', $id)
            ->first();
        return view('newdesign.training_video', compact('user', 'image', 'video', 'title', 'description'));
    }
}
