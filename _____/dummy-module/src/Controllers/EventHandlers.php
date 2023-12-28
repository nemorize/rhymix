<?php

namespace Rhymix\Modules\Dummy\Controllers;

/**
 * [PoC] 더미
 *
 * Copyright (c) 더미
 *
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class EventHandlers extends Base
{
	public function afterInsertDocument()
	{
		executeQuery('dummy.insertDummy', [
			'dummy_srl' => getNextSequence()
		]);
	}

	public function afterUpdateDocument()
	{
		$this->afterInsertDocument();
	}

	public function afterDeleteDocument()
	{
		$this->afterInsertDocument();
	}
}
