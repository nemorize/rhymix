<?php

namespace Rhymix\Modules\Dummy\Controllers;

/**
 * [PoC] 더미
 * 
 * Copyright (c) 더미
 * 
 * Generated with https://www.poesis.org/tools/modulegen/
 */
class Index extends Base
{
	/**
	 * 초기화
	 */
	public function init()
	{
		$this->setTemplatePath($this->module_path . 'views/');
	}
	
	/**
	 * 메인 화면 예제
	 */
	public function dispDummyIndex()
	{
		// 뷰 파일명 지정
		$this->setTemplateFile('index');
	}
}
