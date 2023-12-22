<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class LandingController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('q');
        $n = $request->input('rank');

        $process = new Process(["python3", "query.py", "gamalmen.json", $n, $query]);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $list_data = array_filter(explode("\n",$process->getOutput()));

        $data = array();

        foreach ($list_data as $book) {
            $dataj =  json_decode($book, true);
            array_push($data, '
            <div class="py-5 px-16 w-fit border-2 border-black/20 rounded-xl shadow-md shadow-[#27ae60]/80">
                <div>
                    <img src="'.$dataj['gambar'].'" class="h-[15rem]">
                </div>
                <div class="mt-5">
                    <p class="font-bold text-xl text-center h-[5.5rem] overflow-hidden">'.$dataj['judul'].'</p>
                    <p class="mt-2 font-medium text-xl text-center">'.$dataj['harga'].'</p>
                    <div class="mt-4 m-auto w-fit">
                        <a target="_blank" href="'.$dataj['link-href'].'">
                            <button class="bg-[#27ae60] py-2 px-8 rounded-lg text-white hover:scale-[1.1] hover:tracking-[.05em]">Beli Skincare</button>
                        </a>
                    </div>
                </div>
            </div>
            ');
        }

        echo json_encode($data);
    }
}