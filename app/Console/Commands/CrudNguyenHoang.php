<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CrudNguyenHoang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nguyenhoang:crud {name : Class (singular) for example User}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pet projects to create a CRUD simply !!';

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
        $name = $this->argument('name');

        $this->controller($name);
        $this->info('Created Controller !');
        $this->model($name);
        $this->info('Created Model !');
        $this->indexView($name);
        $this->info('Created Index !');

        File::append(base_path('routes/web.php'), 'Route::resource(\'' . str_plural(strtolower($name)) . "', '{$name}Controller');");
    }

    /**
     * Get template fromm folder stubs
     * @param  [type] $type Stubs Type
     * @return [type]       [description]
     */
    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }

    protected function model($name)
    {
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Model')
        );

        file_put_contents(app_path("/{$name}.php"), $modelTemplate);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/{$name}Controller.php"), $controllerTemplate);
    }

    protected function indexView($name){
        $indexTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower(str_plural($name)),
                strtolower($name)
            ],
            $this->getStub('index')
        );
        if (!file_exists(base_path().'/resources/views/'.strtolower(str_plural($name)))) {
            mkdir(base_path().'/resources/views/'.strtolower(str_plural($name))); 
        }
        
        fopen(base_path().'/resources/views/'.strtolower(str_plural($name)).'/index.blade.php', 'w');
        file_put_contents(base_path().'/resources/views/'.strtolower(str_plural($name)).'/index.blade.php', $indexTemplate);   
    }
}
