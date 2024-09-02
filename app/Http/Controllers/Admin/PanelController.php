<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProjectLink;
use App\Http\Requests\UpdateProjectLink;
use App\Models\Project;
use Hashids\Hashids;

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

    public function create()
    {
        return view('admin.create');
    }

    public function store(CreateProjectLink $createProjectLink)
    {
        $this->project = new Project;

        $this->project->repo = $createProjectLink->createRepoName;
        $this->project->owner = $createProjectLink->createRepoOwner;
        $this->project->description = $createProjectLink->description;

        $this->project->save();

        return redirect()->route('admin.index');
    }

    public function edit($projectId)
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $this->project = Project::find($decodedProjectId);

        return view('admin.edit', [
            'project' => $this->project,
        ]);
    }

    public function update(UpdateProjectLink $updateProjectLink, $projectId)
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $this->project = Project::find($decodedProjectId);

        $this->project->owner = $updateProjectLink->repoOwner;
        $this->project->repo = $updateProjectLink->repoName;
        $this->project->description = $updateProjectLink->description;

        $this->project->save();

        return redirect()->route('admin.index');
    }

    public function delete($projectId)
    {
        $decodedProjectId = $this->decodeHash($projectId);

        $this->project = Project::find($decodedProjectId);

        if (! $this->project) {
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

    protected function truncateString($string, $limit)
    {
        if (strlen($string) > $limit) {
            return substr($string, 0, $limit) . '...';
        }

        return $string;
    }
}
