<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     * GET /api/tools
     */
    public function index()
    {
        // retrieve all tools
        return Tool::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /api/tools/{id}
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'product_id' => 'required|exists:products,id'
        ]);

        // Create a new tool
        $tool = new Tool();
        $tool->name = $request->name;
        $tool->quantity = $request->quantity;
        $tool->product_id = $request->product_id;
        $tool->save();

        return $tool;
    }

    /**
     * Display the specified resource.
     * GET /api/tools/{id}
     */
    public function show(Tool $tool, $id)
    {
        // Show specific tool
        return Tool::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /api/tools/{id}
     */
    public function update(Request $request, Tool $tool, $id)
    {
        // Validate the requested data
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'product_id' => 'required|exists:products,id'
        ]);

        // Update the tool attributes
        $tool = Tool::findOrFail($id);
        $tool->name = $request->name ?? $tool->name;
        $tool->quantity = $request->quantity ?? $tool->quantity;
        $tool->product_id = $request->product_id ?? $tool->product_id;
        $tool->save();

        return $tool;
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /api/tools/{id}
     */
    public function destroy(Tool $tool, $id)
    {
        //Find tool by id
        $tool = Tool::findOrFail($id);

        // delete specific tool
        $tool->delete();

        // response message
        return response()->json(['message' => 'Tool deleted successfully']);
    }
}
