@extends('admin.dashboard.components.page')

@section('content')
<div class="action-block">
	<button class="button">Додати</button>
</div>
<div class="questions-block">
	<table>
		<tr>
			<th>Питання</th>
			<th>Відповіді</th>
			<th></th>
		</tr>
		<tr>
			<td>Коли відбувається прийом громадян</td>
			<td>Прийом громадян відбувається щоденно з 09.30 до 12.30. Крім того, в понеділок прийом також проводиться з 14.00 до 17.00</td>
			<td><a href="#" class="edit show-modal">
				<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1.66667 13.0933H2.845L10.6067 5.47451L9.42833 4.31787L1.66667 11.9367V13.0933ZM15 14.7293H0V11.2585L11.1958 0.268795C11.3521 0.115444 11.564 0.0292969 11.785 0.0292969C12.006 0.0292969 12.2179 0.115444 12.3742 0.268795L14.7317 2.5829C14.8879 2.7363 14.9757 2.94432 14.9757 3.16122C14.9757 3.37812 14.8879 3.58615 14.7317 3.73954L5.2025 13.0933H15V14.7293ZM10.6067 3.16122L11.785 4.31787L12.9633 3.16122L11.785 2.00458L10.6067 3.16122Z" fill="#949494"/>
				</svg>
			</a></td>
		</tr>
	</table>
</div>
@endsection

@section('modal')

@endsection
