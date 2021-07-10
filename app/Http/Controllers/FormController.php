<?php

namespace App\Http\Controllers;

use App\form;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;

class FormController extends Controller
{
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
        $form1  = new form;
        $form1->Name = $request->Name;
        $form1->Email = $request->Email;
        $form1->number = $request->number;
        $form1->Password = $request->Password;
        $form1->save();
        return redirect('Data');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(form $form)
    {
          $forms = $form->all();
        return view('table',compact('forms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(form $form, $id)
    {
        $forms = form::find($id);
        return view('update',compact('forms')) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, form $form)
    {
        $forms = form::find($request->id);
        $forms->Name = $request->Name;
        $forms->Email = $request->Email;
        $forms->number = $request->number;
        $forms->Password = $request->Password;
        $forms->save();
        return redirect('Data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(form $form, $id)
    {
        form::destroy($id);
        return redirect('Data');
    }
}
