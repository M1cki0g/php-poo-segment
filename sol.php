<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php
class extr
{
    private $extr1;
    private $extr2;

    public function __construct($extr1, $extr2)
    {
        $this->extr1 = $extr1;
        $this->extr2 = $extr2;
    }

    public function ordonne()
    {
        if ($this->extr1 > $this->extr2) {
            $temp = $this->extr1;
            $this->extr1 = $this->extr2;
            $this->extr2 = $temp;
        }
    }
    public function getLongueur()
    {
        $this->ordonne();
        return $this->extr2 - $this->extr1;
    }

    public function appart($x)
    {
        if ($x < $this->extr1)
            return true;
        else
            return false;
    }

    public function aff()
    {
        echo "extr1: $this->extr1<br>";
        echo "extr2: $this->extr2<br>";
        echo "Segment [{$this->extr1},{$this->extr2}]<br>";
    }
}


?>
