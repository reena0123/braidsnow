<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Str;
use Storage;

class ServiceController extends Controller
{

	public function __construct(private Service $service,private $baseView = 'admin.services.'){}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = $this->service->latest('sort')->get();

        return view($this->baseView.__FUNCTION__,compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->baseView.__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        	'title' => ['required','min:3','max:255'],
        	'slug' => ['required','min:3','max:255'],
        	'sort' => ['required','numeric','unique:services'],
        	'image' => ['required','image','size:244'],
        ]);

        try {
        	
	        $this->service->create([
	        	'id' => Str::uuid(),
	        	'title' => $request->title,
	        	'slug' => Str::slug($request->title),
	        	'sort' => $request->sort,
	        	'image' => $request->image->store('services','public')
	        ]);
	        return back()->withSuccess('Service is created');

        } catch (Exception $e) {
        	return back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view($this->baseView.__FUNCTION__,compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
        	'title' => ['required','min:3','max:255'],
        	'slug' => ['required','min:3','max:255'],
        	'sort' => ['required','numeric','unique:services,'.$service->id],
        	'image' => ['nullable','image','size:244'],
        ]);

        try {
        	
        	$service->title = $request->title;
        	$service->slug = Str::slug($request->title);
        	$service->sort = $request->sort;
        	if ($request->hasFile('image')) {
        		 Storage::delete($service->image);
        		$service->image = $request->image->store('services','public');
        	}
        	$service->save();

	        
	        return back()->withSuccess('Service is updated');

        } catch (Exception $e) {
        	return back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        try {
        	
        	$service->delete();

        } catch (Exception $e) {

        	return back()->withError($e->getMessage());	
        }
    }
}
