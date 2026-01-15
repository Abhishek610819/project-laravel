<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(route('dashboard', absolute: false));
    // }
//     public function store(Request $request)
// {
//     $request->validate([
//         'name' => ['required', 'string', 'max:255'],
//         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//         'password' => ['required', 'confirmed', Rules\Password::defaults()],
//         'profile_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
//     ]);

//     $imagePath = null;

//     if ($request->hasFile('profile_image')) {
//         $imagePath = $request->file('profile_image')
//             ->store('profiles', 'public');
//     }

//     $user = User::create([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//         'profile_image' => $imagePath,
//     ]);

//     Auth::login($user);

//     return redirect(route('dashboard', absolute: false));
// }
public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'profile_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
    ]);

    $imageName = null;

    if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');

        // ✅ generate unique image name
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

        // ✅ store image in storage/app/public/profiles
        $image->storeAs('profiles', $imageName, 'public');
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'profile_image' => $imageName, // ✅ ONLY image name
    ]);

    Auth::login($user);

    return redirect(route('dashboard', absolute: false));
}

}
