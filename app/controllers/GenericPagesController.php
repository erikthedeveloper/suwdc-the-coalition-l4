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
        $member = $this->getFakeMember();
        $data   = compact('member');
        return View::make('pages.member', $data);
    }

    /**
     * @return User
     * @author Erik Aybar
     */
    public function getFakeMember()
    {
        Eloquent::unguard();
        $member      = new User();
        $member_attr = [
            "first_name" => "Erik",
            "last_name"  => "Aybar",
            "email"      => "erikthedeveloper@gmail.com",
            "skills"     => [
                "MVC",
                "PHP",
                "Javascript",
                "Kung Fu",
                "Laravel",
                "Ruby on Rails"
            ],
            "bio"              => "A great biography here....",
            "website_url"      => "http://erikaybar.name",
            "github_username"  => "erikthedeveloper",
            "twitter_username" => "erikthedev_",
            "city"             => "Hurricane, UT",
            "company"          => "PracticeGenius, LLC",
            "is_for_hire"      => false
        ];
        $member->fill($member_attr);
        return $member;
    }
}