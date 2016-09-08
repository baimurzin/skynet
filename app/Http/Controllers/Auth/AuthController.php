<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;


    protected $redirectTo = '/cabinet';
    protected $redirectPath = '/cabinet';
    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    protected function getFailedLoginMessage()
    {
        return "Неверно введен логин или пароль";
    }

    public function postRegister(Request $request)
    {

        $this->validate($request, [
            'password' => 'required|min:6|confirmed',
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
            'skype' => 'required|max:60',
            'phone' => 'required|max:15',
            'email' => 'required|unique:users|max:100|email',
            'referer' => 'required|max:100|email'
        ]);


        $referer_mail = $request->input('referer');
        $referer = User::whereEmail($referer_mail)->first();

        if (!$referer) {
            return Redirect::back()->with('error', 'Такого реферала не существует');
        }

        $user = new User();
        $user->fill($request->all());
        $user->referer_id = $referer->id;
        $user->password = Hash::make($request->input('password'));

        $user->save();
        if (Auth::attempt(['email' => $user->email, 'password' => $request->input('password')])) {
            return redirect()->intended('/cabinet');
        }

        return back()->with('message', 'Беда с базой, попробуй позже');
    }


}
