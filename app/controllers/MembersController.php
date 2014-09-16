<?php

/**
 * Class MembersController
 * @author Erik Aybar
 */
class MembersController extends BaseController
{

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $members = User::get();
        $data    = compact('members');
        return View::make('members.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $member = new User;
        $data   = compact('member');
        return View::make('members.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     * @return Response
     */
    public function store()
    {
        $member_create_data = Input::only(['first_name', 'last_name', 'email', 'password', 'password_confirmation']);
        $rules              = [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|min:6|alpha_num|confirmed'
        ];
        $validator          = Validator::make($member_create_data, $rules);
        if (!$validator->passes()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator->errors())
                ->withFlashMessage('Whoops. Try again!');
        }

        $member_create_data['password'] = Hash::make($member_create_data['password']);
        $member_create_data['email']    = strtolower($member_create_data['email']);
        $new_member                     = User::create($member_create_data);

        return Redirect::route('members.show', $new_member->makeSlug());
    }

    /**
     * Display the specified resource.
     * @param  int $name_slug
     * @return Response
     */
    public function show($name_slug)
    {
        try {
            $member = $this->getMemberUsingSlug($name_slug);
        } catch (Exception $e) {
            return Redirect::route('members.index');
        }
        $data = compact('member');
        return View::make('members.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param $name_slug
     * @return Response
     */
    public function edit($name_slug)
    {
        try {
            $member = $this->getMemberUsingSlug($name_slug);
        } catch (Exception $e) {
            return Redirect::route('members.index');
        }
        $data = compact('member');
        return View::make('members.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param $name_slug
     * @throws Exception
     * @return Response
     */
    public function update($name_slug)
    {
        $member = $this->getMemberUsingSlug($name_slug);

        $member_update_data = Input::only(['first_name', 'last_name', 'email']);
        $rules              = ['first_name' => 'required', 'last_name' => 'required'];
        $rules['email']     = ($member_update_data['email'] != $member->email) ? 'required|email|unique:users' : '';
        $validator          = Validator::make($member_update_data, $rules);
        if (!$validator->passes()) {
            return Redirect::back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        $member->update($member_update_data);
        return Redirect::route('members.edit', $member->makeSlug());
    }

    /**
     * Remove the specified resource from storage.
     * @param $name_slug
     * @throws Exception
     * @return Response
     */
    public function destroy($name_slug)
    {
        try {
            $member = $this->getMemberUsingSlug($name_slug);
        } catch (Exception $e) {
            return Redirect::route('members.index');
        }
        $deleted = $member->delete();
        return Redirect::route('members.index')
            ->withFlashMessage('Member deleted...');
    }

    /**
     * @param $first
     * @param $last
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @return User
     * @author Erik Aybar
     */
    public function getMemberUsingSlug($name_slug)
    {
        $name_segments = explode('-', $name_slug);
        $first         = $name_segments[0];
        $last          = $name_segments[1];
        $member        = User::where('first_name', $first)->where('last_name', $last)->firstOrFail();
        return $member;
    }
}