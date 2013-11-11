<?php

class PhotosController extends BaseController {

	protected $layout = 'photos.master';
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return Photo::all(); //This is awesome, returns json by default
		$photos = Photo::all();
		
		$this->layout->content = View::make('photos.index', compact('photos'));
		// return View::make('photos.index', compact('photos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $this->layout->content = View::make('photos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * //POST /photos
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$photo = Photo::find($id);

        $this->layout->content = View::make('photos.show', compact('photo'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * 
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$photo = Photo::find($id);

        $this->layout->content = View::make('photos.edit', compact('photo'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * //PUT /photos/$id
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
	 * //DELETE /photos/$id
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
