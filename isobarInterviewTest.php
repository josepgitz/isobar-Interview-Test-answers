<?php

namespace App\Http\Controllers;

use App\rc;
use Illuminate\Http\Request;

class BackendDeveloperControllers extends Controller
{
    public function displayCountryandtheircapital()
    {
        $countryntheircaputal=array([
            'italy'=>'rome',
            'luxembourg'=>'luxembourg',
            'Belgium'=>'Brussels',
            'Denamrks'=>'Copenhagen',
            'Finaland'=>'Helsiki',
            'Franec'=>'Paris',
            'Slovakia'=>'Bratislava',
            'Siovenia'=>'Ljubijjana',
            'Germany'=>'Berlin',
            'Greece'=>'Athens',
            'Ireland'=>'Dublin',
            'Netherland'=>'Amsterdam',
            'Portugal'=>'Lisbon',
            'Spain'=>'Madrid',
            'Sweden'=>'Stockholm'
    ]);
	
	$sortedArray=asort($countryntheircaputal);
    foreach($sortedArray as $country=>$capital){
	
	echo 'the capital city of'.$country.'is'.$capital;
    }
    }
    public function checkwhetherlowercose($name)
    {
        if (ctype_lower($name)) { 
            echo 'Yes';
        } else{ 
            echo 'No';
        }
    }

    public function displaymessagehello(Request $Request)
    {
        $name=$request->name;
        echo ('hello , i am'.$name);
    }
	public string displaymessage(){
	$name='scott';
	displaymessagehello($name);
	}
    public function jsondecodefuntion()
    {
        $string = '

        {
            "json": [
                {
                    "Title": "The Cuckoos Calling"
                },
                {
                    "Author": "Robert Galbraith"
                },
                "Details":[

                    {
                        "Publisher": "Little Brown"

                    }
                ]
            ]
        }';

        $Books = json_decode($string, true);

        foreach($Books['json'] as $i => $v)
        {
		    echo'Title';
            echo $v['Title'].'<br/>';
			 echo'Author';
            echo $v['Author'].'<br/>';
            foreach($Books['Details'] as $i => $v){
			echo $v['Publisher'].'<br/>';
            }
        }

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function temperatureInfo(rc $rc)
    {

      
        $arrayofnummber=array(
            "a" =>78,"b" =>60,"c" =>62,
            "d" =>68,
            "e" =>71,
            "f" =>68,
            "g" =>73,
            "h" =>85,
            "i" =>66,
            "j" =>64,
            "k" =>76,
            "l" =>63,
            "m" =>75,
            "n" =>76,
            "o" =>73,
            "p" =>68,
            "q" =>62,
            "r" =>73,
            "s" =>72,
            "t" =>65,
            "u" =>74,
            "v" =>62,
            "w" =>65,
            "x" =>64,
            "y" =>68,
            "z" =>73,
            "a1" =>75,
            "b1" =>79,
            "c1" =>73
        );
foreach($arrayofnummber as $key=>$value){
$sum=count($value);
$total=array_sum($value);
echo "The average is:";
$average=$sum/$total;

for($i = 0; $i < 7; $i++){

echo 'the lowest seven values are';
echo $temperatures[$i];
}
 for($i = count($temperatures) - 7; $i <= count($temperatures) - 1; $i++)
{
echo 'the highest seven values are';
	 echo $temperatures[$i];
}
 }
}
    

 
}
