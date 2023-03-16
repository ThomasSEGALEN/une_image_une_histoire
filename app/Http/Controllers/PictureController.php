<?php

namespace App\Http\Controllers;

use App\Http\Requests\PictureRequest;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('pictures_manage');

        $pictures = Picture::paginate(12);

        return view('pictures.index', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('pictures_manage');

        return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PictureRequest $request)
    {
        $this->authorize('pictures_manage');

        $titleAlreadyUsed = Picture::where('title', $request->title)->first();

        if ($titleAlreadyUsed) return back()->with('error', 'Ce titre est déjà utilisé');

        $file = $request->file('picture');
        $fileName = "{$request->title}.{$file->extension()}";

        Picture::create([
            'title' => $request->title,
            'description' => $request->description,
            'path' => "pictures/" . $fileName,
            'user_id' => auth()->user()->id,
        ]);

        $file->storeAs('public/pictures', $fileName);

        return back()->with('status', "L'image a été créée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        $pictures = Picture::all();

        return view('gallery', compact('pictures'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        $this->authorize('pictures_manage');

        return view('pictures.edit', compact('picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        $this->authorize('pictures_manage');

        if ($request->title !== $picture->title) {
            $titleAlreadyUsed = Picture::where('title', $request->title)->first();

            if ($titleAlreadyUsed) return back()->with('error', 'Ce titre est déjà utilisé');
        }

        $newPicture = $request->file('picture') ? true : false;
        $fileName = "";

        if ($newPicture) {
            $file = $request->file('picture');
            $fileName = "{$request->title}.{$file->extension()}";

            if (Storage::exists("public/" . $picture->path)) Storage::delete("public/" . $picture->path);

            $file->storeAs('public/pictures', $fileName);
        }

        $picture->update([
            'title' => $request->title,
            'description' => $request->description,
            'path' => $newPicture ? "pictures/" . $fileName : $picture->path,
            'user_id' => auth()->user()->id,
        ]);

        return back()->with('status', "L'image a été modifiée");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        $this->authorize('pictures_manage');

        if (Storage::exists("public/" . $picture->path)) Storage::delete("public/" . $picture->path);

        $picture->delete();

        return back()->with('status', "L'image a été supprimée");
    }
}
