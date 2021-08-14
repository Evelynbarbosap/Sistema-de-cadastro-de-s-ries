<?php

namespace App\Http\Controllers;

use App\Assessments;
use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    private  $totalPage = 4;

    public function index()
    {
        $series = Serie::query()->orderByDesc('title')->paginate($this->totalPage);

        return view('series.index', compact(['series']));
    }

    public function create()
    {
        $assessments = Assessments::query()->get();

        return view('series.create', compact(['assessments']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'assessment' => 'required',
        ]);

        $serieExists = Serie::query()->where('title', $request->title)->first();
        if (!$serieExists) {
            $serie = new Serie();
            $serie->title = $request->title;
            $serie->assessment_id = $request->assessment;
            $serie->save();
        }

        self::notification('success', 'Item created successfully.');

        return redirect()->route('series');
    }

    public function edit(Serie $serie)
    {
        $assessments = Assessments::query()->get();

        return view('series.edit', compact(['serie', 'assessments']));
    }

    public function update(Request $request, Serie $serie)
    {
        $request->validate([
            'title' => 'required|string',
            'assessment' => 'required',
        ]);

        $serieExists = Serie::query()->where('title', $request->title)->first();
        if ($serieExists) {
            $serie->title = $request->title;
            $serie->assessment_id = $request->assessment;
            $serie->update();
        }

        return redirect()->route('series');
    }

    public function notification($key,$value)
    {
        session()->put($key,$value);

        return view('notification');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        return redirect()->back()->with('success', 'Série removida com sucesso!');
    }
}
