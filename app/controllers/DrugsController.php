<?php

class DrugsController extends \BaseController {

	/**
	 * Display a listing of drugs
	 *
	 * @return Response
	 */
	public function index()
	{
		$drugs = Drug::paginate(10);

		return View::make('drugs.index', compact('drugs'));
	}

	/**
	 * Show the form for creating a new drug
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('drugs.create');
	}

	/**
	 * Store a newly created drug in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Drug::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Drug::create($data);

		return Redirect::to('admin/drugs');
	}

	/**
	 * Display the specified drug.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$drug = Drug::findOrFail($id);

		return View::make('drugs.show', compact('drug'));
	}

	/**
	 * Show the form for editing the specified drug.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$drug = Drug::find($id);

		return View::make('drugs.edit', compact('drug'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$drug = Drug::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Drug::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$drug->update($data);

		return Redirect::to('admin/drugs')->with('success', 'drug successfully updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Drug::destroy($id);

		return Redirect::back()->with('success', 'Drug has  been removed form the system ');
	}

}