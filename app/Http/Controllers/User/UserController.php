<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Goodbye!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('user.user', ['css' => 'user/user']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $id = $request->post('id');

        if (is_null($id)) {
            throw ValidationException::withMessages(['id' => 'The User field is required.']);
        }

        if (User::query()->where('username', '=', $id)->exists()) {
            $request->validate([
                'password' => 'required'
            ]);
            $attributes = [
                'username' => $request->post('id'),
                'password' => $request->post('password')
            ];
        }

        if (User::query()->where('mail', '=', $id)->exists()) {
            $request->validate([
                'password' => 'required'
            ]);
            $attributes = [
                'mail' => $request->post('id'),
                'password' => $request->post('password')
            ];
        }

        if (auth()->attempt($attributes)) {
            session()->regenerate(); // provide session fixation
            return redirect('/')->with('success', 'Logged in');
        }

        throw ValidationException::withMessages([
            'id' => 'Wrong credentials.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
