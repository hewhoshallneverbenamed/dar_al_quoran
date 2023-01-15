<?php

namespace App\Http\Controllers;

use App\QuranSession;
use Illuminate\Http\Request;

/**
 * Class QuranSessionController
 * @package App\Http\Controllers
 */
class QuranSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quranSessions = QuranSession::paginate();

        return view('quran-session.index', compact('quranSessions'))
            ->with('i', (request()->input('page', 1) - 1) * $quranSessions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $quranSession = new QuranSession();
        return view('quran-session.create', compact('quranSession'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(QuranSession::$rules);

        $quranSession = QuranSession::create($request->all());

        return redirect()->route('quran-sessions.index')
            ->with('success', 'QuranSession created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quranSession = QuranSession::find($id);

        return view('quran-session.show', compact('quranSession'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quranSession = QuranSession::find($id);

        return view('quran-session.edit', compact('quranSession'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  QuranSession $quranSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuranSession $quranSession)
    {
        request()->validate(QuranSession::$rules);

        $quranSession->update($request->all());

        return redirect()->route('quran-sessions.index')
            ->with('success', 'QuranSession updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $quranSession = QuranSession::find($id)->delete();

        return redirect()->route('quran-sessions.index')
            ->with('success', 'QuranSession deleted successfully');
    }
}
