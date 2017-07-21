<?php

class VideoPlayer {
	public function play($file)
	{
		
	}
}

class AviVideoPlayer extends VideoPlayer{
	public function play($file)
	{
		if (pathinfo($file, PATHINFO_EXENSION) !== 'avi') {
			throw new Exception; // violates the LSP
		}
	}
}