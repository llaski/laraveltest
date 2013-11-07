<?php

class SnippetsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('snippets.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($default_snippet = '')
	{
		$validation_errors = Snippet::validate(Form::get());

		if ($validation_errors)
			return $validation_errors;
		else
		{
        	return View::make('snippets.create')
        			->with('snippet', $default_snippet);
        }
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$new_snippet = Snippet::create(array(
			'snippet' => Input::get('snippet')
		));

		if ($new_snippet)
			return Redirect::route('show_snippet', array('id' => $new_snippet->id));
		else
			return 'Failed';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$snippet = Snippet::find($id);

		if ($snippet)
        	return View::make('snippets.show', $snippet->toArray());
        else
        	Redirect::route('new_snippet');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('snippets.edit');
	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * Fork Snippet
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function fork($id)
	{
		$snippet = Snippet::find($id);

		if ( ! $snippet)
			Redirect::to_route('new_snippet');
		else
			return $this->create($snippet->snippet);
	}

}
