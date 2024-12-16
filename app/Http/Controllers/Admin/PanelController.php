<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProjectLink;
use App\Http\Requests\UpdateProjectLink;
use App\Models\Project;
use Hashids\Hashids;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PanelController extends Controller
{
    public function index(): View
    {
        $projects = auth()->user()->projects()->get();

        return view('admin.index', [
            'projects' => $projects,
        ]);
    }

    public function create(): View
    {
        return view('admin.create');
    }

    public function store(CreateProjectLink $createProjectLink): RedirectResponse
    {
        $project = Project::create([
            'repo' => $createProjectLink->createRepoName,
            'owner' => $createProjectLink->createRepoOwner,
            'description' => $createProjectLink->description,
            'user_id' => auth()->user()->id,
        ]);

        $project->save();

        return redirect()->route('admin.index');
    }

    public function edit($projectId): View
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $project = Project::find($decodedProjectId);

        return view('admin.edit', [
            'project' => $project,
        ]);
    }

    public function update(UpdateProjectLink $updateProjectLink, $projectId): RedirectResponse
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $project = Project::find($decodedProjectId);

        $project->owner = $updateProjectLink->repoOwner;
        $project->repo = $updateProjectLink->repoName;
        $project->description = $updateProjectLink->description;

        $project->save();

        return redirect()->route('admin.index');
    }

    public function delete($projectId): RedirectResponse
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $project = Project::find($decodedProjectId);

        if (! $project) {
            return redirect()->route('admin.index')->with('error', 'Project not found');
        }

        $project->delete();

        return redirect()->route('admin.index');
    }

    protected function decodeHash($projectId): int
    {
        $hashids = new Hashids(config('hashids.salt'), config('hashids.min_length'));

        $decoded = $hashids->decode($projectId);

        if (empty($decoded)) {
            abort(404, 'Project not found');
        }

        $decryptedProjectId = $decoded[0];

        return $decryptedProjectId;
    }
}
