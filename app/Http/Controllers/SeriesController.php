<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller {
    private  $totalPage = 4;

    public function index()
    {
        $series = Serie::query()
            ->orderBy('title')
            ->paginate($this->totalPage);

        return view('series.index', compact(['series']));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store( Request $request)
    {
        $nameFile = null;

        $serie = new Serie();
        $serie->title = $request->title;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $name = uniqid(date('HisYmd'));

            $extension = $request->image->extension();

            $nameFile = "{$name}.{$extension}";

            $serie->url = $request->image->storeAs('series', $nameFile);
            if (!$serie->url) {
                self::notification('error', 'This is for error.');

                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
            }
        }

        $serie->save();
        self::notification('success', 'Item created successfully.');

        return redirect()->route('series');
    }

    public function notification($key,$value)
    {
        session()->put($key,$value);

        return view('series.notificationCheck');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        return redirect()->back()->with('success', 'Série removida com sucesso!');
    }
}
