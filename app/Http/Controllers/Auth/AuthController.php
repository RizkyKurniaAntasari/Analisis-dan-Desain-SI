<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
  
class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function index(): View
    {
        return view('auth.login');
    }  
      

    public function registration(): View
    {
        return view('auth.registration');
    }
      

    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withError('Oppes! You have entered invalid credentials');
    }
      

    public function postRegistration(Request $request): RedirectResponse
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $user = $this->create($data);
            
        Auth::login($user); 

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    // <=============================== [D A S H B O A R D] ===============================>
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    // <=============================== [ P R O F I L E ] ===============================>
    public function profile()
    {
        if(Auth::check()){
            return view('profile');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    // <=============================== [P E N G A D U A N ] ===============================>
    public function pengaduan()
    {
        if(Auth::check()){
            return view('pengaduan');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    // <=============================== [ P E N G U M U M A N] ===============================>
    public function pengumuman()
    {
        if(Auth::check()){
            return view('pengumuman');
        }
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    


    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
    

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
