<?php

class AchievementsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return array('achievements' => Achievement::all()->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$achievement = new Achievement;
		$achievement->title = Input::get('title');
		$achievement->achieved_at = Input::get('achieved_at');

		$achievement->save();

		return array('achievements' => $achievement->toArray());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return array('achievements' => Achievement::find($id)->toArray());
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$achievement = Achievement::find($id);
		$achievement->title = Input::get('title');
		$achievement->achieved_at = Input::get('achieved_at');

		$achievement->save();

		return array('achievements' => $achievement->toArray());
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$achievement = Achievement::find($id);
		$achievement->delete();

		return Response::make(null, 204);
	}

}
