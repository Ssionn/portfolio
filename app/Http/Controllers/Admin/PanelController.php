<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Hashids\Hashids;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public $project;

    public function index()
    {
        $this->project = Project::all()->map(function ($project) {
            $project->truncated_description = $this->truncateString($project->description, 20);
            return $project;
        });

        return view('admin.index', [
            'projects' => $this->project,
        ]);
    }

    public function edit($projectId)
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $this->project = Project::find($decodedProjectId);

        return view('admin.edit', [
            'project' => $this->project,
        ]);
    }

    public function update(Request $request, $projectId)
    {
        $request->validate([
            'repoOwner' => 'required|string',
            'repoName' => 'required|string',
            'description' => 'required|string',
        ]);

        $decodedProjectId = $this->decodeHash($projectId);

        $this->project = Project::find($decodedProjectId);

        $this->project->owner = $request->repoOwner;
        $this->project->repo = $request->repoName;
        $this->project->description = $request->description;

        $this->project->save();

        return redirect()->route('admin.index');
    }

    public function delete($projectId)
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $this->project = Project::find($decodedProjectId);

        if(! $this->project) {
            return;
        }

        $this->project->delete();

        return redirect()->route('admin.index');
    }

    protected function decodeHash($projectId)
    {
        $hashids = new Hashids(config('hashids.salt'), config('hashids.min_length'));

        $decoded = $hashids->decode($projectId);

        if (empty($decoded)) {
            abort(404, 'Project not found');
        }

        $decryptedProjectId = $decoded[0];

        return $decryptedProjectId;
    }

    protected function truncateString($string, $limit) {
        if (strlen($string) > $limit) {
            return substr($string, 0, $limit) . '...';
        }

        return $string;
    }
}
