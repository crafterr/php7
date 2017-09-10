<?php
$logger = new class {
    public function log($msg) {
        return $msg;
    }
};

echo '<pre>'; var_dump($logger); echo '</pre>';
echo $logger->log('Adam mam kota');

var_dump($logger->log('adam ma kota'));

$quick_deck = new class(52) {

    private $card_count;

    public function __construct($num)
    {
        $this->card_count = $num;
    }

    public function getCardCount()
    {
        return $this->card_count;
    }
};


echo $quick_deck->getCardCount();

