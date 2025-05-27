<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Department;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $companies = Company::all();
        $departments = Department::all();

        return view('auth.register', compact('companies', 'departments'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'employee_number' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'department_id' => 'required|exists:departments,id',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $studentType = UserType::where('name', 'Alumno')->value('id');

        $user = User::create([
            'employee_number' => $request->employee_number,
            'name' => $request->name,
            'department_id' => $request->department_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type_id' => $studentType,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
