<?php

/**
 * Class GenericPagesController
 * @author Erik Aybar
 */
class GenericPagesController extends BaseController
{

    /**
     * @return \Illuminate\View\View
     * @author Erik Aybar
     */
    public function homePage()
    {
        return View::make('pages.home');
    }

    /**
     * @return \Illuminate\View\View
     * @author Erik Aybar
     */
    public function ourMissionPage()
    {
        return View::make('pages.mission');
    }

    /**
     * @return \Illuminate\View\View
     * @author Erik Aybar
     */
    public function ourMembersPage()
    {
        return View::make('pages.members');
    }

    /**
     * @return \Illuminate\View\View
     * @author Erik Aybar
     */
    public function viewMemberPage()
    {
        $member = User::where('email', 'erikthedeveloper@gmail.com')->firstOrFail();
        $data   = compact('member');
        return View::make('pages.member', $data);
    }
}