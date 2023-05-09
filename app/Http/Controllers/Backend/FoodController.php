<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Food;

class FoodController extends Controller
{
    private $_notify_message = "Food saved.";
    private $_notify_type = 'info';
    private $_food_image_location = 'uploads/food';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderBy('created_at', 'desc')->get();

        return view('backend.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // dd($request->all());
            $data = $request->all();
            $image = $this->uploadFood($request);
            $image ? $data['image'] = $image : false ;
            Food::create($data);
        } catch (Exception $e) {
            $this->_notify_message = "Failed to save food, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->route('backend.food.index')->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type
        ]);
    }

    public function uploadFood($request) {
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() ."-". $file->getClientOriginalName();
            $fileName = str_replace(' ', '-', $fileName);

            $image = $this->_food_image_location. '/' .$fileName;
            $upload_success= $file->move($this->_food_image_location, $fileName);

            $upload = Image::make($image);
            $upload->fit(990, 370)->save($this->_food_image_location .'/'. $fileName, 100);
            
            return $fileName;
        }

        return false;
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
        $food = Food::findOrFail($id);
        // dd($food);

        return view('backend.food.edit', compact('food'));
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
        try {
            $data = $request->all();
            $image = $this->uploadFood($request);
            $image ? $data['image'] = $image : false ;
            $food = food::findOrFail($id);
            if($request->hasFile('image')) {
                if(is_file('uploads/food/' . $food->image)) {
                    unlink('uploads/food/' . $food->image);
                }
            }
            $food->update($data);
        } catch (Exception $e) {
            $this->_notify_message = "Failed to save food, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->route('backend.food.index')->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Food::destroy($id);

            $this->_notify_message = "Food deleted.";
        } catch (Exception $e) {
            $this->_notify_message = "Failed to delete food, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->route('backend.food.index')->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type
        ]);
    }
}
