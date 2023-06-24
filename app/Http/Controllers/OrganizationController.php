<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Http\Requests\OrganizationRequest;
use App\Http\Requests\OrganizationEditRequest;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Services\OrganizationService;

class OrganizationController extends Controller
{
    Protected OrganizationService $organizationService;

    Public function __construct(OrganizationService $organizationService)
    {
        $this->organizationService = $organizationService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->organizationService->viewOrganizations();
        // $organizations = Organization::with('job')->get();
        return view('Organization.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrganizationRequest $request)
    {
        $validated = $request-> validated();
        $this->organizationService->storeOrganization($validated);     
        return redirect()->route('organization.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organization $organization)
    {
        // dd($organization);
        // $validated = $request->validated();
        $data = Organization::find($organization->id);
        // $data = $this->organizationService->showOrganization($organization);
        // dd($data);
        return view('Organization.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organization $organization)
    {
        return view('Organization.edit',compact('organization'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrganizationEditRequest $request, Organization $organization)
    {
        $validatedorganization = $request-> validated();
        $this->organizationService->editOrganization($validatedorganization, $organization);
        return redirect()->route('organization.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organization $organization)
    {
        $this->organizationService->deleteOrganization($organization);
        return redirect()->route('organization.index');
    }
}
