<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = ClassModel::all();
        return view('classes.index', compact('classes'));
    }

    public function show($id)
    {
        $class = ClassModel::findOrFail($id); // Fetch the class by ID
        return view('classes.show', compact('class')); // Return the 'classes.show' view with the class data
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        ClassModel::create($request->all());
        return redirect()->route('classes.index')->with('success', 'Class created successfully.');
    }

    public function edit(ClassModel $class)
    {
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, ClassModel $class)
    {
        $class->update($request->all());
        return redirect()->route('classes.index')->with('success', 'Class updated successfully.');
    }

    public function destroy(ClassModel $class)
    {
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully.');
    }
}
