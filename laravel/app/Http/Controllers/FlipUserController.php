<?php

namespace App\Http\Controllers;

use App\Models\FlipUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Lang;
use Illuminate\Http\Response;

class FlipUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flip_users = FlipUser::get()->toArray();
        //return response()->json($data, Response::HTTP_OK);
        return view('home', compact('flip_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate posted data
        $validator = Validator::make($request->all(), $this->getValidationRules($request));
        $validator->setAttributeNames($this->getValidationFieldsNaming());

        //if invalid, return response with error messages
        if ($validator->fails()) {
            $errors = $validator->errors();
            $data = $request->name;
            return view('register', compact(['data', 'errors']));
        } else {
            // store entity except the following fields if exist
            $dataset = $this->saveEntity($request->all());
            return redirect('flip-user');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Returns form validation rules
     * @param obj, entiry  , used for unique validations on update
     * @param string company_is_ota , used for checking if company is ota for the upload box
     * @return array
     */
    protected function getValidationRules($request)
    {
        $name = $request->name;
        $fullname = $request->fullname;
        $email = $request->email;
        $phone = $request->phone;
        $date_of_birth = $request->bdate;

        $rules = array(
            'name'           => 'required|max:30',
            'fullname'       => 'required|max:125',
            'email'          => 'required|unique:flip_users|email',
            'phone'          => 'required|numeric|digits:10|unique:flip_users',
            'date_of_birth'  => 'required|date',
        );

        return array_merge($rules);
    }

    /**
     * An inputName - human word mapping
     * used to create validation errors properly
     * @return array
     * @todo Complete array
     */
    protected function getValidationFieldsNaming($entity = null)
    {
        $texts = array(
            'name'              => Lang::get('validation.name'),
            'fullname'          => Lang::get('validation.fullname'),
            'email'             => Lang::get('validation.email'),
            'phone'             => Lang::get('validation.phone'),
            'date_of_birth'     => Lang::get('validation.date_of_birth'),
        );

        return array_merge($texts);
    }

    /**
     * Inserts/updates entity  &  pivots in database
     * @param  array post  Posted data
     * @param  obj entity, on update cases
     * @param  array $extras, logging data
     * @return array ($entity, $extras)
     */
    protected function saveEntity($post)
    {
        if (array_key_exists('_token', $post)) {
            unset($post['_token']);
        }

        $entity = new FlipUser();
        foreach ($post as $key => $value) {

            $entity->$key = $value;
        }
        //save model
        $entity->save();
    }
}
