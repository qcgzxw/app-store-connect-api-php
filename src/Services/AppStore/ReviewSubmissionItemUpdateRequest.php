<?php

/**
 * MIT License
 * 
 * Copyright (c) 2023 Long Pham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace Cantie\AppStoreConnect\Services\AppStore;

class ReviewSubmissionItemUpdateRequest_Data_Attributes extends \Cantie\AppStoreConnect\Model
{
	public $resolved;
	public $removed;

	public function getResolved()
	{
		return $this->resolved;
	}
	public function setResolved($resolved)
	{
		$this->resolved = $resolved;
		return $this;
	}
	public function getRemoved()
	{
		return $this->removed;
	}
	public function setRemoved($removed)
	{
		$this->removed = $removed;
		return $this;
	}

}
class_alias(ReviewSubmissionItemUpdateRequest_Data_Attributes::class, 'AppleService_AppStore_ReviewSubmissionItemUpdateRequest_Data_Attributes');

class ReviewSubmissionItemUpdateRequest_Data extends \Cantie\AppStoreConnect\Model
{
	public $type = 'reviewSubmissionItems';
	public $id;
	protected $attributesType = ReviewSubmissionItemUpdateRequest_Data_Attributes::class;
	protected $attributesDataType = 'object';

	public function getType()
	{
		return $this->type;
	}
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}
	/**
	* @return  ReviewSubmissionItemUpdateRequest_Data_Attributes
	*/
	public function getAttributes()
	{
		return $this->attributes;
	}
	/**
	* @param  ReviewSubmissionItemUpdateRequest_Data_Attributes
	*/
	public function setAttributes($attributes)
	{
		$this->attributes = $attributes;
		return $this;
	}

}
class_alias(ReviewSubmissionItemUpdateRequest_Data::class, 'AppleService_AppStore_ReviewSubmissionItemUpdateRequest_Data');

class ReviewSubmissionItemUpdateRequest extends \Cantie\AppStoreConnect\Model
{
	protected $dataType = ReviewSubmissionItemUpdateRequest_Data::class;
	protected $dataDataType = 'object';

	/**
	* @return  ReviewSubmissionItemUpdateRequest_Data
	*/
	public function getData()
	{
		return $this->data;
	}
	/**
	* @param  ReviewSubmissionItemUpdateRequest_Data
	*/
	public function setData($data)
	{
		$this->data = $data;
		return $this;
	}

}
class_alias(ReviewSubmissionItemUpdateRequest::class, 'AppleService_AppStore_ReviewSubmissionItemUpdateRequest');
