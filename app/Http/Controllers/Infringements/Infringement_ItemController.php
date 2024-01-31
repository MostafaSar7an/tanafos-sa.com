<?php

namespace App\Http\Controllers\Infringements;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfringement_Item;
use App\Models\Classroom;
use App\Models\Grade;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use App\Models\Infringement;
use Illuminate\Http\Request;
class Infringement_ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Infringement_Items = Infringement::all();
        return view('pages.Infringements.Infringements_Item', compact('Infringement_Items'));
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
    public function store(StoreInfringement_Item $request)
    {
        //
        try {
            $validated = $request->setValidator();
            $Infringement_Item = new Infringement_Item();
            $Infringement_Item->item = $request->item;
            $Infringement_Item->Points_Rebate = $request->Points_Rebate;
            $Infringement_Item->Notes = $request->Notes;
            $Infringement_Item->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('pages.Infringements.Infringements_Item');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update
        try {

            $validated = $request->validated();
            $Infringement_Items = Infringement::findOrFail($request->id);
            $Infringement_Items->update([
                $Infringement_Item->item = $request->item,
                $Infringement_Item->Points_Rebate = $request->Points_Rebate,
                $Infringement_Item->Notes = $request->Notes,
            ]);
            toastr()->success(trans('messages.Update'));
            return redirect()->route('pages.Infringements.Infringements_Item');
        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $MyItem_id = Infringement::where('id',$request->id)->delete();


        if ($MyItem_id->count()==1){
            $MyItem_id = Infringement::findOrFail($request->id)->delete();
            toastr()->error(trans('messages.Delete'));
            return redirect()->route('Infringements_item');
        }




    }
}
