<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('both', ['except' => ['index']]);
     }
     
    /**
     * Back Employee page.
     *
     * @return void
     */
     public function index(Request $request)
     {
        $employees = Employee::get();

        // Ajax response
         if ($request->ajax()) {
            return response()->json([
               'table' => view("back.components.employee-component", compact('employees'))->render(),
            ]);
         };

        return view('back.table', compact('employees'));
    }
      
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function create()
     {
      return view('back.store-update.create');
     }
      
     public function show($id)
     {
      return abort(404);
     }
     
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function upload(Request $request)
     {
        $file = $request->image;
        $filecontent = $file->openFile()->fread($file->getSize());
        $filename = date('YmdHis') . $file->getClientOriginalName();
        $file->move(public_path() . '/img/employees/', $filename);      //!!!/img/bg-img/ - custom
        return view('back.store-update.create', ['image' => $filename]);
     }

    /**
     * Create new employee instance.
     *
     * @return void
     */
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'surname' => 'required|string',
            'telephone' => 'min:9',
         ]);
          
        $validator->validate();
        
         $employee = new Employee();
         $employee->create($request->all());

        return redirect(route('employees.create'))->with('message-ok', 'Yangi hodim kiritilindi!');
     }
     
    /**
   * Show the form for editing the specified resource.
   *
   * @param  ...
   * @return \Illuminate\Http\Response
    */
    public function edit(Employee $employee)
    {
        return view('back.store-update.edit', compact('employee'));
    }

    /** *  Update the specified resource in storage. */
    public function update(Request $request, Employee $employee)
    {
      $employee->update($request->all());

      return redirect(route('employees.index'))->with('message-updated', "Ma'lumotlar omadli tarzda o`zgartirildi!");
    }
     
    /**   Delete a employee. */
    public function destroy(Request $request, Employee $employee)
    {
      $image = 'public/img/' . $employee->image;
      
      if(File::exists($image)){
         File::delete($image);
      }

       $employee->delete();

       return $this->index($request);
    }

}
