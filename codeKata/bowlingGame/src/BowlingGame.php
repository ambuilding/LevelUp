<?php

class BowlingGame
{
	const FRAMES_PER_GAME = 10;
	protected $rolls = [];

    public function roll($pins)
    {
    	$this->guardAgainstInvalidRoll($pins);
        $this->rolls[] = $pins;
    }

    public function score()
    {
    	//return array_sum($this->rolls);
    	$score = 0;
    	$roll = 0;

    	for ($frame = 1; $frame <= self::FRAMES_PER_GAME; $frame ++) { 
    		if ($this->isStrike($roll)) {
    			$score += 10 + $this->strikeBonus($roll);
    			$roll += 1;

    			//continue;
    		} else if ($this->isSpare($roll)) {
    			$score += 10 + $this->spareBonus($roll);
    			$roll += 2;
    		} else {
    			$score += $this->getDefaultFrameScore($roll);
    			$roll += 2;
    		}

    		//$score += $this->isSpare($roll) ? 10 + $this->spareBonus($roll) : $this->getDefaultFrameScore($roll);
    		//$roll += 2;
    	}

    	return $score;
    }

    // Did the player make a spare?
    private function isSpare($roll)
	{
		return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
	}

	// Did the player make a strike?
	private function isStrike($roll)
	{
		return $this->rolls[ $roll ] == 10;
	}

	// Get the default sum of the two rolls for a frame.
	private function getDefaultFrameScore($roll)
	{
		return $this->rolls[$roll] + $this->rolls[$roll + 1];
	}

	// Get the bonus for a strike in a frame.
	private function strikeBonus($roll)
	{
		return $this->rolls[$roll + 1] + $this->rolls[$roll + 2];
	}


	// Get the bonus for a spare in a frame.
	private function spareBonus($roll)
	{
		return $this->rolls[$roll + 2];
	}

	// All rolls must valid.
	private function guardAgainstInvalidRoll($pins)
	{
		if ($pins < 0) {
			throw new InvalidArgumentException;
		}
	}
}
