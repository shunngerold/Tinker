<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\BuildFull;
use App\Models\BuildUnit;
use App\Models\SavedBuilds;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\User;

class UserController extends Controller
{
    // Show landing page
    public function showLanding() {
        return view('components.layout');
    }
    // Show Login page
    public function showLogin() {
        return view('user.login');
    }
    // Authenticate User
    public function authUser(Request $request) {
        $loginFields = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        
        if (auth()->attempt($loginFields)) {
            if (auth()->user()->role == 1) {
                $request->session()->regenerate();
                return redirect(route('admin.landing'))->with('message','You are now logged in!');
            } else {
                $request->session()->regenerate();
                return redirect(route('user.index'))->with('message','You are now logged in!');
            }
        }
        return back()->withErrors(['password' => 'Invalid Credentials'])->onlyInput('password');
    }
    // Show Register Page
    public function showRegisterForm() {
        return view('user.register');
    }
    // Register the user
    public function registerNewUser(Request $request) {
        $formFields = $request->validate([
            'fname' => ['required','max:60'],
            'mname' => ['max:60'],
            'lname' => ['required','max:60'],
            'age' => ['required'],
            'contact_number' => ['required'],
            'experience' => ['required'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'password' => 'required|confirmed|min:8'
        ]);
        // Hash password
        $formFields['password'] = bcrypt($formFields['password']);
        // create user
        $user = User::create($formFields);
        // auto login user
        auth()->login($user);
        // return with message
        return redirect('/')->with('message','User successfully registered and logged-in!');
    }
    // Show Register Page
    public function showProfile() {
        return view('user.profile');
    }
    // User Logout
    public function userLogout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You have been logged out!');
    }
    // Show build page
    public function showBuildPage() {
        return view('user.build');
    }
    // Show full build page
    public function showFullBuildPage(BuildFull $buildfull) {
        return view('user.build_full', ['build' => $buildfull]);
    }
    // Show system-unit build page
    public function showUnitBuildPage(BuildUnit $build) {
        return view('user.build_unit', ['build' => $build]);
    } 
    // Show categories
    public function showCategories() {
        return view('user.category');
    }
    // Show brands
    public function showBrands() {
        return view('user.brands');
    }
    // Show saved builds
    public function showSavedBuild() {
        // dd(SavedBuilds::latest());
        return view('user.build_saved',['saved' => SavedBuilds::all()]);
    }
    // Show browse page
    public function showBrowse() {
        return view('user.browse');
    }
    // Show special offer page
    public function showSpecialOffer() {
        return view('user.special_offer');
    }
    // Show most popular page
    public function showMostPopular() {
        return view('user.most_popular');
    }
    // Show most popular page
    public function showNewArrival() {
        return view('user.new_arrival');
    }
    // Show specific page page
    public function showSpecificProduct(Products $products) {
        return view('user.specific', ['products' => $products]);
    }
    // Show computer finder page
    public function showComputerFinder() {
        return view('user.computer_finder');
    }
}
