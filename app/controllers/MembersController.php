<?php

class MembersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /members
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('members.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /members/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = [
            'member' => new User
        ];
		return View::make('members.create', $data);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /members
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /members/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $member = User::where('email', 'erikthedeveloper@gmail.com')->firstOrFail();
        $data   = compact('member');
		return View::make('members.show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /members/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $member = User::where('email', 'erikthedeveloper@gmail.com')->firstOrFail();
        $data   = compact('member');
		return View::make('members.edit', $data);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /members/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /members/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}