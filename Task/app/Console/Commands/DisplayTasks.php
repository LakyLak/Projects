<?php

namespace App\Console\Commands;

use App\Issue;
use App\Task;
use Illuminate\Console\Command;

class DisplayTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tasks:display';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $ids;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $issues = Issue::with('company', 'company.person')->has('task', '<', 1)->get();

        foreach ($issues as $issue) {
            $task = new Task;
            $task->issue_id = $issue->id;
            $task->person_id = $issue->company->person->id;
            $task->priority = $issue->level * $issue->company->score;
            $task->save();
        }

        $tasks = Task::with('issue', 'issue.company', 'person')->orderBy('priority', 'DESC')->get();

        echo 'ID | Name | Company | Priority | Assigned Person', PHP_EOL;
        foreach ($tasks as $task) {

            echo sprintf('%d | %s | %s | %d | %s',
                $task->id,
                $task->issue->name,
                $task->issue->company->name,
                $task->priority,
                $task->person->name), PHP_EOL;
        }
    }
}
