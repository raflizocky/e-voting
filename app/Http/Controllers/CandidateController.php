<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidates = Candidate::get();

        return view('candidate.index', [
            'title' => 'E-Voting | Candidate List',
            'candidates' => $candidates,
        ]);
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
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:candidates,name',
            'picture' => 'image|mimes:jpeg,png,jpg|max:2048',
            'resume' => 'mimes:pdf|max:5120',
            'election_number' => 'required|unique:candidates,election_number',
        ]);

        $pictureFile = $request->file('picture');
        $pictureName = uniqid('picture_').'.'.$pictureFile->getClientOriginalExtension();
        $pictureFile->storeAs('', $pictureName);
        $validatedData['picture'] = $pictureName;

        $resumeFile = $request->file('resume');
        $resumeName = uniqid('resume_').'.'.$resumeFile->getClientOriginalExtension();
        $resumeFile->storeAs('', $resumeName);
        $validatedData['resume'] = $resumeName;
        Candidate::create($validatedData);

        return redirect()->route('candidate.index')->with('success', 'Candidate added successfully!');
    }

    /**
     * Display the specified resource.
     */
    // public function show($id)
    // {
    //     $candidates = Candidate::findOrFail($id);
    //     $pdfPath = storage_path('app/public/candidate-resumes/' . $candidates->resume);

    //     if (!File::exists($pdfPath)) {
    //         abort(404);
    //     }

    //     $headers = [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'inline; filename="' . $candidates->resume . '"',
    //     ];

    //     return response()->file($pdfPath, $headers);
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $candidates = Candidate::findOrFail($id);

        return response()->json($candidates);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $candidates = Candidate::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|unique:candidates,name,'.$candidates->id,
            'picture' => $request->hasFile('picture') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
            'resume' => $request->hasFile('resume') ? 'required|mimes:pdf' : 'nullable',
            'election_number' => 'required|unique:candidates,election_number,'.$candidates->id,
        ]);

        if ($request->hasFile('picture')) {
            if ($candidates->picture && Storage::exists($candidates->picture)) {
                Storage::delete($candidates->picture);
            }

            $pictureFile = $request->file('picture');
            $pictureName = uniqid('picture_').'.'.$pictureFile->getClientOriginalExtension();
            $pictureFile->storeAs('', $pictureName);
            $validatedData['picture'] = $pictureName;
        } else {
            $validatedData['picture'] = $candidates->picture;
        }

        if ($request->hasFile('resume')) {
            if ($candidates->resume && Storage::exists($candidates->resume)) {
                Storage::delete($candidates->resume);
            }

            $resumeFile = $request->file('resume');
            $resumeName = uniqid('resume_').'.'.$resumeFile->getClientOriginalExtension();
            $resumeFile->storeAs('', $resumeName);
            $validatedData['resume'] = $resumeName;
        } else {
            $validatedData['resume'] = $candidates->resume;
        }

        $candidates->update($validatedData);

        return redirect()->route('candidate.index')->with('message', 'Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidates = Candidate::findOrFail($id);

        if ($candidates->picture && Storage::exists($candidates->picture)) {
            Storage::delete($candidates->picture);
        }

        if ($candidates->resume && Storage::exists($candidates->resume)) {
            Storage::delete($candidates->resume);
        }

        $candidates->delete();

        return redirect()->route('candidate.index')->with('message', 'Data Berhasil Dihapus!');
    }
}
