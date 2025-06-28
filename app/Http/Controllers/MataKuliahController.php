<?php
namespace App\Http\Controllers;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $mataKuliahs = MataKuliah::paginate();
        return view('mata-kuliah.index', 
                compact('mataKuliahs'))
                ->with('i', (request()->input('page', 1) - 1) * $mataKuliahs->perPage());
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $mataKuliah = new MataKuliah();
        $jur=\DB::table('jurusan')->pluck('jurusan','id');
        return view('mata-kuliah.create', compact('mataKuliah','jur'));
    }

    public function store(Request $request)
    {
        request()->validate(MataKuliah::$rules);
        $mataKuliah = MataKuliah::create($request->all());
        return redirect()->route('mata-kuliahs.index')
        ->with('success', 'MataKuliah created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $mataKuliah = MataKuliah::find($id);
        return view('mata-kuliah.show', compact('mataKuliah'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit(string $id)
    {
       $mataKuliah = MataKuliah::find($id);
        $jur        = \DB::table('jurusan')->pluck('jurusan','id');
       return view('mata-kuliah.edit', compact('mataKuliah','jur'));
    }


    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param MataKuliah $mataKuliah
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, string $id)
    {
      request()->validate(MataKuliah::$rules);
       $mataKuliah = MataKuliah::find($id)->update($request->all());
      return redirect()->route('matakuliahs.index')->with('success', 'MataKuliah updated successfully');
    }


    /**
    * @param int $id
    * @return \Illuminate\Http\RedirectResponse
    * @throws \Exception
    */
    public function destroy($id)
    {
        $mataKuliah = MataKuliah::find($id)->delete();
        return redirect()->route('mata-kuliahs.index')
        ->with('success', 'MataKuliah deleted successfully');
    }
}