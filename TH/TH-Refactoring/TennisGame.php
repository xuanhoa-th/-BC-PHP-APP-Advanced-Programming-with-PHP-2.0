<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

class TennisGame
{
    public $score = 0;

    public function getScore($peopleOne, $peopleTwo)
    {
        if ($peopleOne == $peopleTwo) {
            switch ($peopleOne) {
                case 0:
                    $this->score = "Love-All";
                    break;
                case 1:
                    $this->score = "Fifteen-All";
                    break;
                case 2:
                    $this->score = "Thirty-All";
                    break;
                case 3:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
        } else if ($peopleOne >= 4 || $peopleTwo >= 4) {
            $Result = $peopleOne - $peopleTwo;
            if ($Result == 1) $this->score = "Advantage player1";
            else if ($Result == -1) $this->score = "Advantage player2";
            else if ($Result >= 2) $this->score = "Win for player1";
            else $this->score = "Win for player2";
        } else {
            for ($i = 1; $i < 3; $i++) {
                if ($i == 1) $tempScore = $peopleOne;
                else {
                    $this->score .= "-";
                    $tempScore = $peopleTwo;
                }
                switch ($tempScore) {
                    case 0:
                        $this->score .= "Love";
                        break;
                    case 1:
                        $this->score .= "Fifteen";
                        break;
                    case 2:
                        $this->score .= "Thirty";
                        break;
                    case 3:
                        $this->score .= "Forty";
                        break;
                }
            }
        }
    }

    public function toString()
    {
        return $this->score;
    }
}