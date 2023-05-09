<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Destination;
use Intervention\Image\Facades\Image;

class DestinationController extends Controller
{
    private $_notify_message = "Destination saved.";
    private $_notify_type = 'info';
    private $_destination_image_location = 'uploads/destination';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::orderBy('created_at', 'desc')->get();

        return view('backend.destination.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.destination.create');
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
            $image = $this->uploadDestination($request);
            $image ? $data['image'] = $image : false ;
            Destination::create($data);
        } catch (Exception $e) {
            $this->_notify_message = "Failed to save destination, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->route('backend.destination.index')->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type
        ]);
    }

    public function uploadDestination($request) {
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() ."-". $file->getClientOriginalName();
            $fileName = str_replace(' ', '-', $fileName);

            $image = $this->_destination_image_location. '/' .$fileName;
            $upload_success= $file->move($this->_destination_image_location, $fileName);

            $upload = Image::make($image);
            $upload->fit(990, 370)->save($this->_destination_image_location .'/'. $fileName, 100);
            
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
        $destination = Destination::findOrFail($id);
        // dd($food);

        return view('backend.destination.edit', compact('destination'));
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
            $image = $this->uploadDestination($request);
            $image ? $data['image'] = $image : false ;
            $destination = Destination::findOrFail($id);
            if($request->hasFile('image')) {
                if(is_file('uploads/destination/' . $destination->image)) {
                    unlink('uploads/destination/' . $destination->image);
                }
            }
            $destination->update($data);
        } catch (Exception $e) {
            $this->_notify_message = "Failed to save destination, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->route('backend.destination.index')->with([
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
            Destination::destroy($id);

            $this->_notify_message = "Destination deleted.";
        } catch (Exception $e) {
            $this->_notify_message = "Failed to delete destination, Try again.";
            $this->_notify_type = "danger";
        }

        return redirect()->route('backend.destination.index')->with([
            'notify_message' => $this->_notify_message,
            'notify_type' => $this->_notify_type
        ]);
    }
}
