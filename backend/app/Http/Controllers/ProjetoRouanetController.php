<?php

namespace App\Http\Controllers;

use App\Models\ProjetoRouanet;
use Illuminate\Http\Request;

class ProjetoRouanetController extends Controller
{
    public function index()
    {
        return response()->json(ProjetoRouanet::all(), 200);
    }

    public function show($id)
    {
        $projeto = ProjetoRouanet::find($id);
        if (is_null($projeto)) {
            return response()->json(['message' => 'Project not found'], 404);
        }
        return response()->json($projeto, 200);
    }

    public function store(Request $request)
    {
        $projeto = ProjetoRouanet::create($request->all());
        return response()->json($projeto, 201);
    }

    public function update(Request $request, $id)
    {
        $projeto = ProjetoRouanet::find($id);
        if (is_null($projeto)) {
            return response()->json(['message' => 'Project not found'], 404);
        }
        $projeto->update($request->all());
        return response()->json($projeto, 200);
    }

    public function destroy($id)
    {
        $projeto = ProjetoRouanet::find($id);
        if (is_null($projeto)) {
            return response()->json(['message' => 'Project not found'], 404);
        }
        $projeto->delete();
        return response()->json(null, 204);
    }
}
