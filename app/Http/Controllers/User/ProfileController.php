<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Rules\FileTypeValidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Constants\Status;

class ProfileController extends Controller
{
    public function profile()
    {
        $pageTitle = __('Profile Settings');
        $user = auth()->user();
        return view('Template::user.profile_setting', compact('pageTitle', 'user'));
    }

    public function submitProfile(Request $request)
    {
        $countryData  = (array)json_decode(file_get_contents(resource_path('views/partials/country.json')));
        $countryCodes = implode(',', array_keys($countryData));
        $mobileCodes  = implode(',', array_column($countryData, 'dial_code'));
        $countries    = implode(',', array_column($countryData, 'country'));

        $request->validate([
            'firstname'    => 'nullable|string',
            'lastname'     => 'nullable|string',
            'country_code' => 'nullable|string|max:10|in:' . $countryCodes,
            'country'      => 'nullable|string|max:100|in:' . $countries,
            'mobile_code'  => 'nullable|string|max:10|in:' . $mobileCodes,
            'mobile'       => 'nullable|string|max:40|regex:/^([0-9]*)$/',
            'address'      => 'nullable|string|max:255',
            'city'         => 'nullable|string|max:100',
            'state'        => 'nullable|string|max:100',
            'zip'          => 'nullable|string|max:40',
            'image'        => ['nullable', new FileTypeValidate(['png', 'jpg', 'jpeg'])]
        ]);

        $user = auth()->user();

        // Check if mobile number already exists for another user
        if ($request->mobile && $request->mobile_code) {
            $exist = User::where('id', '!=', $user->id)
                ->where('mobile', $request->mobile)
                ->where('dial_code', $request->mobile_code)
                ->exists();

            if ($exist) {
                $notify[] = ['error', __('This mobile number is already in use.')];
                return back()->withNotify($notify)->withInput();
            }
        }

        $user->firstname    = $request->firstname;
        $user->lastname     = $request->lastname;
        $user->country_code = $request->country_code;
        $user->country_name = $request->country;
        $user->dial_code    = $request->mobile_code;
        $user->mobile_code  = $request->mobile_code;
        $user->mobile       = $request->mobile;
        $user->address      = $request->address;
        $user->city         = $request->city;
        $user->state        = $request->state;
        $user->zip          = $request->zip;
        $user->profile_complete = Status::YES;

        if ($request->hasFile('image')) {
            try {
                $user->image = fileUploader($request->image, getFilePath('userProfile'), getFileSize('userProfile'), $user->image);
            } catch (\Exception $e) {
                $notify[] = ['error', __('Profile picture upload failed.')];
                return back()->withNotify($notify);
            }
        }

        $user->save();
        $notify[] = ['success', __('Profile was updated successfully.')];
        return back()->withNotify($notify);
    }

    public function changePassword()
    {
        $pageTitle = __('Change Password');
        return view('Template::user.password', compact('pageTitle'));
    }

    public function submitPassword(Request $request)
    {

        $passwordValidation = Password::min(8);
        if (gs('secure_password')) {
            $passwordValidation = $passwordValidation->mixedCase()->numbers()->symbols()->uncompromised();
        }

        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', $passwordValidation]
        ]);

        $user = auth()->user();
        if (Hash::check($request->current_password, $user->password)) {
            $password = Hash::make($request->password);
            $user->password = $password;
            $user->save();
            $notify[] = ['success', __('Password was changed successfully.')];
            return back()->withNotify($notify);
        } else {
            $notify[] = ['error', __('Passwords do not match.')];
            return back()->withNotify($notify);
        }
    }
}