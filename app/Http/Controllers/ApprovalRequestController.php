<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApprovalRequest;

class ApprovalRequestController extends Controller
{
    public function index()
    {
        // Fetch all approval requests and return a view to display them
       
        return view('admin.approval_request.index');
    }

    public function show($id)
    {
        // Fetch a specific approval request by its ID and return a view to display the details
       
    }

    public function store(Request $request)
    {
        // Process and store a new approval request
        // $request->validate([...]); // You can add validation rules here

    }

    // Add other controller methods as needed
}