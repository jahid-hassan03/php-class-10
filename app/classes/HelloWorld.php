<?php


namespace App\classes;


class HelloWorld
{
    public $name;
    public $email;
    public $mobile;
    public $firstname;
    public $lastname;
    public $x;
    public $y;
    public $z;

    public $data =[];

    public function index()
    {
        //$this->firstname ='Rahim';
        //$this->lastname ='khan';
        //echo "full name is ". $this->firstname." ". $this->lastname;

        //$this->x =100;
        //$this->y =20;
        //$this->z =30;

        $this->data = [10, 20, 30, 'bitm', 100.200, true];
        //echo $this->data[9];
        foreach ($this->data as $item)
        {
            echo $item;
        }


       // do
       // {
        //    echo 'hello world <br/>';
        //    $this->x++;
       // }
        //while($this->x < 110);



        //while ($this->x < 110)
        //{
        //    echo 'hello world <br/>';
         //   $this->x++;
       // }



        //for ($this->y =99; $this->y >=76; $this->y--)
        //{
         //   echo $this->y;
       // }

        // switch ($this->x)
        // {
          //   case 10:
         //        echo 'hello world';
         //        break;
          //   case 20:
          //       echo 'hello bangladesh';
         //        break;
         //    case 30:
         //        echo 'hello dhaka';
         //        break;
         //    default:
         //       echo 'hello bitm';
         //}



       //if ($this->x > 20)
        //{
        //   echo $this->x;
        //}
       //else
      //{
        //    echo 'hello world';
        //}


        //echo ($this->x > $this->y) || ($this->y > $this->z);
        //echo '<br/>.......<br/>';
        //echo ($this->x > $this->y) || ($this->y < $this->z);
        //echo '<br/>.......<br/>';
        //echo ($this->x < $this->y) || ($this->y > $this->z);
        //echo '<br/>.......<br/>';
        //echo ($this->x < $this->y) || ($this->y < $this->z);
        //echo '<br/>.......<br/>';

        //echo ($this->x > $this->y) && ($this->y > $this->z);
       // echo '<br/>.......<br/>';
        //echo ($this->x > $this->y) && ($this->y < $this->z);
       // echo '<br/>.......<br/>';
       // echo ($this->x < $this->y) && ($this->y > $this->z);
        //echo '<br/>.......<br/>';
       // echo ($this->x < $this->y) && ($this->y < $this->z);
       // echo '<br/>.......<br/>';

        //echo $this->x > $this->y;


       // echo $this->x += $this->y;
       // echo '<br/>';
       // echo $this->x -= $this->y;
       // echo '<br/>';
       // echo $this->x *= $this->y;
       // echo '<br/>';
       // echo $this->x /= $this->y;
       // echo '<br/>';
       // echo $this->x %= $this->y;
       // echo '<br/>';
       // echo $this->x .= $this->y;


        //echo  $this->x++;
        //echo '<br/>';
        //echo $this->x;


        //echo $this->x  + $this->y;
        //echo '<br/>';
       // echo $this->x - $this->y;
        //echo '<br/>';
       // echo $this->x * $this->y;
        //echo '<br/>';
       // echo $this->x / $this->y;
       // echo '<br/>';
        //echo $this->x % $this->y;






    }
}
