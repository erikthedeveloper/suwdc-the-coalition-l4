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
}