<?php namespace Console;
use GuzzleHttp\Client;
use function PHPSTORM_META\type;
use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Illuminate\Database\Capsule\Manager as Capsule;
/**
 * Author: Narek Vardanyan <vardanyan703@gmail.com>
 */
class Command extends SymfonyCommand
{

    public function __construct()
    {
        parent::__construct();

    }

    protected function getUsers(InputInterface $input, OutputInterface $output)
    {
        // outputs a message without adding a "\n" at the end of the line
        $output -> write("Start update ....\n");
        $client = new Client([
            'base_uri' => 'https://api.github.com/',
        ]);
        $response = $client->request('GET', 'users');
        $responseData = json_decode($response->getBody()->getContents());

        foreach ($responseData as $user){
            User::query()->updateOrCreate([
                'github_id' => $user->id,
            ],[
                'github_login' => $user->login
            ]
            );
        }
        // outputs a message without adding a "\n" at the end of the line
        $output -> write("Database is updated");
    }

}