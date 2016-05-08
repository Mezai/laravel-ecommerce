<?php

abstract class NetaxeptProvider {
	abstract protected function register();
	abstract protected function query();
	abstract protected function process();
	
}