<?php

namespace App\Actions\Questions;

use App\Actions\General\SingleResponse;
use App\Actions\Questions\DTO\Question;
use App\Models\Questions;

class UpdateQuestion
{
	public function execute(Question $data): SingleResponse
	{
		$qa = Questions::findOrFail($data->id);
        $qa->country = $data->country;
        $qa->category = $data->category;
        $qa->question = $data->question;
        $qa->answer = $data->answer;
        $qa->publish = $data->publish ? 1 : 0;
        $qa->save();

		return new SingleResponse($data);
	}
}
