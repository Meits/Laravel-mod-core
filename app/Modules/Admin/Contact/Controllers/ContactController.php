<?php

namespace App\Modules\Admin\Contact\Controllers;

use App\Modules\Admin\Contact\Models\Contact;
use App\Modules\Admin\Dashboard\Classes\Base;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Base
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @var ContactApplication $applications */
        $items = Contact::orderBy('created_at', 'DESC')->paginate(config('settings.paginate_admin'));

        /** @var String $title */
        $this->title = __("admin.contact_messages");

        /** @var String $content */
        $this->content = view('Admin::Contact.index')->with(['items' => $items, 'title' => $this->title])->render();

        //render output
        return $this->renderOutput();
    }

    /**
     * Create of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modules\Admin\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Modules\Admin\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modules\Admin\Contact\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        // redirect back to page
        return \back()
            ->with(
                [
                    'message' => \trans('admin.contact_delete_success_message'),
                    'status' => 'success',
                ]
            );
    }
}
