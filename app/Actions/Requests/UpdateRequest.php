<?php

namespace App\Actions\Requests;

use App\Actions\General\SingleResponse;
use App\Actions\Requests\DTO\Request;
use App\Models\QAndA;

class UpdateRequest
{
	public function execute(Request $data): SingleResponse
	{
		$qa = QAndA::with(['responsible'])->findOrFail($data->id);
        $qa->country = $data->country;
        $qa->question_category = $data->category > 0 ? $data->category : null;
        $qa->consul_answer = $data->answer;

		$qa->save();

		return new SingleResponse(
			Request::fromEntity($qa)
		);
	}
}
