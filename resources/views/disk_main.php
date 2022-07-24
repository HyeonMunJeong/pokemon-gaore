<?php
    require_once (__DIR__.$_ENV['ASSET_HEADER']);

    $start_emoji = "⭐";
?>
<section class="hero-section">
<div class="right">
	<div class="after"></div>
	<div class="top">
		<div class="root_area">
			<ul class="root">
				<li>디스크 정보 입력</li>
			</ul>
			<div class="side_info">
				<button class="btn black_btn" onclick="javascript:window.location.href='/disk/info';">등록</button>
			</div>
		</div>
		<form action="" class="search_area" name="search_form">
			<ul>
				<li>
					<label for="">탄수</label>	
					<select name="stage">
						<option value="">전체</option>
						<?php
							foreach ($stage_obj AS $so) {
						?>
								<option value="<?= $so['id'] ?>"><?= $so['name'] ?></option>
						<?php
							}
						?>
					</select>
				</li>
				<li>
					<label for="input1">이름</label>	
					<input type="text" name="name" value="" id="input1" autocomplete="off">
				</li>
				<li>
					<label for="input2">성급</label>	
					<select name="star_count">
						<option value="">전체</option>
						<?php
							foreach (range(1, 5) AS $item) {
						?>
									<option value="<?= $item ?>"><?= str_repeat($start_emoji, $item) ?></option>
						<?php
							}
						?>
					</select>
				</li>
				<li>
					<label for="input3">포켓몬 속성</label>	
					<select name="attribute">
						<?php
							foreach ($attribute_obj AS $ao) {
						?>
								<option value="" style="background-image:url(<?= $ao['path'] ?>);"></option>
						<?php
							}
						?>
					</select>
				</li>
				<li class="date_input">
					<label for="">등록일</label>	
					<ul>
						<li>
							<input type="text" class="datepicker_input input_date" name="st" placeholder="시작일" autocomplete="off">
						</li>
						<li>
							<input type="text" class="datepicker_input input_date" name="ed" placeholder="종료일" autocomplete="off">
						</li>
					</ul>
					<button type="button" class="btn gray_btn search_btn">검색</button>
				</li>
			</ul>
		</form>
	</div>
	<div class="table_wrap">
		<table class="table location_table">
			<caption class="rightT">총 0개</caption>
			<thead>
				<tr>
					<th>등록번호</th>
					<th>사진</th>
					<th>포켓몬 이름</th>
					<th>탄수</th>
					<th>성급</th>
					<th>에너지</th>
					<th>HP</th>
					<th>공격</th>
					<th>특수공격</th>
					<th>방어</th>
					<th>특수방어</th>
					<th>스피드</th>
					<th>포켓몬 속성</th>
					<th>공격기술</th>
					<th>공격 속성</th>
					<th>특수기술</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="16" class="gray_t">디스크 정보가 없습니다.</td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
</body>
</html>