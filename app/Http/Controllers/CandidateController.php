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

        return view("candidate.index", [
            'title' => 'E-Voting | Candidate List',
            'candidates' => $candidates
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

        $pictureName = null;
        $resumeName = null;

        if ($request->file('picture')) {
            $pictureFile = $request->file('picture');
            $pictureName = uniqid('picture_') . '.' . $pictureFile->getClientOriginalExtension();
            $pictureFile->storePubliclyAs('candidate-pictures', $pictureName);
        }

        if ($request->file('resume')) {
            $resumeFile = $request->file('resume');
            $resumeName = uniqid('resume_') . '.' . $resumeFile->getClientOriginalExtension();
            $resumeFile->storePubliclyAs('candidate-resumes', $resumeName);
        }

        Candidate::create([
            'name' => $request->name,
            'picture' => $pictureName,
            'resume' => $resumeName,
            'election_number' => $request->election_number,
            'total_voter' => 0,
        ]);

        return redirect()->route('candidate.index')->with('message', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $candidates = Candidate::findOrFail($id);
        $pdfPath = storage_path('app/public/candidate-resumes/' . $candidates->resume);

        if (!File::exists($pdfPath)) {
            abort(404);
        }

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $candidates->resume . '"',
        ];

        return response()->file($pdfPath, $headers);
    }

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
            'name' => 'required|unique:candidates,name,' . $candidates->id,
            'picture' => $request->hasFile('picture') ? 'required|image|mimes:jpeg,png,jpg' : 'nullable',
            'resume' => $request->hasFile('resume') ? 'required|mimes:pdf' : 'nullable',
            'election_number' => 'required|unique:candidates,election_number,' . $candidates->id,
        ]);

        $newPictureName = $candidates->picture;
        $newResumeName = $candidates->resume;

        if ($request->hasFile('picture')) {
            $pictureFile = $request->file('picture');
            $newPictureName = uniqid('picture_') . '.' . $pictureFile->getClientOriginalExtension();
            $pictureFile->storePubliclyAs('candidate-pictures', $newPictureName);

            if ($candidates->picture) {
                Storage::delete('candidate-pictures/' . $candidates->picture);
            }
        }

        if ($request->hasFile('resume')) {
            $cvFile = $request->file('resume');
            $newResumeName = uniqid('resume_') . '.' . $cvFile->getClientOriginalExtension();
            $cvFile->storePubliclyAs('candidate-resumes', $newResumeName);

            if ($candidates->resume) {
                Storage::delete('candidate-resumes/' . $candidates->resume);
            }
        }

        $candidates->update([
            'name' => $request->name,
            'picture' => $newPictureName,
            'resume' => $newResumeName,
            'election_number' => $request->election_number,
        ]);

        return redirect()->route('candidate.index')->with('message', 'Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $candidates = Candidate::findOrFail($id);

        if ($candidates->picture) {
            Storage::delete('candidate-pictures/' . $candidates->picture);
        }

        if ($candidates->resume) {
            Storage::delete('candidate-resumes/' . $candidates->resume);
        }

        $candidates->delete();

        return redirect()->route('candidate.index')->with('message', 'Data Berhasil Dihapus!');
    }
}
